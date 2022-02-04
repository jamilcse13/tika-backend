<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\People;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function verify(Request $request)
    {
        if (empty($request->category_id)) {
            return 'Please select Category';
        }
        if (empty($request->id_no)) {
            return 'Please select Id No';
        }
        if (empty($request->dob)) {
            return 'Please select Date of Birth';
        }
//        $request->validate(['category_id' => 'required', 'id_no' => 'required', 'dob' => 'required']);

        $people = People::where('id_no', $request->id_no)->where('dob', $request->dob)->first();
        if (empty($people)) {
            return 'Id not found or DoB not correct';
        } else {
            //Id fount, match dob
            $category = Category::where('id', $request->category_id)->first();
            if (empty($category)) {
                return 'Category not found';
            } else {
                //check eligible age
                $current_age = tikaAgeDifference($request->dob);
                if ($current_age >= $category->min_age) {
                    //start registration
                    if ($people->registered) {
                        return 'You are already registered';
                    } else {
                        return $people;
                    }
                } else {
                    return 'Minimum age for' . $category->name . ' is ' . $category->min_age . '. Your current age is ' . $current_age;
                }
            }
        }
    }
}
