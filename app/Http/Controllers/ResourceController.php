<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Resources;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resources = Resources::all();
        $categories = Categories::all();
        return view('resources/index',['categories' => $categories,'resources' => $resources]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('resources/create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resource = new Resources();
        $resource->name = $request->name;
        $resource->category_id = $request->category_id;
        $resource->save();
        $resources = Resources::all();
        return view('resources/index',['resources' => $resources]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Resources::where('id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resource = Resources::find($id);
        $categories = Categories::all();
        return view('resources/edit',['categories' => $categories,'resource' => $resource]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $resource = Resources::find($id);
        $resource->update($request->all());
        $resources = Resources::all();
        return view('resources/index',['resources' => $resources]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resource = Resources::find($id);
        $resource->delete();
        $resources = Resources::all();
        return view('resources/index',['resources' => $resources]);
    }
}
