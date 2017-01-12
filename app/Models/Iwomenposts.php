<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class iwomenposts extends Sximo  {
	
	protected $table = 'iwomenPosts';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT iwomenPosts.* FROM iwomenPosts  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE iwomenPosts.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}

	

}
