

		 {!! Form::open(array('url'=>'resource/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

			@if(Session::has('messagetext'))
			  
				   {!! Session::get('messagetext') !!}
			   
			@endif

			@if(count($errors->all()) > 0)
		    <div class="note note-danger">
		        @foreach($errors->all() as $error)
		        <p>{{ $error }}</p>
		        @endforeach
		    </div>
		    @endif	

			<div class="form col-xs-12 col-md-12">
						{!! Form::hidden('id', $row['id']) !!}

						{!! Form::hidden('objectId', $row['objectId']) !!}

											<div class="form-group {{ $errors->has('author_img_path') ? 'has-error' : '' }}  " >
												<label for="Author Img Path" class=" control-label col-xs-12 col-md-4 text-left"> Author Img Path <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<div class="form-control fileinput fileinput-new @if($row['author_img_path'] =='') required @endif " data-provides="fileinput" style="border: none;">
		                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
		                            @if(file_exists('.authors_photo/'.$row['author_img_path']) && $row['author_img_path'] !='')
		                            	<img src="{{asset('.authors_photo/'.$row["author_img_path"])}}" alt="" />
		                            @else
		                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> 
		                            @endif
		                            </div>
		                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
		                            <div>
		                                <span class="btn default btn-file">
		                                    <span class="fileinput-new"> Select image </span>
		                                    <span class="fileinput-exists"> Change </span>
		                                    <input type="file" name="author_img_path" id="author_img_path"> </span>
		                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
		                            </div>
		                        </div>
											  		
									@if ($errors->has("author_img_path"))
										<span class="help-block">
							                <strong>{{ $errors->first("author_img_path") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('isAllow') ? 'has-error' : '' }}  " >
												<label for="IsAllow" class=" control-label col-xs-12 col-md-4 text-left"> IsAllow <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<div class="form col-xs-12">
							<label class='radio radio-inline'>
							<input type='radio' name='isAllow' value ='1' required                                                                         
							@if($row['isAllow'] == '1') checked="checked" @endif > Yes </label>
							<label class='radio radio-inline'>
							<input type='radio' name='isAllow' value ='0' required                                                                         
							@if($row['isAllow'] == '0') checked="checked" @endif > No </label>
					</div>
											  		
									@if ($errors->has("isAllow"))
										<span class="help-block">
							                <strong>{{ $errors->first("isAllow") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('week_content') ? 'has-error' : '' }}  " >
												<label for="Week Content" class=" control-label col-xs-12 col-md-4 text-left"> Week Content <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<div class="form col-xs-12">
							<label class='radio radio-inline'>
							<input type='radio' name='week_content' value ='1' required                                                                                                             
							@if($row['week_content'] == '1') checked="checked" @endif > Yes </label>
							<label class='radio radio-inline'>
							<input type='radio' name='week_content' value ='0' required                                                                                                             
							@if($row['week_content'] == '0') checked="checked" @endif > No </label>
					</div>
											  		
									@if ($errors->has("week_content"))
										<span class="help-block">
							                <strong>{{ $errors->first("week_content") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('resource_author_id') ? 'has-error' : '' }}  " >
												<label for="Resource Author" class=" control-label col-xs-12 col-md-4 text-left"> Resource Author <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<select name='resource_author_id' rows='5' id='resource_author_id' class='form-control select2 ' required                                      ></select>
											  		
									@if ($errors->has("resource_author_id"))
										<span class="help-block">
							                <strong>{{ $errors->first("resource_author_id") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('resource_author_name') ? 'has-error' : '' }}  " >
												<label for="Resource Author Name" class=" control-label col-xs-12 col-md-4 text-left"> Resource Author Name <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='resource_author_name' id='resource_author_name' value='{{ $row['resource_author_name'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("resource_author_name"))
										<span class="help-block">
							                <strong>{{ $errors->first("resource_author_name") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('resource_title_eng') ? 'has-error' : '' }}  " >
												<label for="Resource Title Eng" class=" control-label col-xs-12 col-md-4 text-left"> Resource Title Eng <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='resource_title_eng' id='resource_title_eng' value='{{ $row['resource_title_eng'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("resource_title_eng"))
										<span class="help-block">
							                <strong>{{ $errors->first("resource_title_eng") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('resource_title_mm') ? 'has-error' : '' }}  " >
												<label for="Resource Title Mm" class=" control-label col-xs-12 col-md-4 text-left"> Resource Title Mm <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='resource_title_mm' id='resource_title_mm' value='{{ $row['resource_title_mm'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("resource_title_mm"))
										<span class="help-block">
							                <strong>{{ $errors->first("resource_title_mm") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
				</div>

			<div style="clear:both"></div>

			<div class="form-group">
			    <label class="col-sm-4 text-right">&nbsp;</label>
			    <div class="col-sm-8">
			        <button type="submit" name="apply" class="btn btn-info btn-sm"><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
			        <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
			    </div>

			</div>
		 
		 {!! Form::close() !!}

@section('page_scripts')
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#resource_author_id").jCombo("{!! url('resource/comboselect?filter=authors:authorName:authorName') !!}",
		{  selected_value : '{{ $row["resource_author_id"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@endsection