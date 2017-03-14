<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class iwomenpostaudio extends Sximo  {
	
	protected $table = 'iWomenPostAudios';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT iWomenPostAudios.* FROM iWomenPostAudios  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE iWomenPostAudios.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}

	

}
