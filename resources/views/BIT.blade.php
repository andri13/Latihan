@extends ('master.layout')
@section ('content')

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

       
      </div>
    </div>
  </section><!-- #intro -->

  <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2></h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="layanan">Layanan</a></li>
            <li>IT (Teknologi Informasi)</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->


  <main id="main">

    

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>IT (Teknologi Informasi)</h3>
          <p>Untuk saat ini, layanan dari KARNO Corporation melabrkan sayap merambah ke bidang Teknologi Informasi (IT) yang melakukan kerjasama dengan software house magnesoft.
          </p>
        </header>

        <div class="row">

         
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-android-phone-portrait"></i></div>
            <h4 class="title"><a>Aplikasi Android</a></h4>
            <p class="description">Membangun aplikasi untuk android dengan manajemen data akses yang baik</p>
          </div>

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-monitor-outline"></i></div>
            <h4 class="title"><a>Aplikasi Web</a></h4>
            <p class="description">Membangun sistem informasi berbasis Web dengan tampilan menarik dan sistem yang baik, menggunakan pemograman PHP</p>
          </div>

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ipad"></i></div>
            <h4 class="title"><a>Aplikasi iOS</a></h4>
            <p class="description">Membangun aplikasi untuk sistem operasi iOS dengan Swift</p>
          </div>

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a>konsultan IT</a></h4>
            <p class="description">Kami dengan senang hati mendengarkan cerita anda, dan kami siap menggali permasalahan untuk membatu memberikan solusi </p>
          </div>
          
        </div>

      </div>
    </section><!-- #services -->

   
  </main>

  <!--==========================
    Footer
  ============================-->
 @endsection