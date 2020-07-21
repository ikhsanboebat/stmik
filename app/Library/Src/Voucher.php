<?php 

namespace App\Library;

Class Voucher{
    private $voucher_id;
    private $voucher_code;
    private $voucher_value;
    private $voucher_create;

    // Construct
    public function __construct(){

    }

    public function GetVoucherId() {
		return $this->voucher_id;
	}

	public function SetVoucherId($req_voucher_id) {
		$this->voucher_id = $req_voucher_id;
    }
    
    public function GetVoucherCode() {
		return $this->voucher_code;
	}

	public function SetVoucherCode($req_voucher_code) {
		$this->voucher_code = $req_voucher_code;
    }
    
    public function GetVoucherValue() {
		return $this->voucher_value;
	}

	public function SetVoucherValue($req_voucher_value) {
		$this->voucher_value = $req_voucher_value;
    }
    
    public function GetVoucherCreate() {
		return $this->voucher_create;
	}

	public function SetVoucherCreate($req_voucher_create) {
		$this->voucher_create = $req_voucher_create;
	}
}


?>