@extends('layouts.main') @section('content')
<div class="page-content row">
    <!-- Page header -->
    @include('layouts.breadcrumb')
    <div class="page-content-wrapper m-t">

        <div class="portlet light bordered animated fadeInUp ">
        	<div class="portlet-title hidden-xs">
                @if(isset($pageTitle) && isset($pageAction))
                <div class="caption">
                    <i class="icon-tags font-blue-sharp"></i><span class="caption-subject font-blue-sharp bold uppercase">{{ $pageTitle }} : <small> {{ $pageAction }}</small></span>
                </div>
                @endif
                <div class="actions ">
            		<a href="{{ url('resource?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a> @if($access['is_add'] ==1)
                    <a href="{{ url('resource/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a> @endif
                    <a href="{{ ($prevnext['prev'] != '' ? url('resource/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"><i class="fa fa-arrow-left"></i>  </a>
                    <a href="{{ ($prevnext['next'] != '' ? url('resource/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"> <i class="fa fa-arrow-right"></i> </a>
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
						<td width='30%' class='label-view text-right'>Author Img Path</td>
						<td>{!! SiteHelpers::formatRows($row->author_img_path,$fields['author_img_path'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>IsAllow</td>
						<td>{{ $row->isAllow}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Likes</td>
						<td>{{ $row->likes}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Comment Count</td>
						<td>{{ $row->comment_count}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Share Count</td>
						<td>{{ $row->share_count}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Week Content</td>
						<td>{{ $row->week_content}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Author</td>
						<td>{{ SiteHelpers::formatLookUp($row->resource_author_id,'resource_author_id','1:authors:objectId:authorName') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Resource Author Name</td>
						<td>{{ $row->resource_author_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Resource Icon Img</td>
						<td>{!! SiteHelpers::formatRows($row->resource_icon_img,$fields['resource_icon_img'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Resource Title Eng</td>
						<td>{{ $row->resource_title_eng}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Resource Title Mm</td>
						<td>{{ $row->resource_title_mm}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Created At</td>
						<td>{{ $row->created_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Updated At</td>
						<td>{{ $row->updated_at}} </td>
						
					</tr>
				
                    </tbody>
                </table>

                

            </div>
        </div>

    </div>
</div>

@stop