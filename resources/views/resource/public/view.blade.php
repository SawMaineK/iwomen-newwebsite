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
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	