<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse" style="min-height: 568px;">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="heading">
                <h3 class="uppercase">Modules</h3>
            </li>
            <?php $sidebar = SiteHelpers::menus('sidebar') ;?>
            @foreach ($sidebar as $menu)

            <li @if(Request::segment(1)==$menu['module']) class="active" @endif>

                @if($menu['module'] =='separator')
                <li class="separator"> <span> {{$menu['menu_name']}} </span></li>

                @else
                <a @if($menu[ 'menu_type']=='external' ) href="{{ $menu['url'] }}" @else href="{{ URL::to($menu['module'])}}" @endif @if(count($menu[ 'childs'])> 0 ) class="expand level-closed" @endif>
                    <i class="{{$menu['menu_icons']}}"></i> 
                    <span class="title">

                    @if(CNF_MULTILANG ==1 && isset($menu['menu_lang']['title'][Session::get('lang')]))
                        {{ $menu['menu_lang']['title'][Session::get('lang')] }}
                    @else
                        {{$menu['menu_name']}}
                    @endif                      

                    </span> 
                    @if(count($menu['childs']) > 1 )
                    <span class="fa arrow"></span> 
                    @endif    
                </a> @endif @if(count($menu['childs']) > 0)
                <ul class="nav nav-second-level">
                    @foreach ($menu['childs'] as $menu2)
                    <li @if(Request::segment(1)==$menu2['module']) class="active" @endif>
                        <a @if($menu2[ 'menu_type']=='external' ) href="{{ $menu2['url']}}" @else href="{{ URL::to($menu2['module'])}}" @endif>

                            <i class="{{$menu2['menu_icons']}}"></i> @if(CNF_MULTILANG ==1 && isset($menu2['menu_lang']['title'][Session::get('lang')])) {{ $menu2['menu_lang']['title'][Session::get('lang')] }} @else {{$menu2['menu_name']}} @endif
                        </a>
                        @if(count($menu2['childs']) > 0)
                        <ul class="nav nav-third-level">
                            @foreach($menu2['childs'] as $menu3)
                            <li @if(Request::segment(1)==$menu3['module']) class="active" @endif>
                                <a @if($menu[ 'menu_type']=='external' ) href="{{ $menu3['url'] }}" @else href="{{ URL::to($menu3['module'])}}" @endif>
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    <i class="{{$menu3['menu_icons']}}"></i> @if(CNF_MULTILANG ==1 && isset($menu3['menu_lang']['title'][Session::get('lang')])) {{ $menu3['menu_lang']['title'][Session::get('lang')] }} @else {{$menu3['menu_name']}} @endif

                                </a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                </ul>
                @endif
            </li>

            @endforeach

            <li @if(Request::segment(1)== 'user' && Request::segment(2) != 'config' && Request::segment(2) != 'profile') class="active" @endif><a href="{{ URL::to('/user')}}">
                <i class="icon-users"></i> 
                <span class="title">{{ Lang::get('core.m_users') }} &  {{ Lang::get('core.m_groups') }}</span>
            </a></li>
            <li  @if(Request::segment(1)== 'user' && Request::segment(2)== 'profile') class="active" @endif><a href="{{ URL::to('user/profile')}}"><i class="icon-bubble-user"></i> <span class="title">{{ Lang::get('core.m_profile') }}</span></a></li>
            
            <li><a href="{{ URL::to('user/logout')}}"><i class="icon-enter3"></i> <span class="title">{{ Lang::get('core.m_logout') }}</span></a></li>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->