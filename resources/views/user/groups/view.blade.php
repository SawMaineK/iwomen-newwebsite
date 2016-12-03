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
                    <a href="{{ URL::to('user/groups?return='.$return) }}" class="tips btn btn-sm btn-primary red" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a> @if($access['is_add'] ==1)
            		<a href="{{ URL::to('user/groups/update/'.$id.'?return='.$return) }}" class="tips btn btn-primary btn-sm green " title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a> @endif
                </div>
            </div>    
            <div class="portlet-body">

                <table class="table table-striped table-bordered">
                    <tbody>

                        <tr>
                            <td width='30%' class='label-view text-right'>ID</td>
                            <td>{{ $row->group_id }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Name</td>
                            <td>{{ $row->name }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Description</td>
                            <td>{{ $row->description }} </td>

                        </tr>

                        <tr>
                            <td width='30%' class='label-view text-right'>Level</td>
                            <td>{{ $row->level }} </td>

                        </tr>

                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>
@stop