@extends('layouts.main') @section('content')
<div class="page-content row">
    <!-- Page header -->
    @include('layouts.breadcrumb')
    <div class="page-content-wrapper m-t">

        <div class="portlet light bordered animated fadeInUp ">
        	<div class="portlet-title hidden-xs">
                @if(isset($pageTitle) && isset($pageAction))
                <div class="caption">
                    <i class="fa fa-paper-plane font-blue-sharp"></i><span class="caption-subject font-blue-sharp bold uppercase">{{ $pageTitle }} : <small> {{ $pageAction }}</small></span>
                </div>
                @endif
                <div class="actions ">
            		<a href="{{ url('beinspiredpost?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a> @if($access['is_add'] ==1)
                    <a href="{{ url('beinspiredpost/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a> @endif
                    <a href="{{ ($prevnext['prev'] != '' ? url('beinspiredpost/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"><i class="fa fa-arrow-left"></i>  </a>
                    <a href="{{ ($prevnext['next'] != '' ? url('beinspiredpost/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"> <i class="fa fa-arrow-right"></i> </a>
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
						<td width='30%' class='label-view text-right'>AudioFile</td>
						<td>{{ $row->audioFile}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Author</td>
						<td>{{ SiteHelpers::formatLookUp($row->authorId,'authorId','1:authors:objectId:organization_name') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Comment Count</td>
						<td>{{ $row->comment_count}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Week Content</td>
						<td>{{ $row->week_content}} </td>
						
					</tr>
				
			<?php 
			$limited = isset($fields['content']['limited']) ? $fields['content']['limited'] :'';
			if(SiteHelpers::filterColumn($limited )) { ?>
						
					<tr>
						<td width='30%' class='label-view text-right'>Content</td>
						<td>{{ $row->content}} </td>
						
					</tr>
				
			<?php } ?>
					<tr>
						<td width='30%' class='label-view text-right'>ContentType</td>
						<td>{{ $row->contentType}} </td>
						
					</tr>
				
			<?php 
			$limited = isset($fields['content_mm']['limited']) ? $fields['content_mm']['limited'] :'';
			if(SiteHelpers::filterColumn($limited )) { ?>
						
					<tr>
						<td width='30%' class='label-view text-right'>Content Myanmar</td>
						<td>{{ $row->content_mm}} </td>
						
					</tr>
				
			<?php } ?>
					<tr>
						<td width='30%' class='label-view text-right'>Credit Link</td>
						<td><a href="">{{ $row->credit_link}} </a> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Credit Link Mm</td>
						<td><a href="">{{ $row->credit_link_mm}} </a> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Credit Logo Url</td>
						<td>{!! SiteHelpers::formatRows($row->credit_logo_url,$fields['credit_logo_url'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Credit Name</td>
						<td>{{ $row->credit_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Credit Name Mm</td>
						<td>{{ $row->credit_name_mm}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Image</td>
						<td>{!! SiteHelpers::formatRows($row->image,$fields['image'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>IsAllow</td>
						<td>{!! SiteHelpers::formatRows($row->isAllow,$fields['isAllow'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Likes</td>
						<td>{{ $row->likes}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Upload Name</td>
						<td>{{ $row->postUploadName}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Upload NameMM</td>
						<td>{{ $row->postUploadNameMM}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Upload User Image</td>
						<td>{!! SiteHelpers::formatRows($row->postUploadPersonImg,$fields['postUploadPersonImg'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Upload User Image</td>
						<td>{!! SiteHelpers::formatRows($row->postUploadUserImgPath,$fields['postUploadUserImgPath'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>PostUploadedDate</td>
						<td>{{ date('d/m/Y',strtotime($row->postUploadedDate)) }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Post Author Role</td>
						<td>{{ $row->post_author_role}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Post Author Role Mm</td>
						<td>{{ $row->post_author_role_mm}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Share Count</td>
						<td>{{ $row->share_count}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Suggest Section Eng</td>
						<td>{{ $row->suggest_section_eng}} </td>
						
					</tr>
				
			<?php 
			$limited = isset($fields['title']['limited']) ? $fields['title']['limited'] :'';
			if(SiteHelpers::filterColumn($limited )) { ?>
						
					<tr>
						<td width='30%' class='label-view text-right'>Title</td>
						<td>{{ $row->title}} </td>
						
					</tr>
				
			<?php } ?>
			<?php 
			$limited = isset($fields['titleMm']['limited']) ? $fields['titleMm']['limited'] :'';
			if(SiteHelpers::filterColumn($limited )) { ?>
						
					<tr>
						<td width='30%' class='label-view text-right'>TitleMm</td>
						<td>{{ $row->titleMm}} </td>
						
					</tr>
				
			<?php } ?>
					<tr>
						<td width='30%' class='label-view text-right'>User</td>
						<td>{{ SiteHelpers::formatLookUp($row->userId,'userId','1:users:objectId:username') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>VideoId</td>
						<td>{{ $row->videoId}} </td>
						
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