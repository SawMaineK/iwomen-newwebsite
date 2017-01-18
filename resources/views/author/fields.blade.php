<div class="form col-xs-12 col-md-12">
{!! Form::hidden('id', $row['id']) !!}
{!! Form::hidden('objectId', $row['objectId']) !!}
<!-- Author Img   -->
<div class="form-group {{ $errors->has('authorImg') ? 'has-error' : '' }}  " >
	<label for="Author Img " class=" control-label col-xs-12 col-md-4 text-left"> Author Img  <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<div class="form-control fileinput fileinput-new @if($row['authorImg'] =='') required @endif " data-provides="fileinput" style="border: none;">
    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
    @if(file_exists('.authors_photo/'.$row['authorImg']) && $row['authorImg'] !='')
    	<img src="{{asset('.authors_photo/'.$row["authorImg"])}}" alt="" />
    @else
        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
    @endif
    </div>
    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
    <div>
        <span class="btn default btn-file">
            <span class="fileinput-new"> Select image </span>
            <span class="fileinput-exists"> Change </span>
            <input type="file" name="authorImg" id="authorImg"> </span>
        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
    </div>
</div>
  		@if ($errors->has("authorImg"))
	<span class="help-block">
		<strong>{{ $errors->first("authorImg") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Author Info Eng  -->
<div class="form-group {{ $errors->has('authorInfoEng') ? 'has-error' : '' }}  " >
	<label for="Author Info Eng" class=" control-label col-xs-12 col-md-4 text-left"> Author Info Eng <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<textarea name='authorInfoEng' rows='5' id='authorInfoEng' class='form-control ' required  >{{ $row['authorInfoEng'] }}</textarea>
  		@if ($errors->has("authorInfoEng"))
	<span class="help-block">
		<strong>{{ $errors->first("authorInfoEng") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Author Info Mm  -->
<div class="form-group {{ $errors->has('authorInfoMM') ? 'has-error' : '' }}  " >
	<label for="Author Info Mm" class=" control-label col-xs-12 col-md-4 text-left"> Author Info Mm <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<textarea name='authorInfoMM' rows='5' id='authorInfoMM' class='form-control ' required  >{{ $row['authorInfoMM'] }}</textarea>
  		@if ($errors->has("authorInfoMM"))
	<span class="help-block">
		<strong>{{ $errors->first("authorInfoMM") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Author Name Eng  -->
<div class="form-group {{ $errors->has('authorName') ? 'has-error' : '' }}  " >
	<label for="Author Name Eng" class=" control-label col-xs-12 col-md-4 text-left"> Author Name Eng <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='authorName' id='authorName' value='{{ $row['authorName'] }}' required   class='form-control ' />
  		@if ($errors->has("authorName"))
	<span class="help-block">
		<strong>{{ $errors->first("authorName") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Author Name Mm  -->
<div class="form-group {{ $errors->has('authorNameMM') ? 'has-error' : '' }}  " >
	<label for="Author Name Mm" class=" control-label col-xs-12 col-md-4 text-left"> Author Name Mm <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='authorNameMM' id='authorNameMM' value='{{ $row['authorNameMM'] }}' required   class='form-control ' />
  		@if ($errors->has("authorNameMM"))
	<span class="help-block">
		<strong>{{ $errors->first("authorNameMM") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Author Title Eng  -->
<div class="form-group {{ $errors->has('authorTitleEng') ? 'has-error' : '' }}  " >
	<label for="Author Title Eng" class=" control-label col-xs-12 col-md-4 text-left"> Author Title Eng <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='authorTitleEng' id='authorTitleEng' value='{{ $row['authorTitleEng'] }}' required   class='form-control ' />
  		@if ($errors->has("authorTitleEng"))
	<span class="help-block">
		<strong>{{ $errors->first("authorTitleEng") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Author Title Mm  -->
<div class="form-group {{ $errors->has('authorTitleMM') ? 'has-error' : '' }}  " >
	<label for="Author Title Mm" class=" control-label col-xs-12 col-md-4 text-left"> Author Title Mm <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='authorTitleMM' id='authorTitleMM' value='{{ $row['authorTitleMM'] }}' required   class='form-control ' />
  		@if ($errors->has("authorTitleMM"))
	<span class="help-block">
		<strong>{{ $errors->first("authorTitleMM") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

</div>
