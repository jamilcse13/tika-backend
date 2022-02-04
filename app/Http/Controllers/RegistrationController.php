<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View|Response
     */
    public function index()
    {
        $registrations = Registration ::paginate();
        return view('registrations.index', ['registrations' => $registrations]);
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
     * @param Registration $registration
     * @return Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Registration $registration
     * @return Application|Factory|\Illuminate\Contracts\View\View|Response
     */
    public function edit(Registration $registration)
    {
        return view('registrations.edit', ['registration' => $registration]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Registration $registration
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Registration $registration)
    {
        $request->validate(['name' => 'required']);

        $registration->name = $request->name;
        $registration->save();

        return redirect(route('registrations.index'))->with('success', $registration->name . ' is updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Registration $registration
     * @return Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
