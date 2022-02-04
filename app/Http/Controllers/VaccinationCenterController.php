<?php

namespace App\Http\Controllers;

use App\Models\VaccinationCenter ;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VaccinationCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View|Response
     */
    public function index()
    {
        $vaccination_centers = VaccinationCenter ::paginate();
        return view('vaccination_centers.index', ['vaccination_centers' => $vaccination_centers]);
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
     * @param VaccinationCenter $vaccination_center
     * @return Response
     */
    public function show(VaccinationCenter $vaccination_center)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param VaccinationCenter $vaccination_center
     * @return Application|Factory|\Illuminate\Contracts\View\View|Response
     */
    public function edit(VaccinationCenter $vaccination_center)
    {
        return view('vaccination_centers.edit', ['vaccination_center' => $vaccination_center]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param VaccinationCenter $vaccination_center
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, VaccinationCenter $vaccination_center)
    {
        $request->validate(['name' => 'required', 'upazila_id' => 'required|numeric', 'vaccine_id' => 'required|numeric', 'available' => 'required|numeric']);

        $vaccination_center->name = $request->name;
        $vaccination_center->upazila_id = $request->upazila_id;
        $vaccination_center->vaccine_id = $request->vaccine_id;
        $vaccination_center->available = $request->available;
        $vaccination_center->save();

        return redirect(route('vaccination-centers.index'))->with('success', $vaccination_center->name . ' is updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param VaccinationCenter $vaccination_center
     * @return Response
     */
    public function destroy(VaccinationCenter $vaccination_center)
    {
        //
    }
}
