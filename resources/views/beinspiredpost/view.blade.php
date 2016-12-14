@extends('layouts.main') @section('content')
<div class="page-content row">
    <!-- Page header -->
    @include('layouts.breadcrumb')
    <div class="page-content-wrapper m-t">

        <div class="portlet light bordered animated fadeInUp ">
        	<div class="portlet-title">
                @if(isset($pageTitle) && isset($pageNote))
                <div class="caption">
                    <i class="icon-grid font-blue-sharp"></i>
                    <span class="caption-subject font-blue-sharp bold uppercase">{{ $pageTitle }} : <small> {{ $pageNote }}</small></span>
                </div>
                @endif
                <div class="actions">
            		<a href="{{ url('beinspiredpost?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a> @if($access['is_add'] ==1)
                    <a href="{{ url('beinspiredpost/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a> @endif
                    <a href="{{ ($prevnext['prev'] != '' ? url('beinspiredpost/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"><i class="fa fa-arrow-left"></i>  </a>
                    <a href="{{ ($prevnext['next'] != '' ? url('beinspiredpost/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"> <i class="fa fa-arrow-right"></i> </a>
                    @if(Session::get('gid') ==1)
                    <a href="{{ URL::to('http://developers.myapibox.com/sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}"><i class="fa  fa-ellipsis-v"></i></a> @endif
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
						<td width='30%' class='label-view text-right'>AuthorId</td>
						<td>{{ $row->authorId}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Comment Count</td>
						<td>{{ $row->comment_count}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Week Content</td>
						<td>{{ $row->week_content}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Content</td>
						<td>{{ $row->content}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>ContentType</td>
						<td>{{ $row->contentType}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Content Mm</td>
						<td>{{ $row->content_mm}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Credit Link</td>
						<td>{{ $row->credit_link}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Credit Link Mm</td>
						<td>{{ $row->credit_link_mm}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Credit Logo Url</td>
						<td>{{ $row->credit_logo_url}} </td>
						
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
						<td>{{ $row->image}} </td>
						
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
						<td width='30%' class='label-view text-right'>PostUploadName</td>
						<td>{{ $row->postUploadName}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>PostUploadNameMM</td>
						<td>{{ $row->postUploadNameMM}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>PostUploadUserImgPath</td>
						<td>{{ $row->postUploadUserImgPath}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>PostUploadedDate</td>
						<td>{{ $row->postUploadedDate}} </td>
						
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
						<td width='30%' class='label-view text-right'>Title</td>
						<td>{{ $row->title}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>TitleMm</td>
						<td>{{ $row->titleMm}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>UserId</td>
						<td>{{ $row->userId}} </td>
						
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