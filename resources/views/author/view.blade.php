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
            		<a href="{{ url('author?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a> @if($access['is_add'] ==1)
                    <a href="{{ url('author/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a> @endif
                    <a href="{{ ($prevnext['prev'] != '' ? url('author/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"><i class="fa fa-arrow-left"></i>  </a>
                    <a href="{{ ($prevnext['next'] != '' ? url('author/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"> <i class="fa fa-arrow-right"></i> </a>
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
						<td width='30%' class='label-view text-right'>Organization Name</td>
						<td>{{ $row->organization_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Organization Name Mm</td>
						<td>{{ $row->organization_name_mm}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>AuthorImg</td>
						<td>{!! SiteHelpers::formatRows($row->authorImg,$fields['authorImg'],$row ) !!} </td>
						
					</tr>
				
			<?php 
			$limited = isset($fields['authorInfoEng']['limited']) ? $fields['authorInfoEng']['limited'] :'';
			if(SiteHelpers::filterColumn($limited )) { ?>
						
					<tr>
						<td width='30%' class='label-view text-right'>AuthorInfoEng</td>
						<td>{{ $row->authorInfoEng}} </td>
						
					</tr>
				
			<?php } ?>
			<?php 
			$limited = isset($fields['authorInfoMM']['limited']) ? $fields['authorInfoMM']['limited'] :'';
			if(SiteHelpers::filterColumn($limited )) { ?>
						
					<tr>
						<td width='30%' class='label-view text-right'>AuthorInfoMM</td>
						<td>{{ $row->authorInfoMM}} </td>
						
					</tr>
				
			<?php } ?>
					<tr>
						<td width='30%' class='label-view text-right'>AuthorName</td>
						<td>{{ $row->authorName}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>AuthorNameMM</td>
						<td>{{ $row->authorNameMM}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>AuthorTitleEng</td>
						<td>{{ $row->authorTitleEng}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>AuthorTitleMM</td>
						<td>{{ $row->authorTitleMM}} </td>
						
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