<div class="page-main-header">
  <div class="main-header-right row m-0">
    <div class="main-header-left">
      <div class="logo-wrapper">
        <img class="img-fluid" src="{{ asset('assets/images/logo/logo.png') }}" style="width: 30px; height: auto;">
        <span class="logo-text" style="display: inline-block; vertical-align: middle; margin-left: 5px;">
          Puskesmas <br> Umban Sari
        </span>
      </div>
      <div class="dark-logo-wrapper">
        <a href="{{ route('dashboard.index') }}">
          <img class="img-fluid" src="{{asset('assets/images/logo/dark-logo.png')}}" alt="">
        </a>
      </div>
      <div class="toggle-sidebar">
        <i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i>
      </div>
    </div>

    <!-- Search -->
    <div class="left-menu-header col">
      <ul>
        <li>
          <form class="form-inline search-form">
            <div class="search-bg">
              <i class="fa fa-search"></i>
              <input class="form-control-plaintext" placeholder="Search here.....">
            </div>
          </form>
          <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
        </li>
      </ul>
    </div>

    <div class="nav-right col pull-right right-menu p-0">
      <ul class="nav-menus">
        <li></li>

        <li class="onhover-dropdown"></li>

        <li class="onhover-dropdown"></li>

        <li>
          
        </li>

        <li class="onhover-dropdown">
          <i data-feather="user"></i>
          <ul class="chat-dropdown onhover-show-div">
            <div class="user-profile-card">
              @if(session()->has('user'))
              <div class="profile-details">
                <p><strong>Nama:</strong> {{ session('user')['nama'] }}</p>
                <p><strong>Jabatan:</strong> {{ session('user')['jabatan'] }}</p>
                <p><strong>Email:</strong> {{ session('user')['email'] }}</p>
                <p><strong>Level User:</strong> {{ session('user')['levelUser'] }}</p>
              </div>
              <div class="buttons-container">
                <a href="{{ route('profileStaffBiasa.index') }}" class="btn btn-primary-light btn-sm">
                  <i data-feather="edit"></i> Edit Profil
                </a>
                <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#editProfileModal">
                  <i data-feather="info"></i> Detail Profil
                </button>
              </div>
              <div class="dropdown-divider"></div>
              @else
              <p>User not logged in</p>
              @endif
            </div>
          </ul>
        </li>

        <li class="onhover-dropdown p-0">
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-primary-light" type="submit">
              <i data-feather="log-out"></i> Log out
            </button>
          </form>
        </li>
      </ul>
    </div>

    <div class="d-lg-none mobile-toggle pull-right w-auto">
      <i data-feather="more-horizontal"></i>
    </div>
  </div>
</div>

<!-- Modal Edit Profil -->
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editProfileModalLabel">Detail Profil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Isi form edit profil di sini -->
        <form>
          @csrf
          <table class="table">
            <tbody>
              <!-- Field NIK -->
              <tr>
                <th scope="row">NIK</th>
                <td>{{ session('user')['nik'] }}</td>
              </tr>
              <!-- Field Nama -->
              <tr>
                <th scope="row">Nama</th>
                <td>{{ session('user')['nama'] }}</td>
              </tr>
              <!-- Field Jenis Kelamin -->
              <tr>
                <th scope="row">Jenis Kelamin</th>
                <td>{{ session('user')['jenisKelamin'] }}</td>
              </tr>
              <!-- Field Alamat -->
              <tr>
                <th scope="row">Alamat</th>
                <td>{{ session('user')['alamat'] }}</td>
              </tr>
              <!-- Field Email -->
              <tr>
                <th scope="row">Email</th>
                <td>{{ session('user')['email'] }}</td>
              </tr>
              <!-- Field Password -->
              <tr>
                <th scope="row">Password</th>
                <td>{{ session('user')['password'] }}</td>
              </tr>
              <!-- Field Jabatan -->
              <tr>
                <th scope="row">Jabatan</th>
                <td>{{ session('user')['jabatan'] }}</td>
              </tr>
              <!-- Field Level User -->
              <tr>
                <th scope="row">Level User</th>
                <td>{{ session('user')['levelUser'] }}</td>
              </tr>
            </tbody>
          </table>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Tambahkan script atau link JS yang diperlukan di sini -->