<header class="main-nav">
    <nav>
        <div class="main-navbar">
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{ route('dashboardStaffBiasa.index') }}"><i
                                data-feather="home"></i><span>Dashboard</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{ route('dataPemasukanStaffBiasa.index') }}"><i
                                data-feather="dollar-sign"></i><span>Data Pemasukan</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{ route('dataPengeluaranStaffBiasa.index') }}"><i
                                data-feather="shopping-cart"></i><span>Data Pengeluaran</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{ route('laporanStaffBiasa.index') }}"><i
                                data-feather="file-text"></i><span>Laporan</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{ route('cetakStaffBiasa.index') }}"><i data-feather="printer"></i><span>Cetak
                                Pelaporan</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>