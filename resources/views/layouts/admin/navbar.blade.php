    <!--**********************************
       Nav header start
    ***********************************-->
    <div class="nav-header">
        <a class="brand-logo">
            <img class="logo-abbr" src="{{ asset('asset/images/logo.png')}}" alt="">
            <img class="logo-compact" src="{{ asset('asset/images/SISLAB.svg')}}" alt="">
            <img class="brand-title" src="{{ asset('asset/images/SISLAB.svg')}}" alt="">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
<!--**********************************
  Nav header end
***********************************-->

<!--**********************************
  Header start
***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="search_bar dropdown">

                            </div>
                        </div>
                    </div>

                    <ul class="navbar-nav header-right">

                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <i class="mdi mdi-account"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
<!--**********************************
    Header end ti-comment-alt
***********************************-->
