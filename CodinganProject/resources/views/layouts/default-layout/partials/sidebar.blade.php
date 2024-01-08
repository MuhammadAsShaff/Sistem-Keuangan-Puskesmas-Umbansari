<header class="main-nav">
    <nav>
        <div class="main-navbar">
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{route('dashboard.index')}}"><i
                                data-feather="home"></i><span>Dashboard</span></a>
                                
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{route('dataPemasukan.index')}}"><i
                                data-feather="home"></i><span>Data Pemasukan</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{route('dataPengeluaran.index')}}"><i
                                data-feather="home"></i><span>Data Pengeluaran</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{route('laporan.index')}}"><i
                                data-feather="home"></i><span>Laporan</span></a>
                  
                </ul>
                
            </div>
        </div>
    </nav>
</header>