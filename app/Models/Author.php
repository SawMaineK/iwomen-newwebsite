<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class author extends Sximo  {
	
	protected $table = 'authors';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT authors.* FROM authors  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE authors.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}

	

}
