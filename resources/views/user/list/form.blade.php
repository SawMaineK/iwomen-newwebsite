@extends('layouts.main') @section('content')

<div class="page-content row">

    @include('layouts.breadcrumb')

    <div class="page-content-wrapper">

        {!! Form::open(array('url'=>'user/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
        <div class="portlet light bordered animated fadeInUp">
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
                    <button type="button" onclick="location.href='{{ URL::to('user?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i> {{ Lang::get('core.sb_cancel') }} </button>
                </div>
            </div>
            <div class="portlet-body row">
                @if(count($errors->all()) > 0)
                <div class="note note-danger">
                    @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
                @endif

                <div class="col-md-6">

                    <div class="form-group hidethis " style="display:none;">
                        <label for="Id" class=" control-label col-md-4 text-left"> Id </label>
                        <div class="col-md-6">
                            {!! Form::text('id', $row['id'],array('class'=>'form-control', 'placeholder'=>'', )) !!}
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="form-group  ">
                        <label for="Group / Level" class=" control-label col-md-4 text-left"> Group / Level <span class="asterix"> * </span></label>
                        <div class="col-md-6">
                            <select name='group_id' rows='5' id='group_id' code='{$group_id}' class='form-control' required></select>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="form-group  ">
                        <label for="Username" class=" control-label col-md-4 text-left"> Username <span class="asterix"> * </span></label>
                        <div class="col-md-6">
                            {!! Form::text('username', $row['username'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true' )) !!}
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="form-group  ">
                        <label for="First Name" class=" control-label col-md-4 text-left"> First Name <span class="asterix"> * </span></label>
                        <div class="col-md-6">
                            {!! Form::text('first_name', $row['first_name'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true' )) !!}
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="form-group  ">
                        <label for="Last Name" class=" control-label col-md-4 text-left"> Last Name </label>
                        <div class="col-md-6">
                            {!! Form::text('last_name', $row['last_name'],array('class'=>'form-control', 'placeholder'=>'', )) !!}
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="form-group  ">
                        <label for="Email" class=" control-label col-md-4 text-left"> Email <span class="asterix"> * </span></label>
                        <div class="col-md-6">
                            {!! Form::text('email', $row['email'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true', 'parsley-type'=>'email' )) !!}
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>

                    <div class="form-group  ">
                        <label for="Status" class=" control-label col-md-4 text-left"> Status <span class="asterix"> * </span></label>
                        <div class="col-md-6">

                            <label class='radio radio-inline'>
                                <input type='radio' name='active' value='0' required @if($row[ 'active']=='0' ) checked="checked" @endif> Inactive </label>
                            <label class='radio radio-inline'>
                                <input type='radio' name='active' value='1' required @if($row[ 'active']=='1' ) checked="checked" @endif> Active </label>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>

                    <div class="form-group  ">
                        <label for="Avatar" class=" control-label col-md-4 text-left"> Avatar </label>
                        <div class="col-md-6">
                            <input type='file' name='avatar' id='avatar' @if($row[ 'avatar']=='' ) class='required' @endif style='width:150px !important;' />
                            <div>
                                {!! SiteHelpers::showUploadedFile($row['avatar'],'/uploads/users/') !!}

                            </div>

                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="ipt" class=" control-label col-md-4 text-left"> </label>
                        <div class="col-md-8">
                            @if($row['id'] !='') {{ Lang::get('core.notepassword') }} @else Create Password @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ipt" class=" control-label col-md-4"> {{ Lang::get('core.newpassword') }} </label>
                        <div class="col-md-8">
                            <input name="password" type="password" id="password" class="form-control input-sm" value="" @if($row[ 'id']=='' ) required @endif />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ipt" class=" control-label col-md-4"> {{ Lang::get('core.conewpassword') }} </label>
                        <div class="col-md-8">
                            <input name="password_confirmation" type="password" id="password_confirmation" class="form-control input-sm" value="" @if($row[ 'id']=='' ) required @endif />
                        </div>
                    </div>

                </div>

            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@section('page_scripts')
<script type="text/javascript">
    $(document).ready(function() {

        $("#group_id").jCombo("{{ URL::to('user/comboselect?filter=tb_groups:group_id:name') }}", {
            selected_value: '{{ $row["group_id"] }}'
        });

    });
</script>
@endsection @stop