<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
                    <li><a href="{{route('home')}}" aria-expanded="false">
                        <i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li>

          <li class="nav-label">Table</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-layout-25"></i><span class="nav-text">Table</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('merk.index') }}">Merk</a></li>
                    <li><a href="{{ route('ruangan.index') }}">Ruangan</a></li>
                    <li><a href="{{ route('kondisi.index') }}">Kondisi</a></li>
                    <li><a href="{{ route('barang.index') }}">Barang</a></li>

                </ul>
            </li>


            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-single-copy-06"></i><span class="nav-text">Peminjaman</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('pm_ruangan.index') }}">Peminjaman Ruangan</a></li>
                    <li><a href="{{ route('pm_barang.index') }}">Peminjaman Barang</a></li>
                    <li><a href="{{ route('l_barang.index') }}">Laporan Barang</a></li>
                    <li><a href="{{ route('l_ruangan.index') }}">Laporan Ruangan</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                class="icon icon-single-copy-06"></i><span class="nav-text">Maintenance</span></a>
        <ul aria-expanded="false">
            <li><a href="{{ route('m_barang.index') }}">Maintenance Barang</a></li>
            <li><a href="{{ route('m_ruangan.index') }}">Maintenance Ruangan</a></li>
            <li><a href="{{ route('lm_barang.index') }}">Laporan Maintenance Barang</a></li>
            <li><a href="{{ route('lm_ruangan.index') }}">Laporan Maintenance Ruangan</a></li>

        </ul>
    </li>
        </ul>
    </div>
</div>
