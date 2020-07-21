<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\t_monitoring;
use Carbon;
use Validator;

class MonitoringController extends Controller
{
    public function post($c,$ph,$ppm){
        // $validator = Validator::make($request->all(),
        // [
        //     'monitoring_celcius' => 'required',
        //     'monitoring_ph' => 'required',
        //     'monitoring_ppm' => 'required',
        // ]);
        // if ($validator->fails()) {
        //     return ['failed' => 'error'];
        // }
        // else{
            $mytime = Carbon\Carbon::now();
            $create_monitoring = t_monitoring::create([
                'monitoring_celcius' => $c,
                'monitoring_ph' => $ph,
                'monitoring_ppm' => $ppm,
                'monitoring_created_at' => $mytime->toDateTimeString()
            ]);

            return $create_monitoring;
        // }

    }
}
