<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class tlgprofiles extends Sximo  {
	
	protected $table = 'tlgProfiles';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tlgProfiles.* FROM tlgProfiles  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tlgProfiles.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}

	

}
