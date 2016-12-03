<!-- Page header -->
<!-- BEGIN PAGE HEAD-->
<div class="page-head" style="margin-top: -18px;">
    <!-- BEGIN PAGE TITLE -->
    @if(isset($pageTitle) && isset($pageNote))
    <div class="page-title">
        <h1>{{ $pageTitle }} : <small> {{ $pageNote }}</small> </h1>
    </div>
    @endif
    <!-- END PAGE TITLE -->
</div>
<!-- END PAGE HEAD-->
<ul class="page-breadcrumb breadcrumb">
    <li>
        <a href="{{URL::to('//')}}">Dashboard</a>
        <i class="fa fa-circle"></i>
    </li>
    @if(isset($pageTitle) && isset($pageNote))
    <li>
        <span class="active">{{ $pageTitle }}</span>
    </li>
    @endif
</ul>

@if(Session::has('msgstatus') && Session::get('msgstatus') == 'success')
<div class="alert alert-success alert-dismissable animated fadeIn">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
    <strong>Success:</strong> {{ @Session::get('messagetext') }}
</div>
@endif

@if(Session::has('msgstatus') && Session::get('msgstatus') == 'error')
<div class="alert alert-danger alert-dismissable animated fadeIn">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
    <strong>Error:</strong> {{ @Session::get('messagetext') }}
</div>
@endif