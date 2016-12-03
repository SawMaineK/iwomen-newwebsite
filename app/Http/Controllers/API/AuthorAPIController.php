<?php namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect ; 


class AuthorAPIController extends Controller {

	public $module = 'author';

	public function __construct()
	{
		
		$this->model = new Author();
		$this->info = $this->model->makeInfo( $this->module);
		$this->access = $this->model->validAccess($this->info['id']);	
		
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	$sort 		= (!is_null($request->input('sort')) ? $request->input('sort') : 'id'); 
		$order 		= (!is_null($request->input('order')) ? $request->input('order') : 'asc');
		$offset 	= (!is_null($request->input('offset')) ? $request->input('offset') : 1);
		$limit 		= (!is_null($request->input('limit')) ? $request->input('limit') : 12);

		$offset  = ($offset - 1) * $limit;

		$rows = Author::orderBy($sort,$order)->offset($offset)->limit($limit)->get();
				
		return response()->json($rows);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = $this->validateForm($request);
		$validator = Validator::make($request->all(), $rules);	
		if ($validator->passes()) {
			$data = $this->validatePost($request);
				
			$id = $this->model->insertRow($data , $request->input('id'));

			// Insert logs into database
			if($request->input('id') =='')
			{
				\SiteHelpers::auditTrail( $request , 'New Data with ID '.$id.' Has been Inserted !');
			} else {
				\SiteHelpers::auditTrail($request ,'Data with ID '.$id.' Has been Updated !');
			}

			return response()->json($this->model->getRow($id));
			
		} else {

			return response()->json($validator, 400);
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Author::find($id);
		if($row)
		{
			return response()->json($row);
		} else {
			return response()->json('Record Not Found !', 400);					
		}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = $this->validateForm($request);
		$validator = Validator::make($request->all(), $rules);	
		if ($validator->passes() && count($this->model->getRow($id)) > 0) {


			$data = $this->validatePost($request);
				
			$id = $this->model->insertRow($data , $id);

			// Insert logs into database
			if($request->input('id') =='')
			{
				\SiteHelpers::auditTrail( $request , 'New Data with ID '.$id.' Has been Inserted !');
			} else {
				\SiteHelpers::auditTrail($request ,'Data with ID '.$id.' Has been Updated !');
			}

			$response = $this->model->getRow($id);
			return response()->json($response);
			
		} else {

			return response()->json($validator, 400);
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		if(Author::find($id))
		{
			$this->model->destroy($id);
			
			\SiteHelpers::auditTrail( new Request , "ID : ". $id. " Has Been Removed Successfull");

			return response()->json(\Lang::get('core.note_success_delete'));
	
		} else {
			return response()->json('Record Not Found !', 400);					
		}
    }
}