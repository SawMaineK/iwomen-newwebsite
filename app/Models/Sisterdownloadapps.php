<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class sisterdownloadapps extends Sximo  {
	
	protected $table = 'sisterDownloadApps';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT sisterDownloadApps.* FROM sisterDownloadApps  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE sisterDownloadApps.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}

	

}
