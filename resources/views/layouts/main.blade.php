<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8" />
        <title>{{ CNF_APPNAME }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="keywords" content="{{CNF_METAKEY}}">
        <meta content="{{ CNF_METADESC }}" name="description" />
        <meta content="Saw Maine K" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap-summernote/summernote.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/icheck/skins/square/red.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/global/plugins/markitup/skins/simple/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/global/plugins/markitup/sets/default/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet">
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        @yield('styles')
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- <link href="{{ asset('assets/global/css/sximo.css') }}" rel="stylesheet" type="text/css" /> -->
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('assets/layouts/layout/css/animate.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/layouts/layout/css/themes/default.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        @include('layouts/headmenu')
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            @include('layouts/sidemenu')
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                @yield('content')
            </div>
            
            <!-- END CONTENT -->

            <!-- POPUP MODAL FADE -->
            <div class="modal fade" id="sximo-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header bg-default">
                        
                        <button type="button " class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Modal Title</h4>
                    </div>
                    <div class="modal-body" id="sximo-modal-content">

                    </div>

                  </div>
                </div>
            </div>
            <!-- END POPUP MODAL FADE -->
            {{ Sitehelpers::showNotification() }}
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2016 &copy; {{CNF_APPNAME}} By
               <a target="_blank" href="http://thesuntechnology.com">THE SUN TECHNOLOTY</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
    
        <!--[if lt IE 9]>
        <script src="{{ asset('assets/global/plugins/respond.min.js') }}"></script>
        <script src="{{ asset('assets/global/plugins/excanvas.min.js') }}"></script> 
        <script src="{{ asset('assets/global/plugins/ie8.fix.min.js') }}"></script> 
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins//jquery-ui.min.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jquery.cookie.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>

        <script type="text/javascript" src="{{ asset('assets/global/plugins/prettify.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/parsley.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/datepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/switch.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery.form.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/fancybox/jquery.fancybox.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-summernote/summernote.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery.jCombo.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/markitup/jquery.markitup.js') }}"></script>  
        <script type="text/javascript" src="{{ asset('assets/global/plugins/markitup/sets/default/set.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        @yield('plugin_scripts')
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('assets/global/scripts/sximo.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        @yield('page_scripts')
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{ asset('assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

</body>

</html>