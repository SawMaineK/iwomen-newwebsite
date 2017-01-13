

		 {!! Form::open(array('url'=>'subresourcedetail/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

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

											<div class="form-group {{ $errors->has('authorName') ? 'has-error' : '' }}  " >
												<label for="Author Name Eng" class=" control-label col-xs-12 col-md-4 text-left"> Author Name Eng <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<select name='authorName' rows='5' id='authorName' class='form-control select2 ' required  ></select>
											  		
									@if ($errors->has("authorName"))
										<span class="help-block">
							                <strong>{{ $errors->first("authorName") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('authorNameMM') ? 'has-error' : '' }}  " >
												<label for="Author Name MM" class=" control-label col-xs-12 col-md-4 text-left"> Author Name MM <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<select name='authorNameMM' rows='5' id='authorNameMM' class='form-control select2 ' required  ></select>
											  		
									@if ($errors->has("authorNameMM"))
										<span class="help-block">
							                <strong>{{ $errors->first("authorNameMM") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Author Id" class=" control-label col-xs-12 col-md-4 text-left"> Author Id </label>
												<div class="col-xs-12 col-md-7">
											  		<select name='author_id' rows='5' id='author_id' class='form-control select2 '   ></select>
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('author_img_url') ? 'has-error' : '' }}  " >
												<label for="Author Img Url" class=" control-label col-xs-12 col-md-4 text-left"> Author Img Url <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<select name='author_img_url' rows='5' id='author_img_url' class='form-control select2 ' required  ></select>
											  		
									@if ($errors->has("author_img_url"))
										<span class="help-block">
							                <strong>{{ $errors->first("author_img_url") }}</strong>
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
							@if($row['isAllow'] == '1') checked="checked" @endif > Show </label>
							<label class='radio radio-inline'>
							<input type='radio' name='isAllow' value ='0' required 
							@if($row['isAllow'] == '0') checked="checked" @endif > Not Show </label>
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
						{!! Form::hidden('likes', $row['likes']) !!}

						{!! Form::hidden('comment_count', $row['comment_count']) !!}

						{!! Form::hidden('share_count', $row['share_count']) !!}

											<div class="form-group {{ $errors->has('posted_date') ? 'has-error' : '' }}  " >
												<label for="Posted Date" class=" control-label col-xs-12 col-md-4 text-left"> Posted Date <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		
						<div class="input-group m-b" style="width:150px !important;">
							{!! Form::text('posted_date', $row['posted_date'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>

											  		
									@if ($errors->has("posted_date"))
										<span class="help-block">
							                <strong>{{ $errors->first("posted_date") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('resource_id') ? 'has-error' : '' }}  " >
												<label for="Resource Id" class=" control-label col-xs-12 col-md-4 text-left"> Resource Id <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<select name='resource_id' rows='5' id='resource_id' class='form-control select2 ' required  ></select>
											  		
									@if ($errors->has("resource_id"))
										<span class="help-block">
							                <strong>{{ $errors->first("resource_id") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('sub_resouce_content_eng') ? 'has-error' : '' }}  " >
												<label for="Sub Resource Content Eng" class=" control-label col-xs-12 col-md-4 text-left"> Sub Resource Content Eng <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		
						<textarea name='sub_resouce_content_eng' rows='5' id='sub_resouce_content_eng' class='form-control ' required  >{{ $row['sub_resouce_content_eng'] }}</textarea>

											  		
									@if ($errors->has("sub_resouce_content_eng"))
										<span class="help-block">
							                <strong>{{ $errors->first("sub_resouce_content_eng") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('sub_resouce_content_mm') ? 'has-error' : '' }}  " >
												<label for="Sub Resource Content Mm" class=" control-label col-xs-12 col-md-4 text-left"> Sub Resource Content Mm <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		
						<textarea name='sub_resouce_content_mm' rows='5' id='sub_resouce_content_mm' class='form-control ' required  >{{ $row['sub_resouce_content_mm'] }}</textarea>

											  		
									@if ($errors->has("sub_resouce_content_mm"))
										<span class="help-block">
							                <strong>{{ $errors->first("sub_resouce_content_mm") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('sub_resource_title_eng') ? 'has-error' : '' }}  " >
												<label for="Sub Resource Title Eng" class=" control-label col-xs-12 col-md-4 text-left"> Sub Resource Title Eng <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='sub_resource_title_eng' id='sub_resource_title_eng' value='{{ $row['sub_resource_title_eng'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("sub_resource_title_eng"))
										<span class="help-block">
							                <strong>{{ $errors->first("sub_resource_title_eng") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('sub_resource_title_mm') ? 'has-error' : '' }}  " >
												<label for="Sub Resource Title Mm" class=" control-label col-xs-12 col-md-4 text-left"> Sub Resource Title Mm <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		
						<textarea name='sub_resource_title_mm' rows='5' id='sub_resource_title_mm' class='form-control ' required  >{{ $row['sub_resource_title_mm'] }}</textarea>

											  		
									@if ($errors->has("sub_resource_title_mm"))
										<span class="help-block">
							                <strong>{{ $errors->first("sub_resource_title_mm") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="AudioFile" class=" control-label col-xs-12 col-md-4 text-left"> AudioFile </label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='audioFile' id='audioFile' value='{{ $row['audioFile'] }}'    class='form-control ' />
											  		
											  		<span class="help-block">full links of mp3 file</span> 
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
		
		
		$("#authorName").jCombo("{!! url('subresourcedetail/comboselect?filter=authors:authorName:authorName') !!}",
		{  selected_value : '{{ $row["authorName"] }}' });
		
		$("#authorNameMM").jCombo("{!! url('subresourcedetail/comboselect?filter=authors:authorNameMM:authorNameMM') !!}",
		{  selected_value : '{{ $row["authorNameMM"] }}' });
		
		$("#author_id").jCombo("{!! url('subresourcedetail/comboselect?filter=authors:objectId:authorName') !!}",
		{  selected_value : '{{ $row["author_id"] }}' });
		
		$("#author_img_url").jCombo("{!! url('subresourcedetail/comboselect?filter=authors:authorImg:authorName') !!}",
		{  selected_value : '{{ $row["author_img_url"] }}' });
		
		$("#resource_id").jCombo("{!! url('subresourcedetail/comboselect?filter=resources:objectId:resource_title_eng') !!}",
		{  selected_value : '{{ $row["resource_id"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@endsection