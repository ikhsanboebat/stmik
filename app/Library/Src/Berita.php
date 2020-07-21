<?php 

namespace App\Library\Src;
use App\Library\Model\br_berita;

Class Berita{
    private $berita_id;
    private $berita_judul;
    private $berita_date;
    private $berita_deskripsi;
    private $user_id;

    public function __construct($req_berita_id,$req_berita_judul,$req_berita_date,$req_berita_deskripsi,$req_user_id){
		$this->SetBeritaId($req_berita_id);
		$this->SetBeritaJudul($req_berita_judul);
		$this->SetBeritaDate($req_berita_date);
		$this->SetBeritaDeskripsi($req_berita_deskripsi);
		$this->SetUserId($req_user_id);
	}
	
	// CRUD
	public function GetBerita(){
		return br_berita::all();
	}

	public function GetBeritaById(){
		return br_berita::find($this->GetBeritaId());
	}



    // Get & Set
    public function GetBeritaId() {
		return $this->berita_id;
	}

	public function SetBeritaId($req_berita_id) {
		$this->berita_id = $req_berita_id;
    }

    public function GetBeritaJudul() {
		return $this->berita_judul;
	}

	public function SetBeritaJudul($req_berita_judul) {
		$this->berita_judul = $req_berita_judul;
    }
    
    public function GetBeritaDate() {
		return $this->berita_date;
	}

	public function SetBeritaDate($req_berita_date) {
		$this->berita_date = $req_berita_date;
    }
    
    public function GetBeritaDeskripsi() {
		return $this->berita_deskripsi;
	}

	public function SetBeritaDeskripsi($req_berita_deskripsi) {
		$this->berita_deskripsi = $req_berita_deskripsi;
    }
    
    public function GetUserId() {
		return $this->user_id;
	}

	public function SetUserId($req_user_id) {
		$this->user_id = $req_user_id;
    }
}
?>