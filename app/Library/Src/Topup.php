<?php 

namespace App\Library;

Class Topup{
    private $topup_id;
    private $user_id;
    private $topup_jenis;
    private $topup_value;

    // Get & Set
    public function GetTopupId() {
		return $this->topup_id;
	}

	public function SetTopupId($req_topup_id) {
		$this->topup_id = $req_topup_id;
    }
    
    public function GetUserId() {
		return $this->user_id;
	}

	public function SetUserId($req_user_id) {
		$this->user_id = $req_user_id;
    }
    
    public function GetTopupJenis() {
		return $this->topup_jenis;
	}

	public function SetTopupJenis($req_topup_jenis) {
		$this->topup_jenis = $req_topup_jenis;
    }
    
    public function GetTopupValue() {
		return $this->topup_value;
	}

	public function SetTopupValue($req_topup_value) {
		$this->topup_value = $req_topup_value;
	}
}

?>