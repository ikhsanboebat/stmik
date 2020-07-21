<?php 

namespace App\Library\Src;

use App\Library\Model\pd_pemesanan;

Class Pemesanan{
    private $pemesanan_id;
    private $user_id;
    private $pemesanan_name;
    private $saldo_id;
    private $pemesanan_date;

    public function __construct($req_pemesanan_id,$req_user_id,$req_pemesanan_name,$req_saldo_id,$req_pemesanan_date){
        $this->SetPemesananId($req_pemesanan_id);
        $this->SetUserId($req_user_id);
        $this->SetPemesananName($req_pemesanan_name);
        $this->SetSaldoId($req_saldo_id);
        $this->SetPemesananDate($req_pemesanan_date);
    }

    // CRUD
    public function GetPemesanan(){
        return pd_pemesanan::join('us_saldo','us_saldo.saldo_id','=','pd_pemesanan.saldo_id')->get();
    }

    public function GetCountPemesanan(){
        return count($this->GetPemesananByUser());
    }

    public function GetPemesananById(){
        return pd_pemesanan::find($this->GetPemesananId());
    }

    public function GetPemesananByUser(){
        return pd_pemesanan::where('user_id',$this->GetUserId())->get();
    }

    // Get & Set
    public function GetPemesananId() {
		return $this->pemesanan_id;
	}

	public function SetPemesananId($req_pemesanan_id) {
		$this->pemesanan_id = $req_pemesanan_id;
    }
    
    public function GetPemesananName() {
		return $this->pemesanan_name;
	}

	public function SetPemesananName($req_pemesanan_name) {
		$this->pemesanan_name = $req_pemesanan_name;
    }
    
    public function GetUserId() {
		return $this->user_id;
	}

	public function SetUserId($req_user_id) {
		$this->user_id = $req_user_id;
    }
    
    public function GetSaldoId() {
		return $this->saldo_id;
	}

	public function SetSaldoId($req_saldo_id) {
		$this->saldo_id = $req_saldo_id;
    }

    public function GetPemesananDate() {
		return $this->pemesanan_date;
	}

	public function SetPemesananDate($req_pemesanan_date) {
		$this->pemesanan_date = $req_pemesanan_date;
    }
}

?>