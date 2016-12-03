

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

			
					<div class="col-md-12">
						{!! Form::hidden('id', $row['id']) !!}

						{!! Form::hidden('objectId', $row['objectId']) !!}

										<div class="form-group  " >
											<label for="Organization Name" class=" control-label col-md-4 text-left"> Organization Name </label>
											<div class="col-md-7">
										  		<input type='text' name='organization_name' id='organization_name' value='{{ $row['organization_name'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Organization Name Mm" class=" control-label col-md-4 text-left"> Organization Name Mm </label>
											<div class="col-md-7">
										  		<input type='text' name='organization_name_mm' id='organization_name_mm' value='{{ $row['organization_name_mm'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="AuthorImg" class=" control-label col-md-4 text-left"> AuthorImg </label>
											<div class="col-md-7">
										  		
							<input type='file' name='authorImg' id='authorImg' @if($row['authorImg'] =='') class='required' @endif 
							style='width:150px !important;'                                                                                                                                                                                                                          />
						 	<div >
								
								{!! SiteHelpers::showUploadedFile($row['authorImg'],'authors_photo') !!}
							
							</div>					
							 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="AuthorInfoEng" class=" control-label col-md-4 text-left"> AuthorInfoEng </label>
											<div class="col-md-7">
										  		
						<textarea name='authorInfoEng' rows='5' id='authorInfoEng' class='form-control '   >{{ $row['authorInfoEng'] }}</textarea>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="AuthorInfoMM" class=" control-label col-md-4 text-left"> AuthorInfoMM </label>
											<div class="col-md-7">
										  		
						<textarea name='authorInfoMM' rows='5' id='authorInfoMM' class='form-control '   >{{ $row['authorInfoMM'] }}</textarea>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="AuthorName" class=" control-label col-md-4 text-left"> AuthorName </label>
											<div class="col-md-7">
										  		<input type='text' name='authorName' id='authorName' value='{{ $row['authorName'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="AuthorNameMM" class=" control-label col-md-4 text-left"> AuthorNameMM </label>
											<div class="col-md-7">
										  		<input type='text' name='authorNameMM' id='authorNameMM' value='{{ $row['authorNameMM'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="AuthorTitleEng" class=" control-label col-md-4 text-left"> AuthorTitleEng </label>
											<div class="col-md-7">
										  		<input type='text' name='authorTitleEng' id='authorTitleEng' value='{{ $row['authorTitleEng'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="AuthorTitleMM" class=" control-label col-md-4 text-left"> AuthorTitleMM </label>
											<div class="col-md-7">
										  		<input type='text' name='authorTitleMM' id='authorTitleMM' value='{{ $row['authorTitleMM'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
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