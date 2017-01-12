

		 {!! Form::open(array('url'=>'sisterdownloadapps/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

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

											<div class="form-group {{ $errors->has('app_name') ? 'has-error' : '' }}  " >
												<label for="App Name" class=" control-label col-xs-12 col-md-4 text-left"> App Name <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='app_name' id='app_name' value='{{ $row['app_name'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("app_name"))
										<span class="help-block">
							                <strong>{{ $errors->first("app_name") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('app_link') ? 'has-error' : '' }}  " >
												<label for="App Link" class=" control-label col-xs-12 col-md-4 text-left"> App Link <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='app_link' id='app_link' value='{{ $row['app_link'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("app_link"))
										<span class="help-block">
							                <strong>{{ $errors->first("app_link") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('app_package_name') ? 'has-error' : '' }}  " >
												<label for="App Package Name" class=" control-label col-xs-12 col-md-4 text-left"> App Package Name <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='app_package_name' id='app_package_name' value='{{ $row['app_package_name'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("app_package_name"))
										<span class="help-block">
							                <strong>{{ $errors->first("app_package_name") }}</strong>
							            </span>
						            @endif
											  		 
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
							@if($row['isAllow'] == '0') checked="checked" @endif > Dont Show </label>
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
											<div class="form-group {{ $errors->has('app_img') ? 'has-error' : '' }}  " >
												<label for="App Img" class=" control-label col-xs-12 col-md-4 text-left"> App Img <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<div class="form-control fileinput fileinput-new @if($row['app_img'] =='') required @endif " data-provides="fileinput" style="border: none;">
		                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
		                            @if(file_exists('.sister_app_photo/'.$row['app_img']) && $row['app_img'] !='')
		                            	<img src="{{asset('.sister_app_photo/'.$row["app_img"])}}" alt="" />
		                            @else
		                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> 
		                            @endif
		                            </div>
		                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
		                            <div>
		                                <span class="btn default btn-file">
		                                    <span class="fileinput-new"> Select image </span>
		                                    <span class="fileinput-exists"> Change </span>
		                                    <input type="file" name="app_img" id="app_img"> </span>
		                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
		                            </div>
		                        </div>
											  		
									@if ($errors->has("app_img"))
										<span class="help-block">
							                <strong>{{ $errors->first("app_img") }}</strong>
							            </span>
						            @endif
											  		 
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