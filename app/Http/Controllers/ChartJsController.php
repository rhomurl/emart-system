<?php

namespace App\Http\Controllers;

use App\Models\User;
use Redirect,Response;
Use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ChartJsController extends Controller
{

    $data = [];
 
     foreach($record as $row) {
        $data['label'][] = $row->day_name;
        $data['data'][] = (int) $row->count;
      }
 
    $data['chart_data'] = json_encode($data);
    return view('chart-js', $data);
    }
  
     $data = [];
 
     foreach($record as $row) {
        $data['label'][] = $row->day_name;
        $data['data'][] = (int) $row->count;
      }
 
    $data['chart_data'] = json_encode($data);
    return view('chart-js', $data);
    }
}
