<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bed; // Имя модели, с которой я буду работать

class ControllerBed extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$cars = Bed::All(); // Взять все из базы
        $cars = Bed::where('length', '>', 450)->get();

        $head["title"] = "My Cars";
        $head["autor"] = "Oleksandr Nykytin";

        $header["pagetitle"] = "All My Cars";


        //dd($cars);
        return view('cars.all', 
            [   
                'cars' => $cars,
                'head' => $head,
                'header' => $header
            ]
            ); // Отправить во вьюшку
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $car = Bed::find($id);
        // return view('cars.show',  ['car' => $car]);
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
        //
    }
}
