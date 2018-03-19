<?php

namespace App\Http\Controllers;
use App\Fruit;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $fruits = Fruit::all()->toArray();
      return view('fruits.index', compact('fruits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('fruits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [

        'fruit_name' => 'required',
        'quantity' => 'required',
        'price' => 'required',
        'discount' => 'required'

      ]);

      if($validator->fails()){
        return redirect('fruits/create')
           ->withErrors($validator)
           ->withInput();
      }
  $fruit = new Fruit();
  $fruit -> fruit_name = $request->get("fruit_name");
  $fruit -> quantity = $request->get("quantity");
  $fruit -> price = $request->get("price");
  $fruit -> discount = $request->get("discount");

  $fruit->save();
  return redirect('fruits');
    }



    public function edit($id){
      $fruit = Fruit::find($id);
      return view('fruits.edit', compact('fruit', 'id'));
    }


public function update(Request $request, $id){

    $fruit = Fruit::find($id);

    $validator = Validator::make($request->all(), [

        'fruit_name' => 'required',
        'quantity' => 'required',
        'price' => 'required',
        'discount' => 'required'

    ]);

    if($validator->fails()){
        return redirect('fruits/edit')
            ->withErrors($validator)
            ->withInput();
    }

        $fruit->fruit_name = $request->get("fruit_name");
        $fruit->quantity = $request->get("quantity");
        $fruit->price = $request->get("price");
        $fruit->discount = $request->get("discount");

        $fruit->save();

        return redirect('fruits')->with('Success', 'Fruit Updated!!');
  
}

public function destroy($id){
    $fruit = Fruit::find($id);
    $fruit->delete();

    return redirect('fruits')->with('Success', 'Fruit Deleted!!');

}
}
