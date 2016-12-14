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
           {!! Form::open(array('url'=>'beinspiredpost/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!} 
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
											<label for="AudioFile" class=" control-label col-md-4 text-left"> AudioFile </label>
											<div class="col-md-7">
										  		<input type='text' name='audioFile' id='audioFile' value='{{ $row['audioFile'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="AuthorId" class=" control-label col-md-4 text-left"> AuthorId </label>
											<div class="col-md-7">
										  		<select name='authorId' rows='5' id='authorId' class='form-control select2 '                                       ></select> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Comment Count" class=" control-label col-md-4 text-left"> Comment Count </label>
											<div class="col-md-7">
										  		<input type='text' name='comment_count' id='comment_count' value='{{ $row['comment_count'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Week Content" class=" control-label col-md-4 text-left"> Week Content </label>
											<div class="col-md-7">
										  		
						<?php $week_content = explode(",",$row['week_content']); ?>
							<label class='checked checkbox-inline'>   
							<input type='checkbox' name='week_content[]' value ='1'                                       class='' 
							@if(in_array('1',$week_content))checked @endif 
					 /> Week Content Yes 
							 </label> 
							<label class='checked checkbox-inline'>   
							<input type='checkbox' name='week_content[]' value ='0'                                       class='' 
							@if(in_array('0',$week_content))checked @endif 
					 />  
							 </label>  
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Content" class=" control-label col-md-4 text-left"> Content </label>
											<div class="col-md-7">
										  		
						<textarea name='content' rows='5' id='content' class='form-control '   >{{ $row['content'] }}</textarea>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="ContentType" class=" control-label col-md-4 text-left"> ContentType </label>
											<div class="col-md-7">
										  		
							<?php $contentType = explode(',',$row['contentType']);
							$contentType_opt = array( 'Letter' => 'Letter' ,  'Video' => 'Video' ,  'Audio' => 'Audio' , ); ?>
					
									<select name='contentType' rows='5'   class='form-control select2 ' id='contentType'  > 
									<?php 
										foreach($contentType_opt as $key=>$val)
										{
											echo "<option  value ='$key' ".($row['contentType'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
										}						
										?>

									</select>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Content Mm" class=" control-label col-md-4 text-left"> Content Mm </label>
											<div class="col-md-7">
										  		
						<textarea name='content_mm' rows='5' id='content_mm' class='form-control '   >{{ $row['content_mm'] }}</textarea>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Credit Link" class=" control-label col-md-4 text-left"> Credit Link </label>
											<div class="col-md-7">
										  		<input type='text' name='credit_link' id='credit_link' value='{{ $row['credit_link'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Credit Link Mm" class=" control-label col-md-4 text-left"> Credit Link Mm </label>
											<div class="col-md-7">
										  		<input type='text' name='credit_link_mm' id='credit_link_mm' value='{{ $row['credit_link_mm'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Credit Logo Url" class=" control-label col-md-4 text-left"> Credit Logo Url </label>
											<div class="col-md-7">
										  		
							<input type='file' name='credit_logo_url' id='credit_logo_url' @if($row['credit_logo_url'] =='') class='required' @endif 
							style='width:150px !important;'                                      />
						 	<div >
								
								{!! SiteHelpers::showUploadedFile($row['credit_logo_url'],'credit_logo') !!}
							
							</div>					
							 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Credit Name" class=" control-label col-md-4 text-left"> Credit Name </label>
											<div class="col-md-7">
										  		<input type='text' name='credit_name' id='credit_name' value='{{ $row['credit_name'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Credit Name Mm" class=" control-label col-md-4 text-left"> Credit Name Mm </label>
											<div class="col-md-7">
										  		<input type='text' name='credit_name_mm' id='credit_name_mm' value='{{ $row['credit_name_mm'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Image" class=" control-label col-md-4 text-left"> Image </label>
											<div class="col-md-7">
										  		
							<input type='file' name='image' id='image' @if($row['image'] =='') class='required' @endif 
							style='width:150px !important;'                                      />
						 	<div >
								
								{!! SiteHelpers::showUploadedFile($row['image'],'posts_photo') !!}
							
							</div>					
							 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="IsAllow" class=" control-label col-md-4 text-left"> IsAllow </label>
											<div class="col-md-7">
										  		
							<label class='radio radio-inline'>
							<input type='radio' name='isAllow' value ='1'                                      
							@if($row['isAllow'] == '1') checked="checked" @endif > Show </label>
							<label class='radio radio-inline'>
							<input type='radio' name='isAllow' value ='0'                                      
							@if($row['isAllow'] == '0') checked="checked" @endif > Not Show </label> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Likes" class=" control-label col-md-4 text-left"> Likes </label>
											<div class="col-md-7">
										  		<input type='text' name='likes' id='likes' value='{{ $row['likes'] }}'                                        class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="PostUploadName" class=" control-label col-md-4 text-left"> PostUploadName </label>
											<div class="col-md-7">
										  		<select name='postUploadName' rows='5' id='postUploadName' class='form-control select2 '                                       ></select> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="PostUploadNameMM" class=" control-label col-md-4 text-left"> PostUploadNameMM </label>
											<div class="col-md-7">
										  		<input type='text' name='postUploadNameMM' id='postUploadNameMM' value='{{ $row['postUploadNameMM'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="PostUploadPersonImg" class=" control-label col-md-4 text-left"> PostUploadPersonImg </label>
											<div class="col-md-7">
										  		<input type='text' name='postUploadPersonImg' id='postUploadPersonImg' value='{{ $row['postUploadPersonImg'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="PostUploadUserImgPath" class=" control-label col-md-4 text-left"> PostUploadUserImgPath </label>
											<div class="col-md-7">
										  		
							<input type='file' name='postUploadUserImgPath' id='postUploadUserImgPath' @if($row['postUploadUserImgPath'] =='') class='required' @endif 
							style='width:150px !important;'                                      />
						 	<div >
								
								{!! SiteHelpers::showUploadedFile($row['postUploadUserImgPath'],'users_photo') !!}
							
							</div>					
							 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="PostUploadedDate" class=" control-label col-md-4 text-left"> PostUploadedDate </label>
											<div class="col-md-7">
										  		
						<div class="input-group m-b" style="width:150px !important;">
							{!! Form::text('postUploadedDate', $row['postUploadedDate'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Post Author Role" class=" control-label col-md-4 text-left"> Post Author Role </label>
											<div class="col-md-7">
										  		<select name='post_author_role' rows='5' id='post_author_role' class='form-control select2 '                                       ></select> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Post Author Role Mm" class=" control-label col-md-4 text-left"> Post Author Role Mm </label>
											<div class="col-md-7">
										  		<select name='post_author_role_mm' rows='5' id='post_author_role_mm' class='form-control select2 '                                       ></select> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Share Count" class=" control-label col-md-4 text-left"> Share Count </label>
											<div class="col-md-7">
										  		<input type='text' name='share_count' id='share_count' value='{{ $row['share_count'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Suggest Section Eng" class=" control-label col-md-4 text-left"> Suggest Section Eng </label>
											<div class="col-md-7">
										  		<input type='text' name='suggest_section_eng' id='suggest_section_eng' value='{{ $row['suggest_section_eng'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Title" class=" control-label col-md-4 text-left"> Title </label>
											<div class="col-md-7">
										  		<input type='text' name='title' id='title' value='{{ $row['title'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="TitleMm" class=" control-label col-md-4 text-left"> TitleMm </label>
											<div class="col-md-7">
										  		<input type='text' name='titleMm' id='titleMm' value='{{ $row['titleMm'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="UserId" class=" control-label col-md-4 text-left"> UserId </label>
											<div class="col-md-7">
										  		<select name='userId' rows='5' id='userId' class='form-control select2 '                                       ></select> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="VideoId" class=" control-label col-md-4 text-left"> VideoId </label>
											<div class="col-md-7">
										  		<input type='text' name='videoId' id='videoId' value='{{ $row['videoId'] }}'    class='form-control ' /> 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Created At" class=" control-label col-md-4 text-left"> Created At </label>
											<div class="col-md-7">
										  		
						<div class="input-group m-b" style="width:150px !important;">
							{!! Form::text('created_at', $row['created_at'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Updated At" class=" control-label col-md-4 text-left"> Updated At </label>
											<div class="col-md-7">
										  		
						<div class="input-group m-b" style="width:150px !important;">
							{!! Form::text('updated_at', $row['updated_at'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
										<div class="form-group  " >
											<label for="Deleted At" class=" control-label col-md-4 text-left"> Deleted At </label>
											<div class="col-md-7">
										  		
						<div class="input-group m-b" style="width:150px !important;">
							{!! Form::text('deleted_at', $row['deleted_at'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
 
										 	</div> 
										 	<div class="col-md-1">
										 		
										 	</div>
									  	</div> 
					</div> 
                </div>

                

                    
                <div class="row">
                    <div class="form-actions">
                        <div class="col-md-offset-4 col-md-8">
                            <button type="submit" name="apply" class="btn btn-info"><i class="fa fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
                            <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save"></i> {{ Lang::get('core.sb_save') }}</button>
                            <button type="button" onclick="location.href='{{ URL::to('beinspiredpost?return='.$return) }}' " class="btn red "><i class="fa fa-close "></i> {{ Lang::get('core.sb_cancel') }} </button>
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
         
        
		$("#authorId").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:id:authorName') !!}",
		{  selected_value : '{{ $row["authorId"] }}' });
		
		$("#postUploadName").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:id:authorName') !!}",
		{  selected_value : '{{ $row["postUploadName"] }}' });
		
		$("#post_author_role").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:authorTitleEng:authorTitleEng') !!}",
		{  selected_value : '{{ $row["post_author_role"] }}' });
		
		$("#post_author_role_mm").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:authorTitleMM:authorTitleMM') !!}",
		{  selected_value : '{{ $row["post_author_role_mm"] }}' });
		
		$("#userId").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:objectId:authorName') !!}",
		{  selected_value : '{{ $row["userId"] }}' });
		

        $('.removeMultiFiles').on('click', function() {
            var removeUrl = '{{ url("beinspiredpost/removefiles?file=")}}' + $(this).attr('url');
            $(this).parent().remove();
            $.get(removeUrl, function(response) {});
            $(this).parent('div').empty();
            return false;
        });

    });
</script>
@endsection
@stop