<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Laravel 4 - Tutorial
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS are placed here -->
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-responsive.css') }}

        <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
        @show
        </style>
    </head>

    <body>
        <!-- Navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <a class="brand" href="#">J-POST-BLOG</a>

                    <!-- Everything you want hidden at 940px or less, place within here -->
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li><a href="{{{ URL::to('') }}}">หน้าหลัก</a></li>
                            <li><a href="{{{ URL::to('secret') }}}">การจัดการบล๊อก</a></li>
                             @if(Auth::guest())
                             <li><a href="{{{ URL::to('register') }}}">สมัครสมาชิก</a></li>
                             @else
                             <li><a href="{{{ URL::to('profile') }}}">ข้อมูลส่วนตัว</a></li>
                             @endif
                        </ul> 
                    </div>

                    <div class="nav pull-right">
                        <ul class="nav">
                            @if ( Auth::guest() )
                                <li>{{ HTML::link('login', 'ลงชื่อเข้าใช้งาน') }}</li>
                            @else
                                <li>{{ HTML::link('logout', 'ลงชื่อออก') }}</li>
                            @endif
                        </ul>
                    </div> 
                </div>
            </div>
        </div> 

        <!-- Container -->
        <div class="container">

            <!-- Success-Messages -->
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4>Success</h4>
                    {{{ $message }}}
                </div>
            @endif
           <div class="container-fluid">
              <div class="row-fluid">
                @if(Auth::guest()) 
                @else
                  <div class="span2">
                        <p class="muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                        <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                        <p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <p class="text-info">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
                        <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>      
                  </div>
                @endif
                <div class="span10">
                  <!--Body content-->
                  @yield('content')
                </div>
              </div>
            </div>
        </div>  
        </div>

        <!-- Scripts are placed here -->
        
        {{ HTML::script('js/bootstrap-dropdown.js') }}
        {{ HTML::script('js/jquery-1.9.1.js') }}
        {{ HTML::script('js/bootstrap/bootstrap.min.js') }}

    </body>
</html>