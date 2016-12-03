@extends('layouts.main') @section('content')
<div class="page-content row">
	@include('layouts.breadcrumb')
    <div class="page-content-wrapper">

        <div class="portlet light bordered animated fadeInRight">
            <div class="portlet-title">
                @if(isset($pageTitle) && isset($pageNote))
                <div class="caption">
                    <i class="fa fa-table font-blue-sharp"></i>
                    <span class="caption-subject font-blue-sharp bold uppercase">{{ $pageTitle }} : <small> {{ $pageNote }}</small></span>
                </div>
                @endif
                <div class="actions">
            		<a href="{{ URL::to('user?return='.$return) }}" class="tips btn btn-sm btn-primary red" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a> @if($access['is_add'] ==1)
            		<a href="{{ URL::to('user/update/'.$id.'?return='.$return) }}" class="tips btn btn-primary btn-sm green " title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a> @endif
                </div>
            </div>  
            <div class="portlet-body">

                <table class="table table-striped table-bordered">
                    <tbody>

                        <tr>
                            <td width='30%' class='label-view text-right'>Avatar</td>
                            <td>
                                <?php if( file_exists( './uploads/users/'.$row->avatar) && $row->avatar !='') { ?>
                                    <img src="{{ URL::to('uploads/users').'/'.$row->avatar }} " border="0" width="40" class="img-circle" />
                                    <?php  } else { ?>
                                        <img alt="" src="http://www.gravatar.com/avatar/{{ md5($row->email) }}" width="40" class="img-circle" />
                                        <?php } ?>
                            </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Group</td>
                            <td>{{ SiteHelpers::gridDisplayView($row->group_id,'group_id','1:tb_groups:group_id:name') }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Username</td>
                            <td>{{ $row->username }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>First Name</td>
                            <td>{{ $row->first_name }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Last Name</td>
                            <td>{{ $row->last_name }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Email</td>
                            <td>{{ $row->email }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Created At</td>
                            <td>{{ $row->created_at }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Last Login</td>
                            <td>{{ $row->last_login }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Updated At</td>
                            <td>{{ $row->updated_at }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Active</td>
                            <td>{!! ($row->active ==1 ? '
                                <lable class="label label-success">Active</label>' : '
                                    <lable class="label label-danger">Inactive</label>') !!} </td>

                        </tr>

                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>

@stop