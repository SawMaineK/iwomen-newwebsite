

		 {!! Form::open(array('url'=>'author/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

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

											<div class="form-group {{ $errors->has('authorImg') ? 'has-error' : '' }}  " >
												<label for="AuthorImg" class=" control-label col-xs-12 col-md-4 text-left"> AuthorImg <span class="asterix"> * </span></label>
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
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('authorInfoEng') ? 'has-error' : '' }}  " >
												<label for="AuthorInfoEng" class=" control-label col-xs-12 col-md-4 text-left"> AuthorInfoEng <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		
						<textarea name='authorInfoEng' rows='5' id='authorInfoEng' class='form-control ' required  >{{ $row['authorInfoEng'] }}</textarea>

											  		
									@if ($errors->has("authorInfoEng"))
										<span class="help-block">
							                <strong>{{ $errors->first("authorInfoEng") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('authorInfoMM') ? 'has-error' : '' }}  " >
												<label for="AuthorInfoMM" class=" control-label col-xs-12 col-md-4 text-left"> AuthorInfoMM <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		
						<textarea name='authorInfoMM' rows='5' id='authorInfoMM' class='form-control ' required  >{{ $row['authorInfoMM'] }}</textarea>

											  		
									@if ($errors->has("authorInfoMM"))
										<span class="help-block">
							                <strong>{{ $errors->first("authorInfoMM") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('authorName') ? 'has-error' : '' }}  " >
												<label for="AuthorName" class=" control-label col-xs-12 col-md-4 text-left"> AuthorName <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='authorName' id='authorName' value='{{ $row['authorName'] }}' required   class='form-control ' />
											  		
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
												<label for="AuthorNameMM" class=" control-label col-xs-12 col-md-4 text-left"> AuthorNameMM <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='authorNameMM' id='authorNameMM' value='{{ $row['authorNameMM'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("authorNameMM"))
										<span class="help-block">
							                <strong>{{ $errors->first("authorNameMM") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('authorTitleEng') ? 'has-error' : '' }}  " >
												<label for="AuthorTitleEng" class=" control-label col-xs-12 col-md-4 text-left"> AuthorTitleEng <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='authorTitleEng' id='authorTitleEng' value='{{ $row['authorTitleEng'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("authorTitleEng"))
										<span class="help-block">
							                <strong>{{ $errors->first("authorTitleEng") }}</strong>
							            </span>
						            @endif
											  		 
											 	</div> 
											 	<div class="col-xs-12 col-md-1">
											 		
											 	</div>
										  	</div> 
											<div class="form-group {{ $errors->has('authorTitleMM') ? 'has-error' : '' }}  " >
												<label for="AuthorTitleMM" class=" control-label col-xs-12 col-md-4 text-left"> AuthorTitleMM <span class="asterix"> * </span></label>
												<div class="col-xs-12 col-md-7">
											  		<input type='text' name='authorTitleMM' id='authorTitleMM' value='{{ $row['authorTitleMM'] }}' required   class='form-control ' />
											  		
									@if ($errors->has("authorTitleMM"))
										<span class="help-block">
							                <strong>{{ $errors->first("authorTitleMM") }}</strong>
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