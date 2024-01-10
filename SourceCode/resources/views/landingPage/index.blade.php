<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Puskesmas Umban Sari</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="landingPage/css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="landingPage/css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="landingPage/css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="landingPage/images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="landingPage/css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="landingPage/css/owl.carousel.min.css">
  <link rel="stylesheet" href="landingPage/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen">
  <style>
    .image-icon {
      display: flex;
      align-items: center;
      gap: 10px;
      /* Sesuaikan jarak antara ikon dan teks sesuai keinginan Anda */
    }

    /* CSS Customization */
a:hover button.bt_main {
  background-color: #595959; /* Ganti dengan warna abu-abu yang diinginkan */
  /* tambahkan properti CSS lainnya sesuai kebutuhan */
}


  </style>
</head>

<body>
  <header>
    <div class="layout_padding banner_section_start">
      <!-- header inner -->
      <div class="header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col">
              <div class="full">
                <div class="center-desk">
                  <img src="landingPage/images/logo1.png" style="max-width: 20%;">
                  <span class="logo-text">Puskesmas Umban Sari</span>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu">
                    <ul class="menu-area-main">
                      <li><a href="#home">Home</a></li>
                      <li><a href="#about">Visi Misi</a></li>
                      <li><a href="#gallery">Slogan</a></li>
                      <li><a href="#contact">Kontak</a></li>
                      <li class="active"><a href="{{ route('login.index') }}">Login</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>
    </div>
    </div>
    <!-- end header inner -->
    <!-- banner start-->
   
