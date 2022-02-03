<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View|Response
     */
    public function index()
    {
        $divisions = Division::paginate();

        return view('divisions.index', ['divisions' => $divisions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Division $division
     * @return Response
     */
    public function show(Division $division)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Division $division
     * @return Response
     */
    public function edit(Division $division)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Division $division
     * @return Response
     */
    public function update(Request $request, Division $division)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Division $division
     * @return Response
     */
    public function destroy(Division $division)
    {
        //
    }

    public function enableDisable($id)
    {
        $division = Division::findOrFail($id);
        $division->enabled = !$division->enabled;
        $division->save();

//        return redirect(route('divisions.index'));
        return redirect()->back()->with('success', $division->name . ' Updated Successfully!');
    }
}
