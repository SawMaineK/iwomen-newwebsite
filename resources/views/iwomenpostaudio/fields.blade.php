<div class="form col-xs-12 col-md-12">
{!! Form::hidden('id', $row['id']) !!}
<!-- Post Id  -->
<div class="form-group {{ $errors->has('post_id') ? 'has-error' : '' }}  " >
	<label for="Post Id" class=" control-label col-xs-12 col-md-4 text-left"> Post Id <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<select name='post_id' rows='5' id='post_id' class='form-control select2 ' required  ></select>
  		@if ($errors->has("post_id"))
	<span class="help-block">
		<strong>{{ $errors->first("post_id") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Name  -->
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}  " >
	<label for="Name" class=" control-label col-xs-12 col-md-4 text-left"> Name <span class='asterix'> * </span></label>
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

<!-- Name Mm  -->
<div class="form-group {{ $errors->has('name_mm') ? 'has-error' : '' }}  " >
	<label for="Name Mm" class=" control-label col-xs-12 col-md-4 text-left"> Name Mm <span class='asterix'> * </span></label>
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

<!-- Links Path  -->
<div class="form-group {{ $errors->has('links_path') ? 'has-error' : '' }}  " >
	<label for="Links Path" class=" control-label col-xs-12 col-md-4 text-left"> Links Path <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<div class="fileinput fileinput-new @if($row['links_path'] =='') required @endif" data-provides="fileinput">
    <div class="input-group input-large">
        <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
            <i class="fa fa-file fileinput-exists"></i>&nbsp;
            <span class="fileinput-filename"> </span>
        </div>
        <span class="input-group-addon btn default btn-file">
            <span class="fileinput-new"> Select file </span>
            <span class="fileinput-exists"> Change </span>
            <input type="file" name="links_path" id="links_path"> </span>
        <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
    </div>
</div>
  		@if ($errors->has("links_path"))
	<span class="help-block">
		<strong>{{ $errors->first("links_path") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- Uploaded Date  -->
<div class="form-group {{ $errors->has('uploaded_date') ? 'has-error' : '' }}  " >
	<label for="Uploaded Date" class=" control-label col-xs-12 col-md-4 text-left"> Uploaded Date <span class='asterix'> * </span></label>
	<div class="col-xs-12 col-md-7">
  		<div class="input-group">
	<input  type='text' name='uploaded_date' id='uploaded_date' value='{{ $row['uploaded_date'] }}' required   class='form-control date ' data-date-format='yyyy-mm-dd' />
	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
</div>
  		@if ($errors->has("uploaded_date"))
	<span class="help-block">
		<strong>{{ $errors->first("uploaded_date") }}</strong>
	</span>
	@endif
  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

<!-- IsAllow  -->
<div class="form-group   " >
	<label for="IsAllow" class=" control-label col-xs-12 col-md-4 text-left"> IsAllow </label>
	<div class="col-xs-12 col-md-7">
  		<div class="form col-xs-12">
	<label class='radio radio-inline'>
		<input type='radio' name='isAllow' value ='1'   class='icheck ' 	@if($row['isAllow'] == '1') checked="checked" @endif > Allow </label>
	<label class='radio radio-inline'>
		<input type='radio' name='isAllow' value ='0'   class='icheck ' 	@if($row['isAllow'] == '0') checked="checked" @endif > No </label>
</div>
  		  		 	</div> 	<div class="col-xs-12 col-md-1">
 		
 	</div>
</div>

</div>
