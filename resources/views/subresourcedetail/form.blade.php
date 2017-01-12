@extends('layouts.main') @section('content')

<div class="page-content row">
    <!-- Page header -->
    @include('layouts.breadcrumb')
    <div class="page-content-wrapper m-t">

        {!! Form::open(array('url'=>'subresourcedetail/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!} 
        <div class="portlet light bordered animated fadeInUp ">
            <div class="portlet-title">
                @if(isset($pageTitle) && isset($pageAction))
                <div class="caption">
                    <i class="tag font-blue-sharp"></i><span class="caption-subject font-blue-sharp bold uppercase">{{ $pageTitle }} : <small> {{ $pageAction }}</small></span>
                </div>
                @endif
                <div class="actions">
                    <a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a>
                    @if(Session::get('gid') ==1)
                    <a href="{{ URL::to('http://developers.myapibox.com/core/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}"><i class="fa  fa-ellipsis-v"></i></a> @endif
                </div>
            </div>
            <div class="portlet-body">

                @if(count($errors->all()) > 0)
                <div class="row alert_msg">
                    <div class="col-md-12 note note-danger">
                        @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="form col-xs-12 col-md-12">
											<div class="form-group   " >
												<label for="Id" class=" control-label col-xs-12 col-md-4 text-left"> Id </label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='id' id='id' value='{{ $row['id'] }}'    class='form-control ' />
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
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
											<div class="form-group   " >
												<label for="Author Img Url" class=" control-label col-xs-12 col-md-4 text-left"> Author Img Url </label>
												<div class="col-xs-12 col-md-7">
											  		<select name='author_img_url' rows='5' id='author_img_url' class='form-control select2 '   ></select>
											  		
											  		 
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

											<div class="form-group   " >
												<label for="Posted Date" class=" control-label col-xs-12 col-md-4 text-left"> Posted Date </label>
												<div class="col-xs-12 col-md-7">
											  		
						<div class="input-group m-b" style="width:150px !important;">
							{!! Form::text('posted_date', $row['posted_date'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>

											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Resource Id" class=" control-label col-xs-12 col-md-4 text-left"> Resource Id </label>
												<div class="col-xs-12 col-md-7">
											  		<select name='resource_id' rows='5' id='resource_id' class='form-control select2 '   ></select>
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Sub Resource Content Eng" class=" control-label col-xs-12 col-md-4 text-left"> Sub Resource Content Eng </label>
												<div class="col-xs-12 col-md-7">
											  		
						<textarea name='sub_resouce_content_eng' rows='5' id='sub_resouce_content_eng' class='form-control '   >{{ $row['sub_resouce_content_eng'] }}</textarea>

											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Sub Resource Content Mm" class=" control-label col-xs-12 col-md-4 text-left"> Sub Resource Content Mm </label>
												<div class="col-xs-12 col-md-7">
											  		
						<textarea name='sub_resouce_content_mm' rows='5' id='sub_resouce_content_mm' class='form-control '   >{{ $row['sub_resouce_content_mm'] }}</textarea>

											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Sub Resource Title Eng" class=" control-label col-xs-12 col-md-4 text-left"> Sub Resource Title Eng </label>
												<div class="col-xs-12 col-md-7">
											  		
						<textarea name='sub_resource_title_eng' rows='5' id='sub_resource_title_eng' class='form-control '   >{{ $row['sub_resource_title_eng'] }}</textarea>

											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Sub Resource Title Mm" class=" control-label col-xs-12 col-md-4 text-left"> Sub Resource Title Mm </label>
												<div class="col-xs-12 col-md-7">
											  		
						<textarea name='sub_resource_title_mm' rows='5' id='sub_resource_title_mm' class='form-control '   >{{ $row['sub_resource_title_mm'] }}</textarea>

											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
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
				</div>
                </div>
                
                <div class="row">
                    <div class="form-actions">
                        <div class="col-md-offset-4 col-md-8">
                            <button type="submit" name="apply" class="btn btn-info hidden-xs"><i class="fa fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
                            <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save"></i> {{ Lang::get('core.sb_save') }}</button>
                            <button type="button" onclick="location.href='{{ URL::to('subresourcedetail?return='.$return) }}' " class="btn red "><i class="fa fa-close "></i> {{ Lang::get('core.sb_cancel') }} </button>
                        </div>

                    </div>
                </div>
               
            </div>
        </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
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
		
    });
</script>
@endsection
@stop