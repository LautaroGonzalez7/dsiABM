<?php

namespace App\Http\Controllers;

use App\Loans;
use App\Resources;
use App\Customers;
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
        $customers = Customers::all();
        return view('loans/index', ['loans' => $loans, 'resources' => $resources, 'customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resources = Resources::all();
        $customers = Customers::all();

        if (!isset($resources[0]) || !isset($customers[0])){
            return redirect('loans/index');
        }else{
            return view('loans/create', ['resources' => $resources, 'customers' => $customers]);
        }

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
        $loan->customer_id = $request->customer_id;
        $loan->resource_id = $request->resource_id;
        $loan->since = $request->since;
        $loan->until = $request->until;

        $status = true;

        try {
            $loan->save();
        } catch (\Exception $error) {
            $status = false;
        }

        if ($status) {
            return redirect('loans/index');
        } else {
            return Redirect('loans/index')->with(['message' => 'Error! No se pudo agregar.']);
        }
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
        $customers = Customers::all();
        return view('loans/edit', ['loan' => $loan, 'resources' => $resources, 'customers' => $customers]);
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

        $status = true;

        try {
            $loan->update($request->all());
        } catch (\Exception $error) {
            $status = false;
        }

        if ($status) {
            return redirect('loans/index');
        } else {
            return Redirect('loans/index')->with(['message' => 'Error! No se pudo modificar.']);
        }
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
        return redirect('loans/index');
    }
}
