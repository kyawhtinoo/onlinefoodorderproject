<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use App\Item;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $restaurants=Restaurant::orderby('id','desc')->get();
        $items=Item::all();
        return view('backend.restaurants.index',compact('restaurants',compact('items')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.restaurants.create');
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
            'name'=>'required',
            'photo'=>'required|mimes:jpg,jpeg,png',
            'type'=>'required',
        ]);

         if ($request->file()) {
           $fileName=time().'_'.$request->photo->getClientOriginalName();

           $filePath=$request->file('photo')->storeAs('restaurantimg',$fileName,'public');
           $path = '/storage/'.$filePath;
       }

       $restaurant=new Restaurant;
       $restaurant->name=$request->name;
       $restaurant->photo=$path;
       $restaurant->type=$request->type;
       $restaurant->save();
       return redirect()->route('restaurants.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
         return view('backend.restaurants.edit',compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
         $request->validate([
            'name'=>'required',
            'photo'=>'sometimes|mimes:jpg,jpeg,png',
            'type'=>'required',
        ]);

         if ($request->file()) {
           $fileName=time().'_'.$request->photo->getClientOriginalName();

           $filePath=$request->file('photo')->storeAs('restaurantimg',$fileName,'public');
           $path = '/storage/'.$filePath;
           $restaurant->photo=$path;
       }

      
       $restaurant->name=$request->name;
      
       $restaurant->type=$request->type;
       $restaurant->save();
       return redirect()->route('restaurants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return redirect()->route('restaurants.index');

    }
}
