<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedBack extends Controller
{
    //

    public function Form() {
    	return view('feedback.form');
    }


    public function Send(Request $request) {
    	$f = new \App\Feedback();
    	$f->name = $request->name;
    	$f->email = $request->email;
    	$f->tel = $request->tel;
    	$f->msg = $request->msg;
    	$f->save();


    	if ($request->ajax()) {
    		return "Welcome to ajax";
    	} else {
	    	return view('feedback.send');
    	}
    }


}
