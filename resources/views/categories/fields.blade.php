<div class="form col-xs-12 col-md-12">
{!! Form::hidden('id', $row['id']) !!}
{!! Form::hidden('objectId', $row['objectId']) !!}
<!-- Category Name Eng  -->
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}  " >
	<label for="Category Name Eng" class=" control-label col-xs-12 col-md-4 text-left"> Category Name Eng <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='name' id='name' value='{{ $row['name'] }}' required   class='form-control ' />
  		@if ($errors->has("name"))
	<span class="help-block">
		<strong>{{ $errors->first("name") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Category Name Mm  -->
<div class="form-group {{ $errors->has('name_mm') ? 'has-error' : '' }}  " >
	<label for="Category Name Mm" class=" control-label col-xs-12 col-md-4 text-left"> Category Name Mm <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<input type='text' name='name_mm' id='name_mm' value='{{ $row['name_mm'] }}' required   class='form-control ' />
  		@if ($errors->has("name_mm"))
	<span class="help-block">
		<strong>{{ $errors->first("name_mm") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Category Image  -->
<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}  " >
	<label for="Category Image" class=" control-label col-xs-12 col-md-4 text-left"> Category Image <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<div class="form-control fileinput fileinput-new @if($row['image'] =='') required @endif " data-provides="fileinput" style="border: none;">
    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
    @if(file_exists('.authors_photo/'.$row['image']) && $row['image'] !='')
    	<img src="{{asset('.authors_photo/'.$row["image"])}}" alt="" />
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

</div>
