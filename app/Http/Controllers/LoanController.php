<?php

namespace App\Http\Controllers;

use App\Loans;
use App\Resources;
use App\User;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loans = Loans::all();
        $resources = Resources::all();
        $users = User::all();
        return view('loans/index', ['loans' => $loans, 'resources' => $resources, 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resources = Resources::all();
        $users = User::all();
        return view('loans/create', ['resources' => $resources, 'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loan = new Loans();
        $loan->user_id = $request->user_id;
        $loan->resource_id = $request->resource_id;
        $loan->save();
        $loans = Loans::all();
        return view('loans/index', ['loans' => $loans]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Loans::where('id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loan = Loans::find($id);
        $resources = Resources::all();
        $users = User::all();
        return view('loans/edit', ['loan' => $loan, 'resources' => $resources, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $loan = Loans::find($id);
        $loan->update($request->all());
        $loans = Loans::all();
        return view('loans/index', ['loans' => $loans]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loan = Loans::find($id);
        $loan->delete();
        $loans = Loans::all();
        return view('loans/index', ['loans' => $loans]);
    }
}
