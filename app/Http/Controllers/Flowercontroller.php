<?php

namespace App\Http\Controllers;

use App\Category;
use App\Flower;
use Illuminate\Http\Request;

class Flowercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::all();
        $flower=Flower::all();
        return view('admin.flower')->with('category',$category)
                                ->with('flower',$flower);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('admin.addflower',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flower = new Flower();
        $flower->Flowername = $request->name; 
        $flower->Price = $request->price; 
        $flower->Quantity = $request->Quantity;  
        $flower->Categoryid = $request->category;   
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('Uploads/product',$image_new_name); 
        $img = 'Uploads/product/'.$image_new_name;

        $flower->Flowerimage = $img;
        $flower->save();
        return redirect()->back()->with('success','Product Added Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flower = Flower::findOrFail($id);
        $flower->delete();
        unlink($flower->Flowerimage);
        return redirect()->back()->with('success','Successfully Deleted');
    }
}
