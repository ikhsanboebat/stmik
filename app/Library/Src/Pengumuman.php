<?php 

namespace App\Library\Src;

use App\Library\Model\pn_pengumuman;

Class Pengumuman{
    private $pengumuman_id;
    private $user_id;
    private $pengumuman_isi;
    private $pengumuman_date;

    // Contstruct
    public function __construct($req_pengumuman_id,$req_user_id,$req_pengumuman_isi,$req_pengumuman_date){
        $this->SetPengumumanId($req_pengumuman_id);
        $this->SetUserId($req_user_id);
        $this->SetPengumumanIsi($req_pengumuman_isi);
        $this->SetPengumumanDate($req_pengumuman_date);
    }

    // CRUD
    public function GetPengumuman(){
        return pn_pengumuman::join('users','users.id','=','pn_pengumuman.user_id')->paginate(3);
    }

    public function GetPengumumanById(){
        return pn_pengumuman::find($this->GetPengumumanId());
    }

    public function GetPengumumanByUser(){
        return pn_pengumuman::where('user_id',$this->GetUserId())->get();
    }

    public function CreatePengumuman(){

    }

    public function UpdatePengumuman(){

    }

    public function DeletePengumuman(){
        
    }

    // Get & Set
    public function GetPengumumanId() {
		return $this->pengumuman_id;
	}

	public function SetPengumumanId($req_pengumuman_id) {
		$this->pengumuman_id = $req_pengumuman_id;
    }
    
    public function GetUserId() {
		return $this->user_id;
	}

	public function SetUserId($req_user_id) {
		$this->user_id = $req_user_id;
    }
    
    public function GetPengumumanIsi() {
		return $this->pengumuman_isi;
	}

	public function SetPengumumanIsi($req_pengumuman_isi) {
		$this->pengumuman_isi = $req_pengumuman_isi;
    }

    public function GetPengumumanDate() {
		return $this->pengumuman_date;
	}

	public function SetPengumumanDate($req_pengumuman_date) {
		$this->pengumuman_date = $req_pengumuman_date;
    }
}

?>