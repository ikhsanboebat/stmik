<?php 

namespace App\Library;

Class Banner{
    private $banner_id;
    private $banner_name;
    private $banner_image;
    private $banner_date;

    public function __construct(){

    }

    public function GetBannerId() {
		return $this->banner_id;
	}

	public function SetBannerId($req_banner_id) {
		$this->banner_id = $req_banner_id;
	}
}

?>