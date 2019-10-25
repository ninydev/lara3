<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;

class ControllerVendor extends Controller
{
    public function index()
    {
        $vendors = Vendor::All(); // Взять все из базы
        $head["title"] = "My Cars Vendor";
        $head["autor"] = "Oleksandr Nykytin";

        $header["pagetitle"] = "All My Cars Vendors";


        // dd($cars);
        return view('vendor.all', 
            [   
                'vendors' => $vendors,
                'head' => $head,
                'header' => $header
            ]
            ); // Отправить во вьюшку
        
    }


        public function show($id)
    {
        $vendor = Vendor::find($id);
        return view('vendor.show',  ['vendor' => $vendor]);
    }
}
