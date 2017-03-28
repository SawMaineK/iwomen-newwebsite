<div class="form col-xs-12 col-md-6">
{!! Form::hidden('id', $row['id']) !!}
{!! Form::hidden('objectId', $row['objectId']) !!}
<!-- Author Id  -->
<div class="form-group   " >
	<label for="Author Id" class=" control-label col-xs-12 col-md-4 text-left"> Author Id </label>
	<div class="col-xs-12 col-md-7">
  		<select name='author_id' rows='5' id='author_id' class='form-control select2 '   ></select>
  		  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Author Name Eng  -->
<div class="form-group {{ $errors->has('authorName') ? 'has-error' : '' }}  " >
	<label for="Author Name Eng" class=" control-label col-xs-12 col-md-4 text-left"> Author Name Eng <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<select name='authorName' rows='5' id='authorName' class='form-control select2 ' required  ></select>
  		@if ($errors->has("authorName"))
	<span class="help-block">
		<strong>{{ $errors->first("authorName") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Author Name MM  -->
<div class="form-group {{ $errors->has('authorNameMM') ? 'has-error' : '' }}  " >
	<label for="Author Name MM" class=" control-label col-xs-12 col-md-4 text-left"> Author Name MM <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<select name='authorNameMM' rows='5' id='authorNameMM' class='form-control select2 ' required  ></select>
  		@if ($errors->has("authorNameMM"))
	<span class="help-block">
		<strong>{{ $errors->first("authorNameMM") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Author Image Path  -->
<div class="form-group {{ $errors->has('author_img_url') ? 'has-error' : '' }}  " >
	<label for="Author Image Path" class=" control-label col-xs-12 col-md-4 text-left"> Author Image Path <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<select name='author_img_url' rows='5' id='author_img_url' class='form-control select2 ' required  ></select>
  		@if ($errors->has("author_img_url"))
	<span class="help-block">
		<strong>{{ $errors->first("author_img_url") }}</strong>
	</span>
	@endif
  		<span class="help-block">Show Author Name and save Author Img</span>
 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Posted Date  -->
<div class="form-group {{ $errors->has('posted_date') ? 'has-error' : '' }}  " >
	<label for="Posted Date" class=" control-label col-xs-12 col-md-4 text-left"> Posted Date <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<div class="input-group">
	<input  type='text' name='posted_date' id='posted_date' value='{{ $row['posted_date'] }}' required   class='form-control datetime ' data-date-format='yyyy-mm-dd h:i:s' />
	<span class="input-group-addon"><i class="fa fa-
calendar"></i></span>
</div>

  		@if ($errors->has("posted_date"))
	<span class="help-block">
		<strong>{{ $errors->first("posted_date") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Resource Id  -->
<div class="form-group {{ $errors->has('resource_id') ? 'has-error' : '' }}  " >
	<label for="Resource Id" class=" control-label col-xs-12 col-md-4 text-left"> Resource Id <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<select name='resource_id' rows='5' id='resource_id' class='form-control select2 ' required  ></select>
  		@if ($errors->has("resource_id"))
	<span class="help-block">
		<strong>{{ $errors->first("resource_id") }}</strong>
	</span>
	@endif
  		<span class="help-block">Show Resource Title  and save Resource ID</span>
 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Sub Resource Image Path  -->
<div class="form-group   " >
	<label for="Sub Resource Image Path" class=" control-label col-xs-12 col-md-4 text-left"> Sub Resource Image Path </label>
	<div class="col-xs-12 col-md-7">
  		<div class="fileinput fileinput-new @if($row['sub_res_icon_img_url'] =='') required @endif" data-provides="fileinput">
    <div class="input-group input-large">
        <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
            <i class="fa fa-file fileinput-exists"></i>&nbsp;
            <span class="fileinput-filename"> </span>
        </div>
        <span class="input-group-addon btn default btn-file">
            <span class="fileinput-new"> Select file </span>
            <span class="fileinput-exists"> Change </span>
            <input type="file" name="sub_res_icon_img_url" id="sub_res_icon_img_url"> </span>
        <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
    </div>
</div>
  		  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Sub Resource Title Eng  -->
<div class="form-group {{ $errors->has('sub_resource_title_eng') ? 'has-error' : '' }}  " >
	<label for="Sub Resource Title Eng" class=" control-label col-xs-12 col-md-4 text-left"> Sub Resource Title Eng <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='sub_resource_title_eng' id='sub_resource_title_eng' value='{{ $row['sub_resource_title_eng'] }}' required   class='form-control ' />
  		@if ($errors->has("sub_resource_title_eng"))
	<span class="help-block">
		<strong>{{ $errors->first("sub_resource_title_eng") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Sub Resource Title Mm  -->
<div class="form-group {{ $errors->has('sub_resource_title_mm') ? 'has-error' : '' }}  " >
	<label for="Sub Resource Title Mm" class=" control-label col-xs-12 col-md-4 text-left"> Sub Resource Title Mm <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='sub_resource_title_mm' id='sub_resource_title_mm' value='{{ $row['sub_resource_title_mm'] }}' required   class='form-control ' />
  		@if ($errors->has("sub_resource_title_mm"))
	<span class="help-block">
		<strong>{{ $errors->first("sub_resource_title_mm") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Sub Resource Content Eng  -->
<div class="form-group {{ $errors->has('sub_resouce_content_eng') ? 'has-error' : '' }}  " >
	<label for="Sub Resource Content Eng" class=" control-label col-xs-12 col-md-4 text-left"> Sub Resource Content Eng <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<textarea name='sub_resouce_content_eng' rows='5' id='sub_resouce_content_eng' class='form-control ' required  >{{ $row['sub_resouce_content_eng'] }}</textarea>
  		@if ($errors->has("sub_resouce_content_eng"))
	<span class="help-block">
		<strong>{{ $errors->first("sub_resouce_content_eng") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Sub Resource Content Mm  -->
<div class="form-group {{ $errors->has('sub_resouce_content_mm') ? 'has-error' : '' }}  " >
	<label for="Sub Resource Content Mm" class=" control-label col-xs-12 col-md-4 text-left"> Sub Resource Content Mm <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<textarea name='sub_resouce_content_mm' rows='5' id='sub_resouce_content_mm' class='form-control ' required  >{{ $row['sub_resouce_content_mm'] }}</textarea>
  		@if ($errors->has("sub_resouce_content_mm"))
	<span class="help-block">
		<strong>{{ $errors->first("sub_resouce_content_mm") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

</div>
<div class="form col-xs-12 col-md-6">
<!-- IsAllow  -->
<div class="form-group {{ $errors->has('isAllow') ? 'has-error' : '' }}  " >
	<label for="IsAllow" class=" control-label col-xs-12 col-md-4 text-left"> IsAllow <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<div class="form col-xs-12">
	<label class='radio radio-inline'>
		<input type='radio' name='isAllow' value ='1' required  class='icheck ' 	@if($row['isAllow'] == '1') checked="checked" @endif > Show </label>
	<label class='radio radio-inline'>
		<input type='radio' name='isAllow' value ='0' required  class='icheck ' 	@if($row['isAllow'] == '0') checked="checked" @endif > Not Show </label>
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

</div>
