@extends('layouts.main') @section('content')

<div class="page-content row">
    <!-- Page header -->
    @include('layouts.breadcrumb')
    <div class="page-content-wrapper m-t">

        {!! Form::open(array('url'=>'beinspiredpost/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!} 
        <div class="portlet light bordered animated fadeInUp ">
            <div class="portlet-title">
                @if(isset($pageTitle) && isset($pageAction))
                <div class="caption">
                    <i class="icon-envelope font-blue-sharp"></i><span class="caption-subject font-blue-sharp bold uppercase">{{ $pageTitle }} : <small> {{ $pageAction }}</small></span>
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
                    @include('beinspiredpost.fields')
                </div>
                
                <div class="row">
                    <div class="form-actions">
                        <div class="col-md-offset-4 col-md-8">
                            <button type="submit" name="apply" class="btn btn-info hidden-xs"><i class="fa fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
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
         
        
		$("#authorId").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:objectId:authorName') !!}",
		{  selected_value : '{{ $row["authorId"] }}' });
		
		$("#postUploadName").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:authorName:authorName') !!}",
		{  selected_value : '{{ $row["postUploadName"] }}' });
		
		$("#postUploadNameMM").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:authorNameMM:authorNameMM') !!}",
		{  selected_value : '{{ $row["postUploadNameMM"] }}' });
		
		$("#postUploadUserImgPath").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:authorImg:authorName') !!}",
		{  selected_value : '{{ $row["postUploadUserImgPath"] }}' });
		
		$("#post_author_role").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:authorTitleEng:authorTitleEng') !!}",
		{  selected_value : '{{ $row["post_author_role"] }}' });
		
		$("#post_author_role_mm").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:authorTitleMM:authorTitleMM') !!}",
		{  selected_value : '{{ $row["post_author_role_mm"] }}' });
		
		$("#userId").jCombo("{!! url('beinspiredpost/comboselect?filter=authors:objectId:authorName') !!}",
		{  selected_value : '{{ $row["userId"] }}' });
		
    });
</script>
@endsection
@stop