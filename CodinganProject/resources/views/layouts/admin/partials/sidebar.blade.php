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
                        <a class="nav-link menu-title" href="{{ route('dashboardAdmin.index') }}"><i
                                data-feather="home"></i><span>Dashboard</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{ route('dataUser.index') }}"><i
                                data-feather="users"></i><span>Data User</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{ route('histori.index') }}">
                            <i data-feather="user-minus"></i><span>User Tidak Aktif</span>
                        </a>
                    </li>


                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{ route('dataPemasukanAdmin.index') }}"><i
                                data-feather="dollar-sign"></i><span>Data Pemasukan</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{ route('dataPengeluaranAdmin.index') }}"><i
                                data-feather="shopping-cart"></i><span>Data Pengeluaran</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{ route('laporanAdmin.index') }}"><i
                                data-feather="file-text"></i><span>Laporan</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{ route('cetakAdmin.index') }}"><i
                                data-feather="printer"></i><span>Cetak
                                Pelaporan</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>