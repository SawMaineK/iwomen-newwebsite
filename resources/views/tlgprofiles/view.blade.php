@extends('layouts.main') @section('content')
<div class="page-content row">
    <!-- Page header -->
    @include('layouts.breadcrumb')
    <div class="page-content-wrapper m-t">

        <div class="portlet light bordered animated fadeInUp ">
        	<div class="portlet-title hidden-xs">
                @if(isset($pageTitle) && isset($pageAction))
                <div class="caption">
                    <i class="fa fa-map-pin font-blue-sharp"></i><span class="caption-subject font-blue-sharp bold uppercase">{{ $pageTitle }} : <small> {{ $pageAction }}</small></span>
                </div>
                @endif
                <div class="actions ">
            		<a href="{{ url('tlgprofiles?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a> @if($access['is_add'] ==1)
                    <a href="{{ url('tlgprofiles/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a> @endif
                    <a href="{{ ($prevnext['prev'] != '' ? url('tlgprofiles/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"><i class="fa fa-arrow-left"></i>  </a>
                    <a href="{{ ($prevnext['next'] != '' ? url('tlgprofiles/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"> <i class="fa fa-arrow-right"></i> </a>
                    @if(Session::get('gid') ==1)
                    <a href="{{ URL::to('http://developers.myapibox.com/core/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}"><i class="fa  fa-ellipsis-v"></i></a> @endif
                </div>
            </div>
            <div class="portlet-body">

                <table class="table table-striped table-bordered">
                    <tbody>
                        
					<tr>
						<td width='30%' class='label-view text-right'>Id</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>ObjectId</td>
						<td>{{ $row->objectId}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Is Leader</td>
						<td>{{ $row->is_leader}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Group Address</td>
						<td>{{ $row->tlg_group_address}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Group Address Mm</td>
						<td>{{ $row->tlg_group_address_mm}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Group Key Activity</td>
						<td>{{ $row->tlg_group_key_activity}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Group Key Activity Mm</td>
						<td>{{ $row->tlg_group_key_activity_mm}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Group Key Skills</td>
						<td>{{ $row->tlg_group_key_skills}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Group Key Skills Mm</td>
						<td>{{ $row->tlg_group_key_skills_mm}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Group Lat Address</td>
						<td>{{ $row->tlg_group_lat_address}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Group Lng Address</td>
						<td>{{ $row->tlg_group_lng_address}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Group Logo</td>
						<td>{{ $row->tlg_group_logo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Group Member No</td>
						<td>{{ $row->tlg_group_member_no}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Group Name</td>
						<td>{{ $row->tlg_group_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Group Name Mm</td>
						<td>{{ $row->tlg_group_name_mm}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Group Other Member No</td>
						<td>{{ $row->tlg_group_other_member_no}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Leader Fb Link</td>
						<td>{{ $row->tlg_leader_fb_link}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Leader Img</td>
						<td>{{ $row->tlg_leader_img}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Leader Name</td>
						<td>{{ $row->tlg_leader_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Leader Name Mm</td>
						<td>{{ $row->tlg_leader_name_mm}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Leader Ph</td>
						<td>{{ $row->tlg_leader_ph}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Leader Role</td>
						<td>{{ $row->tlg_leader_role}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Member Ph</td>
						<td>{{ $row->tlg_member_ph}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tlg Member Ph No</td>
						<td>{{ $row->tlg_member_ph_no}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Created At</td>
						<td>{{ $row->created_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Updated At</td>
						<td>{{ $row->updated_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Deleted At</td>
						<td>{{ $row->deleted_at}} </td>
						
					</tr>
				
                    </tbody>
                </table>

                

            </div>
        </div>

    </div>
</div>

@stop