<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="#">
                @if(file_exists(public_path().'/uploads/'.CNF_LOGO) && CNF_LOGO !='')
                <img src="{{ asset('uploads/'.CNF_LOGO)}}" alt="{{ CNF_APPNAME }}"class="logo-default" />
                @else
                <img src="{{ asset('assets/layouts/layout/img/logo.png')}}" alt="{{ CNF_APPNAME }}" class="logo-default" />
                @endif
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->

        <div class="page-actions">
            <div class="btn-group">
                <button type="button" class="btn red-haze btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <span class="">Actions&nbsp;</span>
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-right icons-right" role="menu">
                    @if(Auth::user()->group_id == 1)
                    <li><a href="{{ URL::to('user')}}"><i class="icon-users"></i> {{ Lang::get('core.m_users') }} &  {{ Lang::get('core.m_groups') }} </a></li>
                    <li><a href="{{ URL::to('user/blast')}}"><i class="icon-mail"></i> {{ Lang::get('core.m_blastemail') }} </a></li> 
                    <li><a href="{{ URL::to('user/logs')}}"><i class="icon-clock2"></i> {{ Lang::get('core.m_logs') }}</a></li> 
                    <li class="divider"></li>
                    @endif
                    <li><a href="{{ URL::to('http://developers.myapibox.com/sximo/module')}}"><i class="icon-grid"></i> New Modules</a></li>
                    <li><a href="{{ URL::to('http://developers.myapibox.com/sximo/tables')}}"><i class="icon-database"></i> Database Management </a></li>
                    <li><a href="{{ URL::to('http://developers.myapibox.com/sximo/menu')}}"><i class="icon-file-plus"></i> {{ Lang::get('core.m_menu') }}</a></li>  
                    <li><a href="{{ URL::to('http://developers.myapibox.com/core/pages')}}"><i class="icon-paragraph-left2"></i> Page Menagement</a></li>  
                  </ul>
                
            </div>
        </div>
        
        <!-- BEGIN PAGE TOP -->
        <div class="page-top hidden-sm hidden-xs">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right ">
                    <li class="separator hide"> </li>

                    <!-- BEGIN LANGUAGE BAR -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    @if(CNF_MULTILANG==1)
                    <li class="dropdown dropdown-language">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" src="{{ asset('assets/global/img/flags/us.png') }}">
                            <span class="langname"> US </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:;">
                                    <img alt="" src="{{ asset('assets/global/img/flags/us.png') }}"> US </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <!-- END LANGUAGE BAR -->

                    <li class="separator hide"> </li>
                   
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"  title="{{ Lang::get('core.m_myaccount') }}">
                            <span class="username username-hide-on-mobile"> {{ Session::get('fid')}} </span> 
                            {!! SiteHelpers::avatar( 40 ) !!}</a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li><a href="{{ URL::to('user/profile')}}"><i class="icon-bubble-user"></i> {{ Lang::get('core.m_profile') }}</a></li>
                            <li><a href="{{ URL::to('user/logout')}}"><i class="icon-enter3"></i> {{ Lang::get('core.m_logout') }}</a></li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER