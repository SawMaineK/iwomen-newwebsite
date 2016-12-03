<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class resource extends Sximo  {
	
	protected $table = 'resources';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT resources.* FROM resources  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE resources.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}

	

}