<div class="layout_padding banner_section">
    <div class="container">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6 taital">
                            <h1>Memberikan<strong class="banner_taital">Kesehatan Yang Layak</strong></h1>
                            <p class="lorem_text">Puskesmas Umban Sari meneguhkan komitmennya untuk memberikan pelayanan kesehatan berkualitas tinggi, menjadikan
                                kesejahteraan masyarakat sebagai prioritas utama. Dengan fokus pada upaya pencegahan, diagnosis tepat, dan perawatan
                                holistik, kami berupaya menciptakan lingkungan sehat bagi semua.</p>
                            <a href="{{ route('login.index') }}">
                              <button class="bt_main">Login</button>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-image"><img src="landingPage/images/puskesmas1.jpg" style="width: 100%; height: auto;"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6 taital">
                            <h1>Menciptakan<strong class="banner_taital">Kepedulian Bagi Masyarakat</strong></h1>
                            <p class="lorem_text">Kami peduli terhadap kebutuhan kesehatan setiap individu, memastikan pelayanan yang empati, dan mendukung proses
                                penyembuhan dengan perhatian yang tulus. Dengan pendekatan yang bersifat humanis, kami berkomitmen untuk memahami dan
                                merespons kebutuhan unik setiap pasien, menciptakan pengalaman perawatan yang berkesan.</p>
                          <a href="{{ route('login.index') }}">
                            <button class="bt_main">Login</button>
                          </a>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-image"><img src="landingPage/images/gambar5.jpg" style="width: 100%; height: auto;"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6 taital">
                            <h1>Memberikan<strong class="banner_taital">Hal Yang Inovatif Dan Berguna</strong></h1>
                            <p class="lorem_text">Puskesmas Umban Sari selalu berusaha untuk menjadi pusat inovasi dalam pelayanan kesehatan, menerapkan solusi kreatif
                                guna meningkatkan efisiensi dan efektivitas layanan. Kami terus mengembangkan metode-metode baru, teknologi canggih, dan
                                praktik terbaik untuk memastikan pelayanan yang selalu relevan dan mutakhir.</p>
                          <a href="{{ route('login.index') }}">
                            <button class="bt_main">Login</button>
                          </a>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-image"><img src="landingPage/images/kinjungan.jpg" style="width: 100%; height: auto;"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6 taital">
                            <h1>Memberikan<strong class="banner_taital">Respon Yang Baik</strong></h1>
                            <p class="lorem_text">Kami responsif terhadap setiap kebutuhan kesehatan masyarakat, memberikan tanggapan cepat dan solusi yang adaptif untuk
                                memenuhi harapan dan kepercayaan masyarakat. Dengan keterlibatan aktif dalam komunitas, kami bertujuan untuk menjadi
                                mitra terpercaya yang siap mendukung kesejahteraan dan keamanan masyarakat setempat.</p>
                          <a href="{{ route('login.index') }}">
                            <button class="bt_main">Login</button>
                          </a>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-image"><img src="landingPage/images/gambar10.jpg" style="width: 100%; height: auto;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>


    </div>
  </header>
  <!-- banner end-->
  <!-- about start-->
  <div id="about" class="layout_padding about_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div><img src="landingPage/images/puskesmas.jpg" style="max-width: 100%;"></div>
        </div>
        <div class="col-md-6">
          <h1 class="about_text"><strong>Visi Misi</span></strong></h1>
          <p class="about_taital">Visi Puskesmas kami adalah menjadi Pusat Pelayanan Kesehatan Unggulan yang
            Mensejahterakan Masyarakat melalui pelayanan
            berkualitas, teknologi terkini, dan partisipasi aktif masyarakat. Misi kami mencakup memberikan pelayanan
            kesehatan
            prima, mendorong pencegahan dan promosi kesehatan, serta mengedepankan keamanan dan kenyamanan pasien. Kami
            komitmen
            pada pengembangan sumber daya manusia yang profesional, etis, dan berintegritas, sambil menjaga
            keberlanjutan
            lingkungan.</p>

        </div>
      </div>
    </div>
  </div>
  <!-- product start-->

  <!-- product end-->
  <!-- Gallery start-->
  <div id="gallery" class="layout_padding2 gallery_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="gallery_main">
            <h1 class="gallery_taital"><strong><span class="our_text">4</span> Slogan Kami</strong></h1>
          </div>
        </div>
        <div class="col-sm-12 gallery_maain">
          <div class="row">
            <div class="col-sm-3 padding_0">
              <div class="gallery_blog">
                <img class="img-responive" src="landingPage/images/gambar2.jpeg">
                <div class="overlay">
                  <h2>"Kesehatan"</h2>
                </div>
              </div>
            </div>
            <div class="col-sm-3 padding_0">
              <div class="gallery_blog">
                <img class="img-responive" src="landingPage/images/gambar7.jpeg">
                <div class="overlay">
                  <h2>"Peduli"</h2>
                </div>
              </div>
            </div>
            <div class="col-sm-3 padding_0">
              <div class="gallery_blog">
                <img class="img-responive" src="landingPage/images/gambar3.jpg">
                <div class="overlay">
                  <h2>"Inovatif"</h2>
                </div>
              </div>
            </div>
            <div class="col-sm-3 padding_0">
              <div class="gallery_blog">
                <img class="img-responive" src="landingPage/images/gambar4.jpg">
                <div class="overlay">
                  <h2>"Responsif"</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end Gallery-->
  <!-- <div class="map_section">
    <div class="row">
      <div class="col-sm-12">
        <div id="map">
        </div>
      </div>
    </div>
  </div> -->
  <!-- Touch start-->

  </div>
  </div>
  <!-- Touch end-->
  <!-- contact start-->
