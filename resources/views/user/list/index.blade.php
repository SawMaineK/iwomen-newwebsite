@extends('layouts.main') @section('content')
<?php usort($tableGrid, "SiteHelpers::_sort") ?>
    <div class="page-content">
        @include('layouts.breadcrumb')
        <div class="portlet light bordered page-content-wrapper">

            <ul class="nav nav-tabs" style="margin-bottom:10px;">
                <li class="active"><a href="{{ URL::to('user')}}"><i class="fa fa-user"></i> Users </a></li>
                <li><a href="{{ URL::to('user/groups')}}"><i class="fa fa-users"></i> Groups</a></li>
                <li class=""><a href="{{ URL::to('user/blast')}}"><i class="fa fa-envelope"></i> Send Email </a></li>
            </ul>

            <div class="portlet light bordered animated fadeInUp ">
                <div class="portlet-title">
                    @if(isset($pageTitle) && isset($pageNote))
                    <div class="caption">
                        <i class="icon-social-dribbble font-blue-sharp"></i>
                        <span class="caption-subject font-blue-sharp bold uppercase">{{ $pageTitle }} : <small> {{ $pageNote }}</small></span>
                    </div>
                    @endif
                    <div class="actions">
                        @if($access['is_add'] ==1)
                        <a href="{{ URL::to('user/update') }}" class="tips btn btn-sm btn-default" title="{{ Lang::get('core.btn_create') }}">
                            <i class="fa  fa-plus "></i></a>
                        @endif @if($access['is_remove'] ==1)
                        <a href="javascript://ajax" onclick="SximoDelete();" class="tips btn btn-sm btn-default" title="{{ Lang::get('core.btn_remove') }}">
                            <i class="fa fa-trash-o"></i></a>
                        @endif @if($access['is_excel'] ==1)
                        <a href="{{ URL::to('user/download') }}" class="tips btn btn-sm btn-default" title="{{ Lang::get('core.btn_download') }}">
                            <i class="fa fa-cloud-download"></i></a>
                        @endif
                        <a href="{{ URL::to( 'user/search') }}" class="btn btn-sm btn-default" onclick="SximoModal(this.href,'Advance Search'); return false;"><i class="fa fa-search"></i> </a>

                        <a href="{{ url('user') }}" class="btn btn-sm btn-default tips" title="Clear Search"><i class="fa fa-spinner"></i></a>
                    </div>
                </div>

                <div class="portlet-body">
                    {!! Form::open(array('url'=>'user/delete/', 'class'=>'form-horizontal' ,'id' =>'SximoTable' )) !!}
                    <div class="table-responsive" style="min-height:300px;">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th class="number"> No </th>
                                    <th>
                                        <input type="checkbox" class="checkall" />
                                    </th>

                                    @foreach ($tableGrid as $t) @if($t['view'] =='1')
                                    <th>{{ $t['label'] }}</th>
                                    @endif @endforeach
                                    <th width="100">{{ Lang::get('core.btn_action') }}</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($rowData as $row)
                                <tr>
                                    <td width="30"> {{ ++$i }} </td>
                                    <td width="50">
                                        <input type="checkbox" class="ids" name="ids[]" value="{{ $row->id }}" /> </td>
                                    @foreach ($tableGrid as $field) @if($field['view'] =='1')
                                    <td>
                                        @if($field['field'] == 'avatar')
                                        <?php if( file_exists( './uploads/users/'.$row->avatar) && $row->avatar !='') { ?>
                                            <img src="{{ URL::to('uploads/users').'/'.$row->avatar }} " border="0" width="40" class="img-circle" />
                                            <?php  } else { ?>
                                                <img alt="" src="http://www.gravatar.com/avatar/{{ md5($row->email) }}" width="40" class="img-circle" />
                                                <?php } ?>
                                                    @elseif($field['field'] =='active') {!! ($row->active ==1 ? '
                                                    <lable class="label label-success">Active</label>' : '
                                                        <lable class="label label-danger">Inactive</label>') !!} @else
                                                            <?php $conn = (isset($field['conn']) ? $field['conn'] : array() ) ?>
                                                                {!! SiteHelpers::gridDisplay($row->{$field['field']},$field['field'],$conn) !!} @endif
                                    </td>
                                    @endif @endforeach
                                    <td>
                                        @if($access['is_detail'] ==1)
                                        <a href="{{ URL::to('user/show/'.$row->id.'?return='.$return)}}" class="tips btn btn-xs btn-white" title="{{ Lang::get('core.btn_view') }}"><i class="fa  fa-search "></i></a> @endif @if($access['is_edit'] ==1)
                                        <a href="{{ URL::to('user/update/'.$row->id.'?return='.$return) }}" class="tips btn btn-xs btn-white" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit "></i></a> @endif

                                    </td>
                                </tr>

                                @endforeach

                            </tbody>

                        </table>
                        <input type="hidden" name="md" value="" />
                    </div>
                    {!! Form::close() !!} @include('footer')
                </div>
            </div>
        </div>
    </div>
    @section('page_scripts')
    <script>
        $(document).ready(function() {

            $('.do-quick-search').click(function() {
                $('#SximoTable').attr('action', '{{ URL::to("user/multisearch")}}');
                $('#SximoTable').submit();
            });

        });
    </script>
    @endsection @stop