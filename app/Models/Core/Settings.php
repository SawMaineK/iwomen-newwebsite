<?php namespace App\Models\Core;

use App\Models\Sximo;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Settings extends Sximo  {
	
	protected $table = 'tb_settings';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_settings.* FROM tb_settings  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_settings.auditID IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
