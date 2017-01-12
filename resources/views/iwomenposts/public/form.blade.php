

		 {!! Form::open(array('url'=>'iwomenposts/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

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

											<div class="form-group {{ $errors->has('objectId') ? 'has-error' : '' }}  " >
												<label for="ObjectId" class=" control-label col-xs-12 col-md-4 text-left"> ObjectId <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='objectId' id='objectId' value='{{ $row['objectId'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("objectId"))
										<span class="help-block">
							                <strong>{{ $errors->first("objectId") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('audioFile') ? 'has-error' : '' }}  " >
												<label for="AudioFile" class=" control-label col-xs-12 col-md-4 text-left"> AudioFile <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='audioFile' id='audioFile' value='{{ $row['audioFile'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("audioFile"))
										<span class="help-block">
							                <strong>{{ $errors->first("audioFile") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('authorId') ? 'has-error' : '' }}  " >
												<label for="AuthorId" class=" control-label col-xs-12 col-md-4 text-left"> AuthorId <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='authorId' id='authorId' value='{{ $row['authorId'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("authorId"))
										<span class="help-block">
							                <strong>{{ $errors->first("authorId") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('comment_count') ? 'has-error' : '' }}  " >
												<label for="Comment Count" class=" control-label col-xs-12 col-md-4 text-left"> Comment Count <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='comment_count' id='comment_count' value='{{ $row['comment_count'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("comment_count"))
										<span class="help-block">
							                <strong>{{ $errors->first("comment_count") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('week_content') ? 'has-error' : '' }}  " >
												<label for="Week Content" class=" control-label col-xs-12 col-md-4 text-left"> Week Content <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='week_content' id='week_content' value='{{ $row['week_content'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("week_content"))
										<span class="help-block">
							                <strong>{{ $errors->first("week_content") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}  " >
												<label for="Content" class=" control-label col-xs-12 col-md-4 text-left"> Content <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		
						<textarea name='content' rows='5' id='content' class='form-control ' required  >{{ $row['content'] }}</textarea>

											  		
									@if ($errors->has("content"))
										<span class="help-block">
							                <strong>{{ $errors->first("content") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('contentType') ? 'has-error' : '' }}  " >
												<label for="ContentType" class=" control-label col-xs-12 col-md-4 text-left"> ContentType <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='contentType' id='contentType' value='{{ $row['contentType'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("contentType"))
										<span class="help-block">
							                <strong>{{ $errors->first("contentType") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('content_mm') ? 'has-error' : '' }}  " >
												<label for="Content Mm" class=" control-label col-xs-12 col-md-4 text-left"> Content Mm <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		
						<textarea name='content_mm' rows='5' id='content_mm' class='form-control ' required  >{{ $row['content_mm'] }}</textarea>

											  		
									@if ($errors->has("content_mm"))
										<span class="help-block">
							                <strong>{{ $errors->first("content_mm") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('credit_link') ? 'has-error' : '' }}  " >
												<label for="Credit Link" class=" control-label col-xs-12 col-md-4 text-left"> Credit Link <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='credit_link' id='credit_link' value='{{ $row['credit_link'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("credit_link"))
										<span class="help-block">
							                <strong>{{ $errors->first("credit_link") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('credit_link_mm') ? 'has-error' : '' }}  " >
												<label for="Credit Link Mm" class=" control-label col-xs-12 col-md-4 text-left"> Credit Link Mm <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='credit_link_mm' id='credit_link_mm' value='{{ $row['credit_link_mm'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("credit_link_mm"))
										<span class="help-block">
							                <strong>{{ $errors->first("credit_link_mm") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('credit_logo_url') ? 'has-error' : '' }}  " >
												<label for="Credit Logo Url" class=" control-label col-xs-12 col-md-4 text-left"> Credit Logo Url <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='credit_logo_url' id='credit_logo_url' value='{{ $row['credit_logo_url'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("credit_logo_url"))
										<span class="help-block">
							                <strong>{{ $errors->first("credit_logo_url") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('credit_name') ? 'has-error' : '' }}  " >
												<label for="Credit Name" class=" control-label col-xs-12 col-md-4 text-left"> Credit Name <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='credit_name' id='credit_name' value='{{ $row['credit_name'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("credit_name"))
										<span class="help-block">
							                <strong>{{ $errors->first("credit_name") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('credit_name_mm') ? 'has-error' : '' }}  " >
												<label for="Credit Name Mm" class=" control-label col-xs-12 col-md-4 text-left"> Credit Name Mm <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='credit_name_mm' id='credit_name_mm' value='{{ $row['credit_name_mm'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("credit_name_mm"))
										<span class="help-block">
							                <strong>{{ $errors->first("credit_name_mm") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}  " >
												<label for="Image" class=" control-label col-xs-12 col-md-4 text-left"> Image <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='image' id='image' value='{{ $row['image'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("image"))
										<span class="help-block">
							                <strong>{{ $errors->first("image") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('isAllow') ? 'has-error' : '' }}  " >
												<label for="IsAllow" class=" control-label col-xs-12 col-md-4 text-left"> IsAllow <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='isAllow' id='isAllow' value='{{ $row['isAllow'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("isAllow"))
										<span class="help-block">
							                <strong>{{ $errors->first("isAllow") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('likes') ? 'has-error' : '' }}  " >
												<label for="Likes" class=" control-label col-xs-12 col-md-4 text-left"> Likes <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='likes' id='likes' value='{{ $row['likes'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("likes"))
										<span class="help-block">
							                <strong>{{ $errors->first("likes") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('postUploadName') ? 'has-error' : '' }}  " >
												<label for="PostUploadName" class=" control-label col-xs-12 col-md-4 text-left"> PostUploadName <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='postUploadName' id='postUploadName' value='{{ $row['postUploadName'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("postUploadName"))
										<span class="help-block">
							                <strong>{{ $errors->first("postUploadName") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('postUploadNameMM') ? 'has-error' : '' }}  " >
												<label for="PostUploadNameMM" class=" control-label col-xs-12 col-md-4 text-left"> PostUploadNameMM <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='postUploadNameMM' id='postUploadNameMM' value='{{ $row['postUploadNameMM'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("postUploadNameMM"))
										<span class="help-block">
							                <strong>{{ $errors->first("postUploadNameMM") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('postUploadPersonImg') ? 'has-error' : '' }}  " >
												<label for="PostUploadPersonImg" class=" control-label col-xs-12 col-md-4 text-left"> PostUploadPersonImg <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='postUploadPersonImg' id='postUploadPersonImg' value='{{ $row['postUploadPersonImg'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("postUploadPersonImg"))
										<span class="help-block">
							                <strong>{{ $errors->first("postUploadPersonImg") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('postUploadUserImgPath') ? 'has-error' : '' }}  " >
												<label for="PostUploadUserImgPath" class=" control-label col-xs-12 col-md-4 text-left"> PostUploadUserImgPath <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='postUploadUserImgPath' id='postUploadUserImgPath' value='{{ $row['postUploadUserImgPath'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("postUploadUserImgPath"))
										<span class="help-block">
							                <strong>{{ $errors->first("postUploadUserImgPath") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('postUploadedDate') ? 'has-error' : '' }}  " >
												<label for="PostUploadedDate" class=" control-label col-xs-12 col-md-4 text-left"> PostUploadedDate <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		
						<div class="input-group m-b" style="width:150px !important;">
							{!! Form::text('postUploadedDate', $row['postUploadedDate'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>

											  		
									@if ($errors->has("postUploadedDate"))
										<span class="help-block">
							                <strong>{{ $errors->first("postUploadedDate") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('post_author_role') ? 'has-error' : '' }}  " >
												<label for="Post Author Role" class=" control-label col-xs-12 col-md-4 text-left"> Post Author Role <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='post_author_role' id='post_author_role' value='{{ $row['post_author_role'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("post_author_role"))
										<span class="help-block">
							                <strong>{{ $errors->first("post_author_role") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('post_author_role_mm') ? 'has-error' : '' }}  " >
												<label for="Post Author Role Mm" class=" control-label col-xs-12 col-md-4 text-left"> Post Author Role Mm <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='post_author_role_mm' id='post_author_role_mm' value='{{ $row['post_author_role_mm'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("post_author_role_mm"))
										<span class="help-block">
							                <strong>{{ $errors->first("post_author_role_mm") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('share_count') ? 'has-error' : '' }}  " >
												<label for="Share Count" class=" control-label col-xs-12 col-md-4 text-left"> Share Count <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='share_count' id='share_count' value='{{ $row['share_count'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("share_count"))
										<span class="help-block">
							                <strong>{{ $errors->first("share_count") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('suggest_section_eng') ? 'has-error' : '' }}  " >
												<label for="Suggest Section Eng" class=" control-label col-xs-12 col-md-4 text-left"> Suggest Section Eng <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='suggest_section_eng' id='suggest_section_eng' value='{{ $row['suggest_section_eng'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("suggest_section_eng"))
										<span class="help-block">
							                <strong>{{ $errors->first("suggest_section_eng") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}  " >
												<label for="Title" class=" control-label col-xs-12 col-md-4 text-left"> Title <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='title' id='title' value='{{ $row['title'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("title"))
										<span class="help-block">
							                <strong>{{ $errors->first("title") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('titleMm') ? 'has-error' : '' }}  " >
												<label for="TitleMm" class=" control-label col-xs-12 col-md-4 text-left"> TitleMm <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='titleMm' id='titleMm' value='{{ $row['titleMm'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("titleMm"))
										<span class="help-block">
							                <strong>{{ $errors->first("titleMm") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('userId') ? 'has-error' : '' }}  " >
												<label for="UserId" class=" control-label col-xs-12 col-md-4 text-left"> UserId <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='userId' id='userId' value='{{ $row['userId'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("userId"))
										<span class="help-block">
							                <strong>{{ $errors->first("userId") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('videoId') ? 'has-error' : '' }}  " >
												<label for="VideoId" class=" control-label col-xs-12 col-md-4 text-left"> VideoId <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='videoId' id='videoId' value='{{ $row['videoId'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("videoId"))
										<span class="help-block">
							                <strong>{{ $errors->first("videoId") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Deleted At" class=" control-label col-xs-12 col-md-4 text-left"> Deleted At </label>
												<div class="col-xs-12 col-md-7">
											  		
						<div class="input-group m-b" style="width:150px !important;">
							{!! Form::text('deleted_at', $row['deleted_at'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>

											  		
											  		 
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
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@endsection