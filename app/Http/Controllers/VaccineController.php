<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View|Response
     */
    public function index()
    {
        $vaccines = Vaccine ::paginate();
        return view('vaccines.index', ['vaccines' => $vaccines]);
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
     * @param Vaccine $vaccine
     * @return Response
     */
    public function show(Vaccine $vaccine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Vaccine $vaccine
     * @return Application|Factory|\Illuminate\Contracts\View\View|Response
     */
    public function edit(Vaccine $vaccine)
    {
        return view('vaccines.edit', ['vaccine' => $vaccine]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Vaccine $vaccine
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Vaccine $vaccine)
    {
        $request->validate(['name' => 'required']);

        $vaccine->name = $request->name;
        $vaccine->save();

        return redirect(route('vaccines.index'))->with('success', $vaccine->name . ' is updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Vaccine $vaccine
     * @return Response
     */
    public function destroy(Vaccine $vaccine)
    {
        //
    }
}
