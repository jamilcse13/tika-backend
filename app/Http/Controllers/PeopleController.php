<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $peoples = People::paginate();

        return view('peoples.index', ['peoples' => $peoples]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param People $people
     * @return void
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param People $people
     * @return Application|Factory|\Illuminate\Contracts\View\View|void
     */
    public function edit(People $people)
    {
        return view('peoples.edit', ['people' => $people]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param People $people
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function update(Request $request, People $people)
    {
        $request->validate(['id_no' => 'required', 'dob' => 'required|date', 'office' => 'required']);

        $people->id_no = $request->id_no;
        $people->dob = $request->dob;
        $people->office = $request->office;
        $people->save();

        return redirect(route('peoples.index'))->with('success', 'Data updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param People $people
     * @return void
     */
    public function destroy(People $people)
    {
        //
    }
}
