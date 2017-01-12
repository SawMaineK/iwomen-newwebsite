@extends('layouts.main') @section('content')

<div class="page-content row">
    <!-- Page header -->
    @include('layouts.breadcrumb')
    <div class="page-content-wrapper m-t">

        {!! Form::open(array('url'=>'resource/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!} 
        <div class="portlet light bordered animated fadeInUp ">
            <div class="portlet-title">
                @if(isset($pageTitle) && isset($pageAction))
                <div class="caption">
                    <i class="info-circle font-blue-sharp"></i><span class="caption-subject font-blue-sharp bold uppercase">{{ $pageTitle }} : <small> {{ $pageAction }}</small></span>
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
						{!! Form::hidden('id', $row['id']) !!}

						{!! Form::hidden('objectId', $row['objectId']) !!}

											<div class="form-group {{ $errors->has('author_img_path') ? 'has-error' : '' }}  " >
												<label for="Author Img Path" class=" control-label col-xs-12 col-md-4 text-left"> Author Img Path <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<select name='author_img_path' rows='5' id='author_img_path' class='form-control select2 ' required                                                                          ></select>
											  		
									@if ($errors->has("author_img_path"))
										<span class="help-block">
							                <strong>{{ $errors->first("author_img_path") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="IsAllow" class=" control-label col-xs-12 col-md-4 text-left"> IsAllow </label>
												<div class="col-xs-12 col-md-7">
											  		<div class='form col-xs-12'>
						<?php $isAllow = explode(",",$row['isAllow']); ?>
							<label class='checked checkbox-inline'>   
							<input type='checkbox' name='isAllow[]' value ='1'                                                                           class='' 
							@if(in_array('1',$isAllow))checked @endif 
					 />  
							 </label> 
					</div>
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('week_content') ? 'has-error' : '' }}  " >
												<label for="Week Content" class=" control-label col-xs-12 col-md-4 text-left"> Week Content <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<div class='form col-xs-12'>
						<?php $week_content = explode(",",$row['week_content']); ?>
							<label class='checked checkbox-inline'>   
							<input type='checkbox' name='week_content[]' value ='1' required                                                                                                              class='' 
							@if(in_array('1',$week_content))checked @endif 
					 />  
							 </label> 
					</div>
											  		
									@if ($errors->has("week_content"))
										<span class="help-block">
							                <strong>{{ $errors->first("week_content") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('resource_author_id') ? 'has-error' : '' }}  " >
												<label for="Resource Author" class=" control-label col-xs-12 col-md-4 text-left"> Resource Author <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<select name='resource_author_id' rows='5' id='resource_author_id' class='form-control select2 ' required                                      ></select>
											  		
									@if ($errors->has("resource_author_id"))
										<span class="help-block">
							                <strong>{{ $errors->first("resource_author_id") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('resource_author_name') ? 'has-error' : '' }}  " >
												<label for="Resource Author Name" class=" control-label col-xs-12 col-md-4 text-left"> Resource Author Name <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='resource_author_name' id='resource_author_name' value='{{ $row['resource_author_name'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("resource_author_name"))
										<span class="help-block">
							                <strong>{{ $errors->first("resource_author_name") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('resource_title_eng') ? 'has-error' : '' }}  " >
												<label for="Resource Title Eng" class=" control-label col-xs-12 col-md-4 text-left"> Resource Title Eng <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='resource_title_eng' id='resource_title_eng' value='{{ $row['resource_title_eng'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("resource_title_eng"))
										<span class="help-block">
							                <strong>{{ $errors->first("resource_title_eng") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('resource_title_mm') ? 'has-error' : '' }}  " >
												<label for="Resource Title Mm" class=" control-label col-xs-12 col-md-4 text-left"> Resource Title Mm <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='resource_title_mm' id='resource_title_mm' value='{{ $row['resource_title_mm'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("resource_title_mm"))
										<span class="help-block">
							                <strong>{{ $errors->first("resource_title_mm") }}</strong>
							            </span>
						            @endif
											  		 
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
                            <button type="button" onclick="location.href='{{ URL::to('resource?return='.$return) }}' " class="btn red "><i class="fa fa-close "></i> {{ Lang::get('core.sb_cancel') }} </button>
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
         
        
		$("#author_img_path").jCombo("{!! url('resource/comboselect?filter=authors:authorImg:authorName') !!}",
		{  selected_value : '{{ $row["author_img_path"] }}' });
		
		$("#resource_author_id").jCombo("{!! url('resource/comboselect?filter=authors:authorName:authorName') !!}",
		{  selected_value : '{{ $row["resource_author_id"] }}' });
		
    });
</script>
@endsection
@stop