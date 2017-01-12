

		 {!! Form::open(array('url'=>'beinspiredpost/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

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

											<div class="form-group   " >
												<label for="AudioFile" class=" control-label col-xs-12 col-md-4 text-left"> AudioFile </label>
												<div class="col-xs-12 col-md-7">
											  		<div class="fileinput fileinput-new @if($row['audioFile'] =='') required @endif" data-provides="fileinput">
	                                <div class="input-group input-large">
	                                    <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
	                                        <i class="fa fa-file fileinput-exists"></i>&nbsp;
	                                        <span class="fileinput-filename"> </span>
	                                    </div>
	                                    <span class="input-group-addon btn default btn-file">
	                                        <span class="fileinput-new"> Select file </span>
	                                        <span class="fileinput-exists"> Change </span>
	                                        <input type="file" name="audioFile" id="audioFile"> </span>
	                                    <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
	                                </div>
	                            </div>
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="AuthorId" class=" control-label col-xs-12 col-md-4 text-left"> AuthorId </label>
												<div class="col-xs-12 col-md-7">
											  		<select name='authorId' rows='5' id='authorId' class='form-control select2 '                                       ></select>
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
						{!! Form::hidden('comment_count', $row['comment_count']) !!}

											<div class="form-group   " >
												<label for="Week Content" class=" control-label col-xs-12 col-md-4 text-left"> Week Content </label>
												<div class="col-xs-12 col-md-7">
											  		<div class='form col-xs-12'>
						<?php $week_content = explode(",",$row['week_content']); ?>
							<label class='checked checkbox-inline'>   
							<input type='checkbox' name='week_content[]' value ='1'                                       class='' 
							@if(in_array('1',$week_content))checked @endif 
					 /> Yes 
							 </label> 
							<label class='checked checkbox-inline'>   
							<input type='checkbox' name='week_content[]' value ='0'                                       class='' 
							@if(in_array('0',$week_content))checked @endif 
					 /> No 
							 </label> 
					</div>
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Content" class=" control-label col-xs-12 col-md-4 text-left"> Content </label>
												<div class="col-xs-12 col-md-7">
											  		
						<textarea name='content' rows='5' id='content' class='form-control '   >{{ $row['content'] }}</textarea>

											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="ContentType" class=" control-label col-xs-12 col-md-4 text-left"> ContentType </label>
												<div class="col-xs-12 col-md-7">
											  		
							<?php $contentType = explode(',',$row['contentType']);
							$contentType_opt = array( 'Letter' => 'Letter' ,  'Video' => 'Video' ,  'Audio' => 'Audio' , ); ?>
					
									<select name='contentType' rows='5'   class='form-control select2 ' id='contentType'  > 
									<?php 
										foreach($contentType_opt as $key=>$val)
										{
											echo "<option  value ='$key' ".($row['contentType'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
										}						
										?>

									</select>

											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Content Mm" class=" control-label col-xs-12 col-md-4 text-left"> Content Mm </label>
												<div class="col-xs-12 col-md-7">
											  		
						<textarea name='content_mm' rows='5' id='content_mm' class='form-control '   >{{ $row['content_mm'] }}</textarea>

											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Credit Link" class=" control-label col-xs-12 col-md-4 text-left"> Credit Link </label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='credit_link' id='credit_link' value='{{ $row['credit_link'] }}'    class='form-control ' />
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Credit Link Mm" class=" control-label col-xs-12 col-md-4 text-left"> Credit Link Mm </label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='credit_link_mm' id='credit_link_mm' value='{{ $row['credit_link_mm'] }}'    class='form-control ' />
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Credit Logo Url" class=" control-label col-xs-12 col-md-4 text-left"> Credit Logo Url </label>
												<div class="col-xs-12 col-md-7">
											  		<div class="form-control fileinput fileinput-new @if($row['credit_logo_url'] =='') required @endif " data-provides="fileinput" style="border: none;">
		                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
		                            @if(file_exists('.credit_logo/'.$row['credit_logo_url']) && $row['credit_logo_url'] !='')
		                            	<img src="{{asset('.credit_logo/'.$row["credit_logo_url"])}}" alt="" />
		                            @else
		                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> 
		                            @endif
		                            </div>
		                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
		                            <div>
		                                <span class="btn default btn-file">
		                                    <span class="fileinput-new"> Select image </span>
		                                    <span class="fileinput-exists"> Change </span>
		                                    <input type="file" name="credit_logo_url" id="credit_logo_url"> </span>
		                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
		                            </div>
		                        </div>
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Credit Name" class=" control-label col-xs-12 col-md-4 text-left"> Credit Name </label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='credit_name' id='credit_name' value='{{ $row['credit_name'] }}'    class='form-control ' />
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Credit Name Mm" class=" control-label col-xs-12 col-md-4 text-left"> Credit Name Mm </label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='credit_name_mm' id='credit_name_mm' value='{{ $row['credit_name_mm'] }}'    class='form-control ' />
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Image" class=" control-label col-xs-12 col-md-4 text-left"> Image </label>
												<div class="col-xs-12 col-md-7">
											  		<div class="form-control fileinput fileinput-new @if($row['image'] =='') required @endif " data-provides="fileinput" style="border: none;">
		                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
		                            @if(file_exists('.posts_photo/'.$row['image']) && $row['image'] !='')
		                            	<img src="{{asset('.posts_photo/'.$row["image"])}}" alt="" />
		                            @else
		                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> 
		                            @endif
		                            </div>
		                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
		                            <div>
		                                <span class="btn default btn-file">
		                                    <span class="fileinput-new"> Select image </span>
		                                    <span class="fileinput-exists"> Change </span>
		                                    <input type="file" name="image" id="image"> </span>
		                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
		                            </div>
		                        </div>
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="IsAllow" class=" control-label col-xs-12 col-md-4 text-left"> IsAllow </label>
												<div class="col-xs-12 col-md-7">
											  		<div class="form col-xs-12">
							<label class='radio radio-inline'>
							<input type='radio' name='isAllow' value ='1'                                      
							@if($row['isAllow'] == '1') checked="checked" @endif > Show </label>
							<label class='radio radio-inline'>
							<input type='radio' name='isAllow' value ='0'                                      
							@if($row['isAllow'] == '0') checked="checked" @endif > Not Show </label>
					</div>
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
						{!! Form::hidden('likes', $row['likes']) !!}

											<div class="form-group   " >
												<label for="PostUploadName" class=" control-label col-xs-12 col-md-4 text-left"> PostUploadName </label>
												<div class="col-xs-12 col-md-7">
											  		<select name='postUploadName' rows='5' id='postUploadName' class='form-control select2 '                                       ></select>
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="PostUploadNameMM" class=" control-label col-xs-12 col-md-4 text-left"> PostUploadNameMM </label>
												<div class="col-xs-12 col-md-7">
											  		<select name='postUploadNameMM' rows='5' id='postUploadNameMM' class='form-control select2 '   ></select>
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="PostUploadPersonImg" class=" control-label col-xs-12 col-md-4 text-left"> PostUploadPersonImg </label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='postUploadPersonImg' id='postUploadPersonImg' value='{{ $row['postUploadPersonImg'] }}'    class='form-control ' />
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="PostUploadUserImgPath" class=" control-label col-xs-12 col-md-4 text-left"> PostUploadUserImgPath </label>
												<div class="col-xs-12 col-md-7">
											  		<div class="form-control fileinput fileinput-new @if($row['postUploadUserImgPath'] =='') required @endif " data-provides="fileinput" style="border: none;">
		                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
		                            @if(file_exists('.users_photo/'.$row['postUploadUserImgPath']) && $row['postUploadUserImgPath'] !='')
		                            	<img src="{{asset('.users_photo/'.$row["postUploadUserImgPath"])}}" alt="" />
		                            @else
		                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> 
		                            @endif
		                            </div>
		                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
		                            <div>
		                                <span class="btn default btn-file">
		                                    <span class="fileinput-new"> Select image </span>
		                                    <span class="fileinput-exists"> Change </span>
		                                    <input type="file" name="postUploadUserImgPath" id="postUploadUserImgPath"> </span>
		                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
		                            </div>
		                        </div>
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="PostUploadedDate" class=" control-label col-xs-12 col-md-4 text-left"> PostUploadedDate </label>
												<div class="col-xs-12 col-md-7">
											  		
						<div class="input-group m-b" style="width:150px !important;">
							{!! Form::text('postUploadedDate', $row['postUploadedDate'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>

											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Post Author Role" class=" control-label col-xs-12 col-md-4 text-left"> Post Author Role </label>
												<div class="col-xs-12 col-md-7">
											  		<select name='post_author_role' rows='5' id='post_author_role' class='form-control select2 '                                       ></select>
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Post Author Role Mm" class=" control-label col-xs-12 col-md-4 text-left"> Post Author Role Mm </label>
												<div class="col-xs-12 col-md-7">
											  		<select name='post_author_role_mm' rows='5' id='post_author_role_mm' class='form-control select2 '                                       ></select>
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
						{!! Form::hidden('share_count', $row['share_count']) !!}

											<div class="form-group   " >
												<label for="Suggest Section Eng" class=" control-label col-xs-12 col-md-4 text-left"> Suggest Section Eng </label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='suggest_section_eng' id='suggest_section_eng' value='{{ $row['suggest_section_eng'] }}'    class='form-control ' />
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Title" class=" control-label col-xs-12 col-md-4 text-left"> Title </label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='title' id='title' value='{{ $row['title'] }}'    class='form-control ' />
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="TitleMm" class=" control-label col-xs-12 col-md-4 text-left"> TitleMm </label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='titleMm' id='titleMm' value='{{ $row['titleMm'] }}'    class='form-control ' />
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="UserId" class=" control-label col-xs-12 col-md-4 text-left"> UserId </label>
												<div class="col-xs-12 col-md-7">
											  		<select name='userId' rows='5' id='userId' class='form-control select2 '                                       ></select>
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="VideoId" class=" control-label col-xs-12 col-md-4 text-left"> VideoId </label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='videoId' id='videoId' value='{{ $row['videoId'] }}'    class='form-control ' />
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Created At" class=" control-label col-xs-12 col-md-4 text-left"> Created At </label>
												<div class="col-xs-12 col-md-7">
											  		
						<div class="input-group m-b" style="width:150px !important;">
							{!! Form::text('created_at', $row['created_at'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>

											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Updated At" class=" control-label col-xs-12 col-md-4 text-left"> Updated At </label>
												<div class="col-xs-12 col-md-7">
											  		
						<div class="input-group m-b" style="width:150px !important;">
							{!! Form::text('updated_at', $row['updated_at'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>

											  		
											  		 
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
		
		
		$("#authorId").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:objectId:authorName') !!}",
		{  selected_value : '{{ $row["authorId"] }}' });
		
		$("#postUploadName").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:authorName:authorName') !!}",
		{  selected_value : '{{ $row["postUploadName"] }}' });
		
		$("#postUploadNameMM").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:authorNameMM:authorNameMM') !!}",
		{  selected_value : '{{ $row["postUploadNameMM"] }}' });
		
		$("#post_author_role").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:authorTitleEng:authorTitleEng') !!}",
		{  selected_value : '{{ $row["post_author_role"] }}' });
		
		$("#post_author_role_mm").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:authorTitleMM:authorTitleMM') !!}",
		{  selected_value : '{{ $row["post_author_role_mm"] }}' });
		
		$("#userId").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:objectId:authorName') !!}",
		{  selected_value : '{{ $row["userId"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@endsection