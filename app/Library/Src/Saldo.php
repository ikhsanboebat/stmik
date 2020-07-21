<?php 

namespace App\Library\Src;

use App\Library\Model\us_saldo;

Class Saldo{
    private $saldo_id;
    private $user_id;
    private $saldo_status;
    private $saldo_value;

    public function __construct($req_saldo_id,$req_user_id,$req_saldo_status,$req_saldo_value){
		$this->SetSaldoId($req_saldo_id);
		$this->SetUserId($req_user_id);
		$this->SetSaldoStatus($req_saldo_status);
		$this->SetSaldoValue($req_saldo_value);
	}
	
	// CRUD
	public function GetSaldo(){
		return $this->GetSaldoMasuk()-$this->GetSaldoKeluar();
	}

	public function GetSaldoById(){
		return us_saldo::find($this->GetUserId());
	}

	public function GetSaldoMasuk(){
		$saldo_masuk = us_saldo::where('user_id',$this->GetUserId())->where('saldo_status',1)->get()->sum('saldo_value');
		return $saldo_masuk;
	}

	public function GetSaldoKeluar(){
		$saldo_keluar = us_saldo::where('user_id',$this->GetUserId())->where('saldo_status',0)->get()->sum('saldo_value');
		return $saldo_keluar;
	}

	public function CreateSaldo(){

	}

	public function DeleteSaldo(){

	}

    // Get & Set
    public function GetSaldoId() {
		return $this->saldo_id;
	}

	public function SetSaldoId($req_saldo_id) {
		$this->saldo_id = $req_saldo_id;
    }
    
    public function GetUserId() {
		return $this->user_id;
	}

	public function SetUserId($req_user_id) {
		$this->user_id = $req_user_id;
    }
    
    public function GetSaldoStatus() {
		return $this->saldo_status;
	}

	public function SetSaldoStatus($req_saldo_status) {
		$this->saldo_status = $req_saldo_status;
    }

    public function GetSaldoValue() {
		return $this->saldo_value;
	}

	public function SetSaldoValue($req_saldo_value) {
		$this->saldo_value = $req_saldo_value;
    }
}

?>