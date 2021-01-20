<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Restaurant;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::all();
        return view('backend.items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $restaurants=Restaurant::all();
         return view('backend.items.create',compact('restaurants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          
          'name'=> 'required',
          'photo'=>'required|mimes:jpeg,jpg,png',
          'price'=>'required',
          'description'=>'required',
          'restaurant' => 'required',
          
        ]);

       if ($request->file()) {
           $fileName=time().'_'.$request->photo->getClientOriginalName();

           $filePath=$request->file('photo')->storeAs('itemimg',$fileName,'public');
           $path = '/storage/'.$filePath;
       }

       if ($request->discount) {
           $discount=$request->discount;
       }else{
           $discount=0;
       }





        $item= new Item;
        $item->name=$request->name;
        $item->photo=$path;
        $item->price=$request->price;
        $item->discount=$discount;
        $item->description=$request->description;
        $item->restaurant_id = $request->restaurant;
        $item->save();

        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
       $restaurants=Restaurant::all();
       return view('backend.items.edit',compact('item','restaurants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
         $request->validate([
         
          'name'=> 'required',
          'photo'=>'sometimes|mimes:jpeg,jpg,png',
          'price'=>'required',
          'description'=>'required',
          'restaurant' => 'required',
         
        ]);

       if ($request->file()) {
           $fileName=time().'_'.$request->photo->getClientOriginalName();

           $filePath=$request->file('photo')->storeAs('itemimg',$fileName,'public');
           $path = '/storage/'.$filePath;
           $item->photo=$path;
       }
       if ($request->discount) {
           $discount=$request->discount;
       }else{
           $discount=0;
       }


      
        $item->name=$request->name;
        $item->price=$request->price;
        $item->discount=$discount;
        $item->description=$request->description;
        $item->restaurant_id = $request->restaurant;
        $item->save();
        
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index');
    }
}
