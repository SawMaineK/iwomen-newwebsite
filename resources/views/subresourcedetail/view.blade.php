@extends('layouts.main') @section('content')
<div class="page-content row">
    <!-- Page header -->
    @include('layouts.breadcrumb')
    <div class="page-content-wrapper m-t">

        <div class="portlet light bordered animated fadeInUp ">
        	<div class="portlet-title hidden-xs">
                @if(isset($pageTitle) && isset($pageAction))
                <div class="caption">
                    <i class="icon-windows8 font-blue-sharp"></i><span class="caption-subject font-blue-sharp bold uppercase">{{ $pageTitle }} : <small> {{ $pageAction }}</small></span>
                </div>
                @endif
                <div class="actions ">
            		<a href="{{ url('subresourcedetail?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a> @if($access['is_add'] ==1)
                    <a href="{{ url('subresourcedetail/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a> @endif
                    <a href="{{ ($prevnext['prev'] != '' ? url('subresourcedetail/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"><i class="fa fa-arrow-left"></i>  </a>
                    <a href="{{ ($prevnext['next'] != '' ? url('subresourcedetail/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"> <i class="fa fa-arrow-right"></i> </a>
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
						<td width='30%' class='label-view text-right'>AuthorName</td>
						<td>{{ $row->authorName}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>AuthorNameMM</td>
						<td>{{ $row->authorNameMM}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Author Id</td>
						<td>{{ $row->author_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Author Img Url</td>
						<td>{{ $row->author_img_url}} </td>
						
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
						<td width='30%' class='label-view text-right'>ObjectId</td>
						<td>{{ $row->objectId}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Posted Date</td>
						<td>{{ $row->posted_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Resource Id</td>
						<td>{{ $row->resource_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sub Res Icon Img Url</td>
						<td>{{ $row->sub_res_icon_img_url}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sub Resouce Content Eng</td>
						<td>{{ $row->sub_resouce_content_eng}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sub Resouce Content Mm</td>
						<td>{{ $row->sub_resouce_content_mm}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sub Resource Title Eng</td>
						<td>{{ $row->sub_resource_title_eng}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sub Resource Title Mm</td>
						<td>{{ $row->sub_resource_title_mm}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>AudioFile</td>
						<td>{{ $row->audioFile}} </td>
						
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