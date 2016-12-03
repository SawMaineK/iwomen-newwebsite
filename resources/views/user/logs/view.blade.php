@extends('layouts.main') @section('content')
<div class="page-content row">
	@include('layouts.breadcrumb')
    <!-- Page header -->

    <div class="page-content-wrapper">
        <div class="portlet light bordered animated fadeInRight">
            <div class="portlet-title">
                @if(isset($pageTitle) && isset($pageNote))
                <div class="caption">
                    <i class="icon-social-dribbble font-blue-sharp"></i>
                    <span class="caption-subject font-blue-sharp bold uppercase">{{ $pageTitle }} : <small> {{ $pageNote }}</small></span>
                </div>
                @endif
                <div class="actions">
                    <a href="{{ URL::to('core/logs?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a> @if($access['is_add'] ==1)
            		<a href="{{ URL::to('core/logs/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a> @endif
                </div>
            <div class="portlet-body">

                <table class="table table-striped table-bordered">
                    <tbody>

                        <tr>
                            <td width='30%' class='label-view text-right'>IPs</td>
                            <td>{{ $row->ipaddress }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Users</td>
                            <td>{{ SiteHelpers::gridDisplayView($row->user_id,'user_id','1:tb_users:id:first_name') }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Module</td>
                            <td>{{ $row->module }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Task</td>
                            <td>{{ $row->task }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Note</td>
                            <td>{{ $row->note }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Logdate</td>
                            <td>{{ $row->logdate }} </td>

                        </tr>

                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>

@stop