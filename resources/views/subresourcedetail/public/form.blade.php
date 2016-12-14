

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

			
					<div class="col-md-12">
										<div class="form-group  " >
											<label for="Id" class=" control-label col-md-4 text-left"> Id </label>
											<div class="col-md-7">
										  		<input type='text' name='id' id='id' value='{{ $row['id'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="AuthorName" class=" control-label col-md-4 text-left"> AuthorName </label>
											<div class="col-md-7">
										  		<input type='text' name='authorName' id='authorName' value='{{ $row['authorName'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="AuthorNameMM" class=" control-label col-md-4 text-left"> AuthorNameMM </label>
											<div class="col-md-7">
										  		<input type='text' name='authorNameMM' id='authorNameMM' value='{{ $row['authorNameMM'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Author Id" class=" control-label col-md-4 text-left"> Author Id </label>
											<div class="col-md-7">
										  		<input type='text' name='author_id' id='author_id' value='{{ $row['author_id'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Author Img Url" class=" control-label col-md-4 text-left"> Author Img Url </label>
											<div class="col-md-7">
										  		<input type='text' name='author_img_url' id='author_img_url' value='{{ $row['author_img_url'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="IsAllow" class=" control-label col-md-4 text-left"> IsAllow </label>
											<div class="col-md-7">
										  		<input type='text' name='isAllow' id='isAllow' value='{{ $row['isAllow'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Likes" class=" control-label col-md-4 text-left"> Likes </label>
											<div class="col-md-7">
										  		<input type='text' name='likes' id='likes' value='{{ $row['likes'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Comment Count" class=" control-label col-md-4 text-left"> Comment Count </label>
											<div class="col-md-7">
										  		<input type='text' name='comment_count' id='comment_count' value='{{ $row['comment_count'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Share Count" class=" control-label col-md-4 text-left"> Share Count </label>
											<div class="col-md-7">
										  		<input type='text' name='share_count' id='share_count' value='{{ $row['share_count'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="ObjectId" class=" control-label col-md-4 text-left"> ObjectId </label>
											<div class="col-md-7">
										  		<input type='text' name='objectId' id='objectId' value='{{ $row['objectId'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Posted Date" class=" control-label col-md-4 text-left"> Posted Date </label>
											<div class="col-md-7">
										  		
						<div class="input-group m-b" style="width:150px !important;">
							{!! Form::text('posted_date', $row['posted_date'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Resource Id" class=" control-label col-md-4 text-left"> Resource Id </label>
											<div class="col-md-7">
										  		<input type='text' name='resource_id' id='resource_id' value='{{ $row['resource_id'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Sub Res Icon Img Url" class=" control-label col-md-4 text-left"> Sub Res Icon Img Url </label>
											<div class="col-md-7">
										  		<input type='text' name='sub_res_icon_img_url' id='sub_res_icon_img_url' value='{{ $row['sub_res_icon_img_url'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Sub Resouce Content Eng" class=" control-label col-md-4 text-left"> Sub Resouce Content Eng </label>
											<div class="col-md-7">
										  		
						<textarea name='sub_resouce_content_eng' rows='5' id='sub_resouce_content_eng' class='form-control '   >{{ $row['sub_resouce_content_eng'] }}</textarea>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Sub Resouce Content Mm" class=" control-label col-md-4 text-left"> Sub Resouce Content Mm </label>
											<div class="col-md-7">
										  		
						<textarea name='sub_resouce_content_mm' rows='5' id='sub_resouce_content_mm' class='form-control '   >{{ $row['sub_resouce_content_mm'] }}</textarea>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Sub Resource Title Eng" class=" control-label col-md-4 text-left"> Sub Resource Title Eng </label>
											<div class="col-md-7">
										  		
						<textarea name='sub_resource_title_eng' rows='5' id='sub_resource_title_eng' class='form-control '   >{{ $row['sub_resource_title_eng'] }}</textarea>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Sub Resource Title Mm" class=" control-label col-md-4 text-left"> Sub Resource Title Mm </label>
											<div class="col-md-7">
										  		
						<textarea name='sub_resource_title_mm' rows='5' id='sub_resource_title_mm' class='form-control '   >{{ $row['sub_resource_title_mm'] }}</textarea>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="AudioFile" class=" control-label col-md-4 text-left"> AudioFile </label>
											<div class="col-md-7">
										  		<input type='text' name='audioFile' id='audioFile' value='{{ $row['audioFile'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Created At" class=" control-label col-md-4 text-left"> Created At </label>
											<div class="col-md-7">
										  		
						<div class="input-group m-b" style="width:150px !important;">
							{!! Form::text('created_at', $row['created_at'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Updated At" class=" control-label col-md-4 text-left"> Updated At </label>
											<div class="col-md-7">
										  		
						<div class="input-group m-b" style="width:150px !important;">
							{!! Form::text('updated_at', $row['updated_at'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Deleted At" class=" control-label col-md-4 text-left"> Deleted At </label>
											<div class="col-md-7">
										  		
						<div class="input-group m-b" style="width:150px !important;">
							{!! Form::text('deleted_at', $row['deleted_at'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
 
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
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@endsection