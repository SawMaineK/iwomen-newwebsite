@extends('layouts.main') @section('content')

<div class="page-content row">
    <!-- Page header -->
    @include('layouts.breadcrumb')
    <div class="page-content-wrapper m-t">

        <div class="portlet light bordered animated fadeInUp ">
        	<div class="portlet-title">
                @if(isset($pageTitle) && isset($pageNote))
                <div class="caption">
                    <i class="icon-layers font-blue-sharp"></i>
                    <span class="caption-subject font-blue-sharp bold uppercase">{{ $pageTitle }} : <small> {{ $pageNote }}</small></span>
                </div>
                @endif
                <div class="actions">
                    <a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a>
                    @if(Session::get('gid') ==1)
                    <a href="{{ URL::to('http://developers.myapibox.com/sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}"><i class="fa  fa-ellipsis-v"></i></a> @endif
                </div>
            </div>
           {!! Form::open(array('url'=>'author/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!} 
            <div class="portlet-body">

                <div class="row">
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
                </div>

                

                    
                <div class="row">
                    <div class="form-actions">
                        <div class="col-md-offset-4 col-md-8">
                            <button type="submit" name="apply" class="btn btn-info"><i class="icon-checkmark-circle2"></i> {{ Lang::get('core.sb_apply') }}</button>
                            <button type="submit" name="submit" class="btn btn-success"><i class="icon-bubble-check"></i> {{ Lang::get('core.sb_save') }}</button>
                            <button type="button" onclick="location.href='{{ URL::to('author?return='.$return) }}' " class="btn red "><i class="icon-cancel-circle2 "></i> {{ Lang::get('core.sb_cancel') }} </button>
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
         
        

        $('.removeMultiFiles').on('click', function() {
            var removeUrl = '{{ url("author/removefiles?file=")}}' + $(this).attr('url');
            $(this).parent().remove();
            $.get(removeUrl, function(response) {});
            $(this).parent('div').empty();
            return false;
        });

    });
</script>
@endsection
@stop