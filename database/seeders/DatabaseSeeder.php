<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\District;
use App\Models\Division;
use App\Models\Upazila;
use App\Models\User;
use App\Models\People;
use App\Models\VaccinationCenter;
use App\Models\Vaccine;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        People::factory(30)->create();

        $user = new User();
        $user->name = 'Jamil Ahsan';
        $user->email = 'demo@laravel.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('123456');
        $user->remember_token = Str::random(10);
        $user->save();

        // create divisions
        $divisions = tika_bd_divisions();

        foreach ($divisions as $division) {
            $divisionModel = new Division();
            $divisionModel->name = $division['name'];
            $divisionModel->save();
        }

        //create districts
        $districts = tika_bd_districts();

        foreach ($districts as $district) {
            $districtModel = new District();
            $districtModel->name = $district['name'];
            $districtModel->division_id = $district['division_id'];
            $districtModel->save();
        }

        //create upazilas
        $upazilas = tika_bd_upazilas();

        foreach ($upazilas as $upazila) {
            $upazilaModel = new Upazila();
            $upazilaModel->name = $upazila['name'];
            $upazilaModel->district_id = $upazila['district_id'];
            $upazilaModel->save();
        }

        //create categories
        $categories = tika_bd_categories();

        foreach ($categories as $category) {
            $categoryModel = new Category();
            $categoryModel->name = $category['name'];
            $categoryModel->min_age = $category['min_age'];
            $categoryModel->save();
        }

        //create vaccines
        $available_vaccines = ['Pfizer', 'Moderna', 'AstraZeneca', 'Sinopharm', 'Sputnik V'];

        foreach ($available_vaccines as $vaccine) {
            $vaccineModel = new Vaccine();
            $vaccineModel->name = $vaccine;
            $vaccineModel->save();
        }

        VaccinationCenter::factory(30)->create();
    }
}
