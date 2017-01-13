@extends('layouts.main') @section('content')

<div class="page-content row">
    <!-- Page header -->
    @include('layouts.breadcrumb')
    <div class="page-content-wrapper m-t">

        {!! Form::open(array('url'=>'tlgprofiles/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!} 
        <div class="portlet light bordered animated fadeInUp ">
            <div class="portlet-title">
                @if(isset($pageTitle) && isset($pageAction))
                <div class="caption">
                    <span class="caption-subject font-blue-sharp bold uppercase">{{ $pageTitle }} : <small> {{ $pageAction }}</small></span>
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

											<div class="form-group {{ $errors->has('is_leader') ? 'has-error' : '' }}  " >
												<label for="Is Leader" class=" control-label col-xs-12 col-md-4 text-left"> Is Leader <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<div class="form col-xs-12">
							<label class='radio radio-inline'>
							<input type='radio' name='is_leader' value ='1' required 
							@if($row['is_leader'] == '1') checked="checked" @endif > BOD Member </label>
							<label class='radio radio-inline'>
							<input type='radio' name='is_leader' value ='0' required 
							@if($row['is_leader'] == '0') checked="checked" @endif > No BOD Member </label>
					</div>
											  		
									@if ($errors->has("is_leader"))
										<span class="help-block">
							                <strong>{{ $errors->first("is_leader") }}</strong>
							            </span>
						            @endif
											  		<span class="help-block">TLG leader is BOD or not.</span> 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_group_address') ? 'has-error' : '' }}  " >
												<label for="Tlg Group Address Eng" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Group Address Eng <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_group_address' id='tlg_group_address' value='{{ $row['tlg_group_address'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_group_address"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_group_address") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_group_address_mm') ? 'has-error' : '' }}  " >
												<label for="Tlg Group Address Mm" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Group Address Mm <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_group_address_mm' id='tlg_group_address_mm' value='{{ $row['tlg_group_address_mm'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_group_address_mm"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_group_address_mm") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_group_key_activity') ? 'has-error' : '' }}  " >
												<label for="Tlg Group Key Activity Eng" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Group Key Activity Eng <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_group_key_activity' id='tlg_group_key_activity' value='{{ $row['tlg_group_key_activity'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_group_key_activity"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_group_key_activity") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_group_key_activity_mm') ? 'has-error' : '' }}  " >
												<label for="Tlg Group Key Activity Mm" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Group Key Activity Mm <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_group_key_activity_mm' id='tlg_group_key_activity_mm' value='{{ $row['tlg_group_key_activity_mm'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_group_key_activity_mm"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_group_key_activity_mm") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_group_key_skills') ? 'has-error' : '' }}  " >
												<label for="Tlg Group Key Skills Eng" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Group Key Skills Eng <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_group_key_skills' id='tlg_group_key_skills' value='{{ $row['tlg_group_key_skills'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_group_key_skills"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_group_key_skills") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_group_key_skills_mm') ? 'has-error' : '' }}  " >
												<label for="Tlg Group Key Skills Mm" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Group Key Skills Mm <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_group_key_skills_mm' id='tlg_group_key_skills_mm' value='{{ $row['tlg_group_key_skills_mm'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_group_key_skills_mm"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_group_key_skills_mm") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_group_lat_address') ? 'has-error' : '' }}  " >
												<label for="Tlg Group Lat Address" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Group Lat Address <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_group_lat_address' id='tlg_group_lat_address' value='{{ $row['tlg_group_lat_address'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_group_lat_address"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_group_lat_address") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_group_lng_address') ? 'has-error' : '' }}  " >
												<label for="Tlg Group Lng Address" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Group Lng Address <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_group_lng_address' id='tlg_group_lng_address' value='{{ $row['tlg_group_lng_address'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_group_lng_address"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_group_lng_address") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_group_logo') ? 'has-error' : '' }}  " >
												<label for="Tlg Group Logo" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Group Logo <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<div class="form-control fileinput fileinput-new @if($row['tlg_group_logo'] =='') required @endif " data-provides="fileinput" style="border: none;">
		                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
		                            @if(file_exists('.authors_photo/'.$row['tlg_group_logo']) && $row['tlg_group_logo'] !='')
		                            	<img src="{{asset('.authors_photo/'.$row["tlg_group_logo"])}}" alt="" />
		                            @else
		                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> 
		                            @endif
		                            </div>
		                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
		                            <div>
		                                <span class="btn default btn-file">
		                                    <span class="fileinput-new"> Select image </span>
		                                    <span class="fileinput-exists"> Change </span>
		                                    <input type="file" name="tlg_group_logo" id="tlg_group_logo"> </span>
		                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
		                            </div>
		                        </div>
											  		
									@if ($errors->has("tlg_group_logo"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_group_logo") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_group_member_no') ? 'has-error' : '' }}  " >
												<label for="Number of Self-Reliant Groups" class=" control-label col-xs-12 col-md-4 text-left"> Number of Self-Reliant Groups <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_group_member_no' id='tlg_group_member_no' value='{{ $row['tlg_group_member_no'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_group_member_no"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_group_member_no") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_group_name') ? 'has-error' : '' }}  " >
												<label for="Tlg Group Name" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Group Name <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_group_name' id='tlg_group_name' value='{{ $row['tlg_group_name'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_group_name"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_group_name") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_group_name_mm') ? 'has-error' : '' }}  " >
												<label for="Tlg Group Name Mm" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Group Name Mm <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_group_name_mm' id='tlg_group_name_mm' value='{{ $row['tlg_group_name_mm'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_group_name_mm"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_group_name_mm") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_group_other_member_no') ? 'has-error' : '' }}  " >
												<label for="Women Self-Reliant Group Members" class=" control-label col-xs-12 col-md-4 text-left"> Women Self-Reliant Group Members <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_group_other_member_no' id='tlg_group_other_member_no' value='{{ $row['tlg_group_other_member_no'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_group_other_member_no"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_group_other_member_no") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group   " >
												<label for="Tlg Leader Fb Link" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Leader Fb Link </label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_leader_fb_link' id='tlg_leader_fb_link' value='{{ $row['tlg_leader_fb_link'] }}'    class='form-control ' />
											  		
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_leader_img') ? 'has-error' : '' }}  " >
												<label for="Tlg Leader Img" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Leader Img <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<div class="form-control fileinput fileinput-new @if($row['tlg_leader_img'] =='') required @endif " data-provides="fileinput" style="border: none;">
		                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
		                            @if(file_exists('.authors_photo/'.$row['tlg_leader_img']) && $row['tlg_leader_img'] !='')
		                            	<img src="{{asset('.authors_photo/'.$row["tlg_leader_img"])}}" alt="" />
		                            @else
		                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> 
		                            @endif
		                            </div>
		                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
		                            <div>
		                                <span class="btn default btn-file">
		                                    <span class="fileinput-new"> Select image </span>
		                                    <span class="fileinput-exists"> Change </span>
		                                    <input type="file" name="tlg_leader_img" id="tlg_leader_img"> </span>
		                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
		                            </div>
		                        </div>
											  		
									@if ($errors->has("tlg_leader_img"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_leader_img") }}</strong>
							            </span>
						            @endif
											  		<span class="help-block">full http links</span> 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_leader_name') ? 'has-error' : '' }}  " >
												<label for="Tlg Leader Name Eng" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Leader Name Eng <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_leader_name' id='tlg_leader_name' value='{{ $row['tlg_leader_name'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_leader_name"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_leader_name") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_leader_name_mm') ? 'has-error' : '' }}  " >
												<label for="Tlg Leader Name Mm" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Leader Name Mm <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_leader_name_mm' id='tlg_leader_name_mm' value='{{ $row['tlg_leader_name_mm'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_leader_name_mm"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_leader_name_mm") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_leader_ph') ? 'has-error' : '' }}  " >
												<label for="Tlg Leader Ph" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Leader Ph <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_leader_ph' id='tlg_leader_ph' value='{{ $row['tlg_leader_ph'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_leader_ph"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_leader_ph") }}</strong>
							            </span>
						            @endif
											  		<span class="help-block">Normal Phone number of TLG leader</span> 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_leader_role') ? 'has-error' : '' }}  " >
												<label for="Tlg Leader Role" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Leader Role <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_leader_role' id='tlg_leader_role' value='{{ $row['tlg_leader_role'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_leader_role"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_leader_role") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('tlg_member_ph_no') ? 'has-error' : '' }}  " >
												<label for="Tlg Member Ph No" class=" control-label col-xs-12 col-md-4 text-left"> Tlg Member Ph No <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='tlg_member_ph_no' id='tlg_member_ph_no' value='{{ $row['tlg_member_ph_no'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("tlg_member_ph_no"))
										<span class="help-block">
							                <strong>{{ $errors->first("tlg_member_ph_no") }}</strong>
							            </span>
						            @endif
											  		<span class="help-block">For Viber Number</span> 
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
                            <button type="button" onclick="location.href='{{ URL::to('tlgprofiles?return='.$return) }}' " class="btn red "><i class="fa fa-close "></i> {{ Lang::get('core.sb_cancel') }} </button>
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
         
        
    });
</script>
@endsection
@stop