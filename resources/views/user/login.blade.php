@extends('layouts.login')

@section('content')

<div class="sbox ">
	<div class="sbox-title">
			
		<h3 class="animated fadeInDown">{{ CNF_APPNAME }}</h3>
				
	</div>
	<div class="sbox-content">
	<div class="text-center  animated fadeInDown delayp1">
	</div>	
		<div class="ajaxLoading"></div>
		<p class="message alert alert-danger " style="display:none;"></p>	
 
	    	@if(Session::has('message'))
				{!! Session::get('message') !!}
			@endif
			@if(count($errors->all()) > 0)
	        <div class="note note-danger">
	            @foreach($errors->all() as $error)
	            <p>{{ $error }}</p>
	            @endforeach
	        </div>
	        @endif		
		
	<ul class="nav nav-tabs" >
	  <li class="active"><a href="#tab-sign-in" data-toggle="tab">  {{ Lang::get('core.signin') }} </a></li>
	   <li ><a href="#tab-forgot" data-toggle="tab"> {{ Lang::get('core.forgotpassword') }} </a></li>
	   @if(CNF_REGIST =='true') 			
	   <li><a href="{{ URL::TO('user/register')}}" >  {{ Lang::get('core.signup') }} </a></li>
	   @endif	
	 
	</ul>	
	<div class="tab-content" >
		<div class="tab-pane active m-t" id="tab-sign-in">
		<form method="post" action="{{ url('user/signin')}}" class="form-vertical" id="LoginAjax">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
			<div class="form-group has-feedback animated fadeInLeft delayp1">
				<label>{{ Lang::get('core.email') }}</label>				
				<div class="input-icon input-icon-lg right">
	                <i class="icon-users form-control-feedback font-green"></i>
	                <input type="text" name="email" placeholder="Email Address" class="form-control" required="email" />
	            </div>
			</div>
			
			<div class="form-group has-feedback  animated fadeInRight delayp1">
				<label>{{ Lang::get('core.password') }}	</label>
				<div class="input-icon input-icon-lg right">
	                <i class="icon-lock form-control-feedback font-green"></i>
	                <input type="password" name="password" placeholder="Password" class="form-control" required="true" />
	            </div>
			</div>

			@if(CNF_MULTILANG =='1') 
			<div class="form-group has-feedback  animated fadeInLeft delayp1">
				<label class="text-left"> {{ Lang::get('core.language') }} </label>	
				<select class="form-control" name="language">
					@foreach(SiteHelpers::langOption() as $lang)
					<option value="{{ $lang['folder'] }}" @if(Session::get('lang') ==$lang['folder']) selected @endif>  {{  $lang['name'] }}</option>
					@endforeach

				</select>	
				
				<div class="clr"></div>
			</div>	
		 	@endif	

			<div class="form-group  has-feedback text-center  animated fadeInLeft delayp1" style=" margin-bottom:20px;" >
				 	 
					<button type="submit" class="btn btn-lg green btn-block" ><i class="fa fa-sign-in"></i> {{ Lang::get('core.signin') }}</button>
				       

				
			 	<div class="clr"></div>
				
			</div>	
			<div class="animated fadeInUp delayp1">
			  <p style="padding:10px 0" class="text-center">
			  <a href="{{ URL::to('')}}"> {{ Lang::get('core.backtosite') }} </a>  
		   		</p>
		   	</div>	
		   </form>			
		</div>
	
	

	<div class="tab-pane  m-t" id="tab-forgot">	

		
		<form method="post" action="{{ url('user/request')}}" class="form-vertical box" id="fr">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		   <div class="form-group has-feedback">
		   <div class="">
				<label>{{ Lang::get('core.enteremailforgot') }}</label>
				<div class="input-icon input-icon-lg right">
	                <i class="icon-envelope form-control-feedback font-green"></i>
	                <input type="text" name="credit_email" placeholder="{{ Lang::get('core.email') }}" class="form-control" required/>
	            </div>
	            
			</div> 	
			</div>
			<div class="form-group has-feedback">        
		      <button type="submit" class="btn btn-lg green btn-block"> {{ Lang::get('core.sb_submit') }} </button>        
		  </div>
		  
		  <div class="clr"></div>

		  
		</form>

	
	</div>


	</div>  

  </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#or').click(function(){
		$('#fr').toggle();
		});

		var form = $('#LoginAjax'); 
		form.parsley();
		form.submit(function(){
			
			if(form.parsley('isValid') == true){			
				var options = { 
					dataType:      'json', 
					beforeSubmit :  showRequest,
					success:       showResponse  
				}  
				$(this).ajaxSubmit(options); 
				return false;
							
			} else {
				return false;
			}		
		
		});

	});

function showRequest()
{
	$('.ajaxLoading').show();		
}  
function showResponse(data)  {		
	
	if(data.status == 'success')
	{
		window.location.href = data.url;	
		$('.ajaxLoading').hide();
	} else {
		$('.message').html(data.message)	
		$('.ajaxLoading').hide();
		$('.message').show(data.message)	
		return false;
	}	
}	
</script>
@stop