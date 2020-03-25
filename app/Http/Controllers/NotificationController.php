<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function notification(){
        return  response()->json(array(
                'success' => true,
                'error' => false,
                'data'   => array(
                    "img"  => "https://via.placeholder.com/500x500",
                    "title"  => "Men's Underwear",
                    "situation"  => "is in stock rupture",
                    "date"  => "Fri 13 02:56 AM",
                    ),
            )
        );
    }
}
