@extends('layouts.login')

@section('content')
<div class="sbox">
	<div class="sbox-title">
			
				<h3 >{{ CNF_APPNAME }}</h3>
				
	</div>
	<div class="sbox-content">
 	{!! Form::open(array('url'=>'user/create', 'class'=>'form-signup')) !!}
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
	
	<div class="form-group has-feedback">
		<label>{{ Lang::get('core.firstname') }}</label>
	  	<div class="input-icon input-icon-lg right">
            <i class="icon-users form-control-feedback font-green"></i>
            {!! Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name' ,'required'=>'' )) !!}
        </div>
	</div>
	
	<div class="form-group has-feedback">
		<label>{{ Lang::get('core.lastname') }}	 </label>
		<div class="input-icon input-icon-lg right">
            <i class="icon-users form-control-feedback font-green"></i>
            {!! Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name','required'=>'')) !!}
        </div>
	</div>
	
	<div class="form-group has-feedback">
		<label>{{ Lang::get('core.email') }}	 </label>
		<div class="input-icon input-icon-lg right">
            <i class="fa fa-envelope form-control-feedback font-green"></i>
            {!! Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address','required'=>'email')) !!}
        </div>
	</div>
	
	<div class="form-group has-feedback">
		<label>{{ Lang::get('core.password') }}	</label>
	 
		<div class="input-icon input-icon-lg right">
            <i class="icon-lock form-control-feedback font-green"></i>
            {!! Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password','required'=>'')) !!}
        </div>
	</div>
	
	<div class="form-group has-feedback">
		<label>{{ Lang::get('core.repassword') }}	</label>
	 	<div class="input-icon input-icon-lg right">
            <i class="icon-lock form-control-feedback font-green"></i>
            {!! Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password','required'=>'')) !!}
        </div>
	</div>
    <div class="row form-actions">
          <button type="submit" style="width:100%;" class="btn btn-lg green btn-block"><i class="icon-user-plus"></i> {{ Lang::get('core.signup') }}	</button>
      </div>
	  <p style="padding:10px 0" class="text-center">
	  <a href="{{ URL::to('user/login')}}"> {{ Lang::get('core.signin') }}  </a> | <a href="{{ URL::to('')}}"> {{ Lang::get('core.backtosite') }}  </a> 
   		</p>
 {!! Form::close() !!}
 </div>
</div> 
@stop
