
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

  <main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Portfolio Details</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="pengalamann">Portfolio</a></li>
        <li>Portfolio Details</li>
      </ol>
    </div>

  </div>
</section><!-- Breadcrumbs Section -->

<!-- ======= Portfolio Details Section ======= -->
<section class="portfolio-details">
  <div class="container">

    <div class="portfolio-details-container">

      <div class="owl-carousel portfolio-details-carousel">
      @foreach($pengalaman as $d)
        <img src="{{ url('/pengalaman/'.$d->foto1) }}"  class="img-fluid" alt="">
        <img src="{{ url('/pengalaman/'.$d->foto2) }}"   class="img-fluid" alt="">
        <img src="{{ url('/pengalaman/'.$d->foto3) }}"  class="img-fluid" alt="">
      </div>

      <div class="portfolio-info">
        <h3>Informasi Proyek</h3>
        <ul>
          <li><strong>Judul</strong>: {{$d->judul}}</li>
          <li><strong>Klien</strong>: {{$d->klien}}</li>
          <li><strong>Tahun Pelaksanaan</strong>: {{$d->tahun}}</li>
          <li><strong>Tempat</strong>: {{$d->alamat}}</li>
        </ul>
      </div>

    </div>

    <div class="portfolio-description">
      <h2>Keterangan</h2>
      <p>
        {{$d->keterangan}}
      </p>
    </div>
  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

  <!--==========================
    Footer
  ============================-->
  @endforeach
  @endsection
