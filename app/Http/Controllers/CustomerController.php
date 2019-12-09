<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customers::all();
        return view('customers/index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customers();
        $customer->name = $request->name;
        $customer->lastname = $request->lastname;
        $customer->dni = $request->dni;
        $customer->legajo = $request->legajo;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->address = $request->address;

        $status = true;

        try {
            $customer->save();
        } catch (\Exception $error) {
            $status = false;
        }

        if ($status) {
            return redirect('customers/index');
        } else {
            return Redirect('customers/index')->with(['message' => 'Error! No se pudo agregar.']);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customers::find($id);
        return view('customers/edit', ['customer' => $customer]);
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
        $customer = Customers::find($id);

        $status = true;

        try {
            $customer->update($request->all());
        } catch (\Exception $error) {
            $status = false;
        }

        if ($status) {
            return redirect('customers/index');
        } else {
            return Redirect('customers/index')->with(['message' => 'Error! No se pudo modificar.']);
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
        $customer = Customers::find($id);
        $customer->delete();
        return redirect('customers/index');
    }
}
