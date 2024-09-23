<!-- Tambahkan ini di dalam tag head HTML atau pastikan Bootstrap CSS dan JS sudah termasuk -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

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
                    <div class="search_bar dropdown"></div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-account"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<!-- Modal Konfirmasi Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true" style="margin-top: 12%">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center  p-md-0 " style="margin: 10%">
                <div>
                    <img src="{{ asset('asset/images/group.svg')}}" alt="Konfirmasi Logout" style="width: 200px;">
                </div>
                <h3><b>ANDA YAKIN INGIN KELUAR??</b></h3>
                <div class="mt-3">
                    <button type="button" class="btn btn-sm btn-primary" id="confirmLogout" style="margin-right:10px"><b>YA</b></button>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal"><b>TIDAK</b></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan JavaScript ini untuk menangani konfirmasi logout -->
<script>
    document.getElementById('confirmLogout').addEventListener('click', function () {
        document.getElementById('logout-form').submit();
    });
</script>

<!-- Form Logout (sudah ada di kode Anda tetapi tersembunyi) -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
<!--**********************************
    Header end ti-comment-alt
***********************************-->
