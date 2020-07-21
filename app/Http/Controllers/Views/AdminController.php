<?php

namespace App\Http\Controllers\Views;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Library\Src\Saldo;
use App\Library\Src\Pemesanan;
use App\Library\Src\Pengumuman;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function view(){
        $us_saldo = new Saldo(null,Auth::user()->id,1,null);
        $pd_pemesanan = new Pemesanan(null,Auth::user()->id,null,null,null);
        $pn_pengumuman = new Pengumuman(null,null,null,null);

        $data['saldo_user'] = $us_saldo->GetSaldo();
        $data['saldo_masuk'] = $us_saldo->GetSaldoMasuk();
        $data['saldo_keluar'] = $us_saldo->GetSaldoKeluar();
        $data['total_pembelian'] = $pd_pemesanan->GetCountPemesanan();
        $data['get_pengumuman'] = $pn_pengumuman->GetPengumuman();

        return view('admin.admin',$data);
    }

    public function pengumuman_view(){
        $us_saldo = new Saldo(null,Auth::user()->id,1,null);
        $pd_pemesanan = new Pemesanan(null,Auth::user()->id,null,null,null);
        $pn_pengumuman = new Pengumuman(null,null,null,null);

        $data['saldo_user'] = $us_saldo->GetSaldo();
        $data['saldo_masuk'] = $us_saldo->GetSaldoMasuk();
        $data['saldo_keluar'] = $us_saldo->GetSaldoKeluar();
        $data['total_pembelian'] = $pd_pemesanan->GetCountPemesanan();
        $data['get_pengumuman'] = $pn_pengumuman->GetPengumuman();

        return view('admin.pengumuman',$data);
    }
}