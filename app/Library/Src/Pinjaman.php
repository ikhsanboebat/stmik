<?php 

namespace App\Pinjaman;

Class Pinjaman{
    private $pinjaman_id;
    private $pinjaman_value;
    private $user_id;
    private $peminjam_id;
    private $peminjam_tenggat;

    public function __construct(){
        $this->SetPinjamanId($pinjaman_id);
        $this->SetPinjamanValue($pinjaman_value);
        $this->SetUserId($user_id);
        $this->SetPeminjamId($peminjam_id);
        $this->SetPeminjamTenggat($peminjam_tenggat);
    }

    // Get & Set
    public function GetPinjamanId() {
		return $this->pinjaman_id;
	}

	public function SetPinjamanId($req_pinjaman_id) {
		$this->pinjaman_id = $req_pinjaman_id;
    }
    
    public function GetPinjamanValue() {
		return $this->pinjaman_value;
	}

	public function SetPinjamanValue($req_pinjaman_value) {
		$this->pinjaman_value = $req_pinjaman_value;
    }
    
    public function GetUserId() {
		return $this->user_id;
	}

	public function SetUserId($req_user_id) {
		$this->user_id = $req_user_id;
    }
    
    public function GetPeminjamId() {
		return $this->pinjaman_id;
	}

	public function SetPeminjamId($req_pinjaman_id) {
		$this->peminjam_id = $req_peminjam_id;
    }
    
    public function GetPeminjamTenggat() {
		return $this->pinjaman_tenggat;
	}

	public function SetPeminjamTenggat($req_pinjaman_tenggat) {
		$this->peminjam_tenggat = $req_peminjam_tenggat;
	}
}

?>