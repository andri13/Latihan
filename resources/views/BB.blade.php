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
            <li>Energi</li>
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
          <h3>Energi</h3>
          <p>Untuk saat ini, layanan utama dari KARNO Corporation adalah pengadaan barang dan jasa, training dan pelatihan, serta mulai merambah ke bidang pengelolaan sampah dan biomassa.
          </p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a>Kajian dan karakterisasi sampah</a></h4>
            <p class="description">Untuk mengkaji dan mendapatkan karakteristik sampah dari lokasi kajian sebagai data untuk rekomondasi penglahan sampah dari lokasi kajian.</p>
          

        </div>

        <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-paper-outline"></i></div>
          <h4 class="title"><a>Feasibility study dan detailed engineering disign</a></h4>
          <p class="description">Unntuk mendapatkan gambaran kelayakan dari segi ekonomi, sosial, budaya, dan lingkungan terhadap pembangunan fasilitas pengolahan sampah di lokasi kajian.</p>
        

      </div>

      <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
        <div class="icon"><i class="ion-ios-paper-outline"></i></div>
        <h4 class="title"><a>Pembangunan fasilitas pengolahan sampah dan pengawasan</a></h4>
        <p class="description">Untuk membangun pasilitas pengolahan sampah dan pengawasan di loksi kajian sesuai acuan DED (Detailed Engineering design), melakukan pendampingan dalam mengolah sampah hingga mendapatkan produk biomassa sesuai acuan FS (Feasbility Study).</p>

    </div>

        <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-paper-outline"></i></div>
          <h4 class="title"><a>Keunggulan</a></h4>
          <p class="description">1. Sampah menjadi tidak bau
            2. Sampah tidak dikelilingi lalat
            3. Sampah tidak mengeluarkan air lindi
            4. Volume sampah berkurang hingga 50%
            5. Waktu pemrosesan hanya 5-10 hari
           6. Memiliki produk yang bermanfaat seperti pellet dan briket
            </p>
        </div>
        </div>

      </div>

      </div>
    </section><!-- #services -->

   
  </main>

  <!--==========================
    Footer
  ============================-->
  @endsection
