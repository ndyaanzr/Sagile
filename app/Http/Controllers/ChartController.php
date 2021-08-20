<?php

namespace App\Http\Controllers;
use App\Role;
use App\User;
use DB;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    function index()
    {
        // $data = DB::table('projects')
        //         ->select(
        //             DB::raw('start_date as start_date'),
        //             DB::raw('count(*) as number')
        //         )
        //         ->groupBy('start_date')
        //         ->get();
        
        //         $array[] = ['Start', 'Number'];
        //         foreach($data as $key => $value)
        //         {
        //             $array[++$key] = [$value->start_date, $value->number];
        //         }
                return view('chart.index');
                // ->with('start_date', json_encode($array))
    }
}

// function index()
//     {
//      $data = DB::table('tbl_employee')
//        ->select(
//         DB::raw('gender as gender'),
//         DB::raw('count(*) as number'))
//        ->groupBy('gender')
//        ->get();
//      $array[] = ['Gender', 'Number'];
//      foreach($data as $key => $value)
//      {
//       $array[++$key] = [$value->gender, $value->number];
//      }
//      return view('google_pie_chart')->with('gender', json_encode($array));
//     }
