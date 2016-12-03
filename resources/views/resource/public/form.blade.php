

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

			
					<div class="col-md-12">
						{!! Form::hidden('id', $row['id']) !!}

						{!! Form::hidden('objectId', $row['objectId']) !!}

										<div class="form-group  " >
											<label for="Author Img Path" class=" control-label col-md-4 text-left"> Author Img Path <span class="asterix"> * </span></label>
											<div class="col-md-7">
										  		<select name='author_img_path' rows='5' id='author_img_path' class='form-control select2 ' required                                                                          ></select> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="IsAllow" class=" control-label col-md-4 text-left"> IsAllow </label>
											<div class="col-md-7">
										  		
						<?php $isAllow = explode(",",$row['isAllow']); ?>
							<label class='checked checkbox-inline'>   
							<input type='checkbox' name='isAllow[]' value ='1'                                                                           class='' 
							@if(in_array('1',$isAllow))checked @endif 
					 />  
							 </label>  
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Week Content" class=" control-label col-md-4 text-left"> Week Content </label>
											<div class="col-md-7">
										  		
						<?php $week_content = explode(",",$row['week_content']); ?>
							<label class='checked checkbox-inline'>   
							<input type='checkbox' name='week_content[]' value ='1'                                                                                                               class='' 
							@if(in_array('1',$week_content))checked @endif 
					 />  
							 </label>  
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Resource Author" class=" control-label col-md-4 text-left"> Resource Author <span class="asterix"> * </span></label>
											<div class="col-md-7">
										  		<select name='resource_author_id' rows='5' id='resource_author_id' class='form-control select2 ' required                                      ></select> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Resource Author Name" class=" control-label col-md-4 text-left"> Resource Author Name <span class="asterix"> * </span></label>
											<div class="col-md-7">
										  		<input type='text' name='resource_author_name' id='resource_author_name' value='{{ $row['resource_author_name'] }}' required   class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Resource Icon Img" class=" control-label col-md-4 text-left"> Resource Icon Img <span class="asterix"> * </span></label>
											<div class="col-md-7">
										  		
							<input type='file' name='resource_icon_img' id='resource_icon_img' @if($row['resource_icon_img'] =='') class='required' @endif 
							style='width:150px !important;'                                      />
						 	<div >
								
								{!! SiteHelpers::showUploadedFile($row['resource_icon_img'],'resources_icon') !!}
							
							</div>					
							 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Resource Title Eng" class=" control-label col-md-4 text-left"> Resource Title Eng <span class="asterix"> * </span></label>
											<div class="col-md-7">
										  		<input type='text' name='resource_title_eng' id='resource_title_eng' value='{{ $row['resource_title_eng'] }}' required   class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Resource Title Mm" class=" control-label col-md-4 text-left"> Resource Title Mm <span class="asterix"> * </span></label>
											<div class="col-md-7">
										  		<input type='text' name='resource_title_mm' id='resource_title_mm' value='{{ $row['resource_title_mm'] }}' required   class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
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
		
		
		$("#author_img_path").jCombo("{!! url('resource/comboselect?filter=authors:authorImg:authorName') !!}",
		{  selected_value : '{{ $row["author_img_path"] }}' });
		
		$("#resource_author_id").jCombo("{!! url('resource/comboselect?filter=authors:objectId:authorName') !!}",
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