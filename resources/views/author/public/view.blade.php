<div class="m-t" style="padding-top:25px;">	
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-responsive" > 	

		<table class="table table-striped table-bordered" >
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
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	