@extends('layouts.main') @section('content')

<div class="page-content row">

	@include('layouts.breadcrumb')

    <div class="page-content-wrapper">

        {!! Form::open(array('url'=>'user/groups/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
        @if(count($errors->all()) > 0)
        <div class="note note-danger">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <div class="portlet light bordered animated fadeInRight">
            
			<div class="portlet-title">
                @if(isset($pageTitle) && isset($pageNote))
                <div class="caption">
                    <i class="fa fa-table font-blue-sharp"></i>
                    <span class="caption-subject font-blue-sharp bold uppercase">{{ $pageTitle }} : <small> {{ $pageNote }}</small></span>
                </div>
                @endif
                <div class="actions">
                    <button type="submit" name="apply" class="btn btn-info btn-sm"><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
                        <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
                        <button type="button" onclick="location.href='{{ URL::to('user/groups?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i> {{ Lang::get('core.sb_cancel') }} </button>
                </div>
            </div>                
            <div class="portlet-body row">

                <div class="col-md-12">
                    <div class="form-group hidethis " style="display:none;">
                        <label for="Group Id" class=" control-label col-md-4 text-left"> Group Id </label>
                        <div class="col-md-6">
                            {!! Form::text('group_id', $row['group_id'],array('class'=>'form-control', 'placeholder'=>'', )) !!}
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="form-group  ">
                        <label for="Name" class=" control-label col-md-4 text-left"> Name <span class="asterix"> * </span></label>
                        <div class="col-md-6">
                            {!! Form::text('name', $row['name'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true' )) !!}
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="form-group  ">
                        <label for="Description" class=" control-label col-md-4 text-left"> Description </label>
                        <div class="col-md-6">
                            <textarea name='description' rows='2' id='description' class='form-control '>{{ $row['description'] }}</textarea>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="form-group  ">
                        <label for="Level" class=" control-label col-md-4 text-left"> Level <span class="asterix"> * </span></label>
                        <div class="col-md-6">
                            {!! Form::text('level', $row['level'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true' )) !!}
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    	{!! Form::close() !!}
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

    });
</script>
@stop