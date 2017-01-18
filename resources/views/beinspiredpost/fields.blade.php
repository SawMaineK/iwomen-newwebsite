<div class="form col-xs-12 col-md-6">
{!! Form::hidden('id', $row['id']) !!}
{!! Form::hidden('objectId', $row['objectId']) !!}
<!-- ContentType  -->
<div class="form-group {{ $errors->has('contentType') ? 'has-error' : '' }}  " >
	<label for="ContentType" class=" control-label col-xs-12 col-md-4 text-left"> ContentType <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<?php $contentType = explode(',',$row['contentType']); $contentType_opt = array( 'Letter' => 'Letter' ,  'Audio' => 'Audio' ,  'Video' => 'Video' ,  'Story' => 'Story' , ); ?>
			<select name='contentType' rows='5' required  class='form-control select2 ' id='contentType'>
			<?php
			 	foreach($contentType_opt as $key=>$val)
			 	{
					echo "<option  value ='$key' ".($row['contentType'] == $key ? " selected='selected' " : '' ).">$val</option>";
			 	}
			?>
			</select>
  		@if ($errors->has("contentType"))
	<span class="help-block">
		<strong>{{ $errors->first("contentType") }}</strong>
	</span>
	@endif
  		<span class="help-block">Default is "Letter" , when women uploaded save with Story!</span>
 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Post Title Eng  -->
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}  " >
	<label for="Post Title Eng" class=" control-label col-xs-12 col-md-4 text-left"> Post Title Eng <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='title' id='title' value='{{ $row['title'] }}' required   class='form-control ' />
  		@if ($errors->has("title"))
	<span class="help-block">
		<strong>{{ $errors->first("title") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Post Title Mm  -->
<div class="form-group {{ $errors->has('titleMm') ? 'has-error' : '' }}  " >
	<label for="Post Title Mm" class=" control-label col-xs-12 col-md-4 text-left"> Post Title Mm <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='titleMm' id='titleMm' value='{{ $row['titleMm'] }}' required   class='form-control ' />
  		@if ($errors->has("titleMm"))
	<span class="help-block">
		<strong>{{ $errors->first("titleMm") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Post Content Eng  -->
<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}  " >
	<label for="Post Content Eng" class=" control-label col-xs-12 col-md-4 text-left"> Post Content Eng <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<textarea name='content' rows='5' id='content' class='form-control ' required  >{{ $row['content'] }}</textarea>
  		@if ($errors->has("content"))
	<span class="help-block">
		<strong>{{ $errors->first("content") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Post Content Mm  -->
<div class="form-group {{ $errors->has('content_mm') ? 'has-error' : '' }}  " >
	<label for="Post Content Mm" class=" control-label col-xs-12 col-md-4 text-left"> Post Content Mm <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<textarea name='content_mm' rows='5' id='content_mm' class='form-control ' required  >{{ $row['content_mm'] }}</textarea>
  		@if ($errors->has("content_mm"))
	<span class="help-block">
		<strong>{{ $errors->first("content_mm") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Author ID  -->
<div class="form-group {{ $errors->has('authorId') ? 'has-error' : '' }}  " >
	<label for="Author ID" class=" control-label col-xs-12 col-md-4 text-left"> Author ID <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<select name='authorId' rows='5' id='authorId' class='form-control select2 ' required  ></select>
  		@if ($errors->has("authorId"))
	<span class="help-block">
		<strong>{{ $errors->first("authorId") }}</strong>
	</span>
	@endif
  		<span class="help-block">Show Author Name and save Author ID</span>
 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Post  Author Name Eng  -->
<div class="form-group {{ $errors->has('postUploadName') ? 'has-error' : '' }}  " >
	<label for="Post  Author Name Eng" class=" control-label col-xs-12 col-md-4 text-left"> Post  Author Name Eng <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<select name='postUploadName' rows='5' id='postUploadName' class='form-control select2 ' required  ></select>
  		@if ($errors->has("postUploadName"))
	<span class="help-block">
		<strong>{{ $errors->first("postUploadName") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Post Author Name MM  -->
<div class="form-group {{ $errors->has('postUploadNameMM') ? 'has-error' : '' }}  " >
	<label for="Post Author Name MM" class=" control-label col-xs-12 col-md-4 text-left"> Post Author Name MM <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<select name='postUploadNameMM' rows='5' id='postUploadNameMM' class='form-control select2 ' required  ></select>
  		@if ($errors->has("postUploadNameMM"))
	<span class="help-block">
		<strong>{{ $errors->first("postUploadNameMM") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Image  -->
<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}  " >
	<label for="Image" class=" control-label col-xs-12 col-md-4 text-left"> Image <span class='asterix'> * </span></label>
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
  		@if ($errors->has("image"))
	<span class="help-block">
		<strong>{{ $errors->first("image") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Post Author Img Path  -->
<div class="form-group {{ $errors->has('postUploadUserImgPath') ? 'has-error' : '' }}  " >
	<label for="Post Author Img Path" class=" control-label col-xs-12 col-md-4 text-left"> Post Author Img Path <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<select name='postUploadUserImgPath' rows='5' id='postUploadUserImgPath' class='form-control select2 ' required  ></select>
  		@if ($errors->has("postUploadUserImgPath"))
	<span class="help-block">
		<strong>{{ $errors->first("postUploadUserImgPath") }}</strong>
	</span>
	@endif
  		<span class="help-block">Show Author Name and save Author Img</span>
 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Post Author Role  -->
<div class="form-group {{ $errors->has('post_author_role') ? 'has-error' : '' }}  " >
	<label for="Post Author Role" class=" control-label col-xs-12 col-md-4 text-left"> Post Author Role <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<select name='post_author_role' rows='5' id='post_author_role' class='form-control select2 ' required  ></select>
  		@if ($errors->has("post_author_role"))
	<span class="help-block">
		<strong>{{ $errors->first("post_author_role") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Post Author Role Mm  -->
<div class="form-group {{ $errors->has('post_author_role_mm') ? 'has-error' : '' }}  " >
	<label for="Post Author Role Mm" class=" control-label col-xs-12 col-md-4 text-left"> Post Author Role Mm <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<select name='post_author_role_mm' rows='5' id='post_author_role_mm' class='form-control select2 ' required  ></select>
  		@if ($errors->has("post_author_role_mm"))
	<span class="help-block">
		<strong>{{ $errors->first("post_author_role_mm") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Post Upload UserId/AuthorID  -->
<div class="form-group {{ $errors->has('userId') ? 'has-error' : '' }}  " >
	<label for="Post Upload UserId/AuthorID" class=" control-label col-xs-12 col-md-4 text-left"> Post Upload UserId/AuthorID <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<select name='userId' rows='5' id='userId' class='form-control select2 ' required  ></select>
  		@if ($errors->has("userId"))
	<span class="help-block">
		<strong>{{ $errors->first("userId") }}</strong>
	</span>
	@endif
  		<span class="help-block">Show Name and Save ID.</span>
 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- AudioFile  -->
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
  		  		<span class="help-block">full links of mp3 file</span>
 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- VideoId  -->
<div class="form-group   " >
	<label for="VideoId" class=" control-label col-xs-12 col-md-4 text-left"> VideoId </label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='videoId' id='videoId' value='{{ $row['videoId'] }}'    class='form-control ' />
  		  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

</div>
<div class="form col-xs-12 col-md-6">
<!-- Credit Logo Url  -->
<div class="form-group {{ $errors->has('credit_logo_url') ? 'has-error' : '' }}  " >
	<label for="Credit Logo Url" class=" control-label col-xs-12 col-md-4 text-left"> Credit Logo Url <span class='asterix'> * </span></label>
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
  		@if ($errors->has("credit_logo_url"))
	<span class="help-block">
		<strong>{{ $errors->first("credit_logo_url") }}</strong>
	</span>
	@endif
  		<span class="help-block">full http links</span>
 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Credit Name Eng  -->
<div class="form-group {{ $errors->has('credit_name') ? 'has-error' : '' }}  " >
	<label for="Credit Name Eng" class=" control-label col-xs-12 col-md-4 text-left"> Credit Name Eng <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='credit_name' id='credit_name' value='{{ $row['credit_name'] }}' required   class='form-control ' />
  		@if ($errors->has("credit_name"))
	<span class="help-block">
		<strong>{{ $errors->first("credit_name") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Credit Name Mm  -->
<div class="form-group {{ $errors->has('credit_name_mm') ? 'has-error' : '' }}  " >
	<label for="Credit Name Mm" class=" control-label col-xs-12 col-md-4 text-left"> Credit Name Mm <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='credit_name_mm' id='credit_name_mm' value='{{ $row['credit_name_mm'] }}' required   class='form-control ' />
  		@if ($errors->has("credit_name_mm"))
	<span class="help-block">
		<strong>{{ $errors->first("credit_name_mm") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Credit Link Eng  -->
<div class="form-group {{ $errors->has('credit_link') ? 'has-error' : '' }}  " >
	<label for="Credit Link Eng" class=" control-label col-xs-12 col-md-4 text-left"> Credit Link Eng <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='credit_link' id='credit_link' value='{{ $row['credit_link'] }}' required   class='form-control ' />
  		@if ($errors->has("credit_link"))
	<span class="help-block">
		<strong>{{ $errors->first("credit_link") }}</strong>
	</span>
	@endif
  		<span class="help-block">full http links</span>
 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Credit Link Mm  -->
<div class="form-group {{ $errors->has('credit_link_mm') ? 'has-error' : '' }}  " >
	<label for="Credit Link Mm" class=" control-label col-xs-12 col-md-4 text-left"> Credit Link Mm <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='credit_link_mm' id='credit_link_mm' value='{{ $row['credit_link_mm'] }}' required   class='form-control ' />
  		@if ($errors->has("credit_link_mm"))
	<span class="help-block">
		<strong>{{ $errors->first("credit_link_mm") }}</strong>
	</span>
	@endif
  		<span class="help-block">full http links</span>
 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Post Uploaded Date  -->
<div class="form-group {{ $errors->has('postUploadedDate') ? 'has-error' : '' }}  " >
	<label for="Post Uploaded Date" class=" control-label col-xs-12 col-md-4 text-left"> Post Uploaded Date <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<div class="input-group m-b" style="width:150px !important;">
	{!! Form::text('postUploadedDate', $row['postUploadedDate'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
	<span class="input-group-addon"><i class="fa fa-
calendar"></i></span>
</div>

  		@if ($errors->has("postUploadedDate"))
	<span class="help-block">
		<strong>{{ $errors->first("postUploadedDate") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Week Content  -->
<div class="form-group {{ $errors->has('week_content') ? 'has-error' : '' }}  " >
	<label for="Week Content" class=" control-label col-xs-12 col-md-4 text-left"> Week Content <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<div class="form col-xs-12">
	<label class='radio radio-inline'>
		<input type='radio' name='week_content' value ='1' required 	@if($row['week_content'] == '1') checked="checked" @endif > Yes </label>
	<label class='radio radio-inline'>
		<input type='radio' name='week_content' value ='0' required 	@if($row['week_content'] == '0') checked="checked" @endif > No </label>
</div>
  		@if ($errors->has("week_content"))
	<span class="help-block">
		<strong>{{ $errors->first("week_content") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- IsAllow  -->
<div class="form-group {{ $errors->has('isAllow') ? 'has-error' : '' }}  " >
	<label for="IsAllow" class=" control-label col-xs-12 col-md-4 text-left"> IsAllow <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<div class="form col-xs-12">
	<label class='radio radio-inline'>
		<input type='radio' name='isAllow' value ='1' required 	@if($row['isAllow'] == '1') checked="checked" @endif > Yes </label>
	<label class='radio radio-inline'>
		<input type='radio' name='isAllow' value ='0' required 	@if($row['isAllow'] == '0') checked="checked" @endif > No </label>
</div>
  		@if ($errors->has("isAllow"))
	<span class="help-block">
		<strong>{{ $errors->first("isAllow") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Likes  -->
<div class="form-group {{ $errors->has('likes') ? 'has-error' : '' }}  " >
	<label for="Likes" class=" control-label col-xs-12 col-md-4 text-left"> Likes <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='likes' id='likes' value='{{ $row['likes'] }}' required   class='form-control ' />
  		@if ($errors->has("likes"))
	<span class="help-block">
		<strong>{{ $errors->first("likes") }}</strong>
	</span>
	@endif
  		<span class="help-block">Auto Value is "0" zero for new post !!! </span>
 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Share Count  -->
<div class="form-group {{ $errors->has('share_count') ? 'has-error' : '' }}  " >
	<label for="Share Count" class=" control-label col-xs-12 col-md-4 text-left"> Share Count <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='share_count' id='share_count' value='{{ $row['share_count'] }}' required   class='form-control ' />
  		@if ($errors->has("share_count"))
	<span class="help-block">
		<strong>{{ $errors->first("share_count") }}</strong>
	</span>
	@endif
  		<span class="help-block">Auto Value is "0" zero for new post !!! </span>
 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Comment Count  -->
<div class="form-group {{ $errors->has('comment_count') ? 'has-error' : '' }}  " >
	<label for="Comment Count" class=" control-label col-xs-12 col-md-4 text-left"> Comment Count <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='comment_count' id='comment_count' value='{{ $row['comment_count'] }}' required   class='form-control ' />
  		@if ($errors->has("comment_count"))
	<span class="help-block">
		<strong>{{ $errors->first("comment_count") }}</strong>
	</span>
	@endif
  		<span class="help-block">Auto Value is "0" zero for new post !!! </span>
 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

</div>
