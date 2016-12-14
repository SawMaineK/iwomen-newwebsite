<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class subresourcedetail extends Sximo  {
	
	protected $table = 'subResourceDetails';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT subResourceDetails.* FROM subResourceDetails  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE subResourceDetails.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}

	

}
