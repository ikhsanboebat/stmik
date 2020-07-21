<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Src\Saldo;
use App\Library\Src\Pemesanan;
use App\Library\Src\Pengumuman;
use Auth;
use App\t_monitoring;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $b = array();
        $data_paginate = t_monitoring::paginate('5');
        $data_grafik = t_monitoring::all();
        // $data['array'] = [[0, 110],[1, 150],[2, 250],[3, 240],[4, 130],[5, 180],[6, 500],[7, 100]];
        foreach($data_grafik as $dm){
            $b[] = [$dm->monitoring_id,$dm->monitoring_celcius];
        }
        $data['grafik'] = $b;
        // $data['array_monitoring'] =
        $data['monitoring'] = $data_grafik;
        $data['mon_table'] = $data_paginate;
        return view('home',$data);
    }

    public function index2()
    {
        $b = array();
        $data_paginate = t_monitoring::paginate('5');
        $data_grafik = t_monitoring::all();
        // $data['array'] = [[0, 110],[1, 150],[2, 250],[3, 240],[4, 130],[5, 180],[6, 500],[7, 100]];
        foreach($data_grafik as $dm){
            $b[] = [$dm->monitoring_id,$dm->monitoring_celcius];
        }
        $data['grafik'] = $b;
        // $data['array_monitoring'] =
        $data['monitoring'] = $data_grafik;
        $data['mon_table'] = $data_paginate;
        return view('home2',$data);
    }

    public function index3()
    {
        $b = array();
        $data_paginate = t_monitoring::paginate('5');
        $data_grafik = t_monitoring::all();
        // $data['array'] = [[0, 110],[1, 150],[2, 250],[3, 240],[4, 130],[5, 180],[6, 500],[7, 100]];
        foreach($data_grafik as $dm){
            $b[] = [$dm->monitoring_id,$dm->monitoring_celcius];
        }
        $data['grafik'] = $b;
        // $data['array_monitoring'] =
        $data['monitoring'] = $data_grafik;
        $data['mon_table'] = $data_paginate;
        return view('home3',$data);
    }
}
