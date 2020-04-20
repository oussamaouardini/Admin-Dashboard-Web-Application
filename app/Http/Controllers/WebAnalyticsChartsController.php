<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class WebAnalyticsChartsController extends Controller
{

    public function chart()
    {
        $max = random_int(100, 150);
        $Array1 = array(array(0, random_int(20, 30))); //data line 1
        $Array2 = array(
            array(0, random_int(20, 30)) // data line 2
        );
        for ($i = 1; $i < $max; $i++) {
            // array_push($Array,$i => random_int(0,30));
            $Array1[$i] = array($i, random_int(20, 30));
            $Array2[$i] = array($i, random_int(60, 70));
        }
        return  response()->json(
            array(
                'success' => true,
                'error' => false,
                'data1'   => $Array1,
                'data2'   => $Array2
            )
        );
    }
    public function chart1()
    {
        $max = random_int(100, 150);
        $Array1 = array(array(0, random_int(20, 30))); //data line 1
        $Array2 = array(
            array(0, random_int(20, 30)) // data line 2
        );
        for ($i = 1; $i < $max; $i++) {
            // array_push($Array,$i => random_int(0,30));
            $Array1[$i] = array($i, random_int(20, 30));
            $Array2[$i] = array($i, random_int(60, 70));
        }
        return  response()->json(
            array(
                'success' => true,
                'error' => false,
                'data1'   => $Array1,
                'data2'   => $Array2
            )
        );
    }
}