<div id="contact" class="contact_section">
  <div class="container">
    <div class="contact-taital">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="contact_text"><strong>Kontak</strong></h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7 col-md-6 col-lg-4 mb-4">
        <h2 class="adderess_text">Alamat</h2>
        <div class="image-icon">
          <img src="landingPage/images/map-icon.png" class="icon-image">
          <span class="email_text">Jl. Purnama Sari No.1, Umban Sari, Kec. Rumbai, Kota Pekanbaru, Riau 28266,
            Indonesia</span>
        </div>
        <div class="image-icon"><img src="landingPage/images/phone-icon.png"><span class="email_text">(0761)
            51764</span></div>
        <div class="image-icon"><img src="landingPage/images/email-icon.png"><span
            class="email_text">PuskesmasUmbanSari@gmail.com</span></div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
        <h2 class="adderess_text">Jadwal Puskesmas</h2>
        <div class="row">
          <div class="col-sm-6">
            <div class="image-icon"><img src="landingPage/images/bulit-icon.png"><span
                class="email_text"><strong>Senin:</strong> <br>8:00 - 14:30</span></div>
            <div class="image-icon"><img src="landingPage/images/bulit-icon.png"><span
                class="email_text"><strong>Selasa:</strong><br> 8:00 - 14:30</span></div>
            <div class="image-icon"><img src="landingPage/images/bulit-icon.png"><span
                class="email_text"><strong>Rabu:</strong> <br>8:00 - 14:30</span></div>
          </div>
          <div class="col-sm-6">
            <div class="image-icon"><img src="landingPage/images/bulit-icon.png"><span
                class="email_text"><strong>Kamis:</strong> <br>8:00 - 14:30</span></div>
            <div class="image-icon"><img src="landingPage/images/bulit-icon.png"><span
                class="email_text"><strong>Jumat:</strong> <br>8:00 - 11:30</span></div>
            <div class="image-icon"><img src="landingPage/images/bulit-icon.png"><span
                class="email_text"><strong>Sabtu:</strong> <br>8:00 - 13:00</span></div>
            <div class="image-icon"><img src="landingPage/images/bulit-icon.png"><span
                class="email_text"><strong>Minggu:</strong> tutup</span></div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
        <h2 class="adderess_text">Media Sosial</h2>
        <div class="image-icon"><img src="landingPage/images/bulit-icon.png"><span class="email_text">PuskesmasUmbanSari@gmail.com</span></div>
        <div class="image-icon"><img src="landingPage/images/bulit-icon.png"><span class="email_text">Siap Melayani Anda Di manapun</span>
        </div>
        <div class="image-icon"><img src="landingPage/images/bulit-icon.png"><span class="email_text">Ikuti Media Sosial Kami</span></div>
        <div class="social_icon">
          <ul>
            <li><a href="https://www.facebook.com/PuskesmasUmbasari/"><img src="landingPage/images/fb-icon.png"></a></li>
            <li><a href="https://www.instagram.com/pkm.umbansari?igsh=enlvZ2F5dnNmdWs5"><img src="landingPage/images/twitter-icon.png"></a></li>
            <li><a href="https://www.facebook.com/PuskesmasUmbasari"><img src="landingPage/images/google-icon.png"></a></li>
            <li><a href="https://www.instagram.com/pkm.umbansari?igsh=enlvZ2F5dnNmdWs5"><img src="landingPage/images/linkedin-icon.png"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>



  </div>
  </div>
  </div>
  <!-- contact end-->
  <!-- copyright start-->
  <div class="copyright_section">
    <div class="container">
      <div class="row">

      </div>
    </div>
  </div>


  <!-- copyright end-->
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap JS (with Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


  <!-- Javascript files-->
  <script src="landingPage/js/jquery.min.js"></script>
  <script src="landingPage/js/popper.min.js"></script>
  <script src="landingPage/js/bootstrap.bundle.min.js"></script>
  <script src="landingPage/js/jquery-3.0.0.min.js"></script>
  <script src="landingPage/js/plugin.js"></script>
  <!-- sidebar -->
  <script src="landingPage/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="landingPage/js/custom.js"></script>
  <!-- javascript -->
  <script src="landingPage/js/owl.carousel.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script>
    $(document).ready(function () {
      $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
      });

      $(".zoom").hover(function () {

        $(this).addClass('transition');
      }, function () {

        $(this).removeClass('transition');
      });
    });
  </script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: { lat: 40.645037, lng: -73.880224 },
      });

      var image = 'images/location_point.png';
      var beachMarker = new google.maps.Marker({
        position: { lat: 40.645037, lng: -73.880224 },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
  <!-- end google map js -->




</body>

</html>