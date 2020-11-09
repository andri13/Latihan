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

    

    <!-- ======= Portfolio Section ======= -->
     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100"">
      <div class=" col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>
      
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
         @foreach ($pengalaman as $d)
        <div class="col-lg-4 col-md-5 portfolio-item filter-app">
          <div class="portfolio-wrap">
           <div class="portfolio-info">
              <h4><a href="lengkapp{{ $d->id_pengalaman }}">{{$d->kategori}}</a></h4>
            </div>
            <figure>
              <img src="{{ url('/pengalaman/'.$d->foto1) }}" class="img-fluid" alt="">
              <a href="{{ url('/pengalaman/'.$d->foto1) }}"  data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="ion ion-eye"></i></a>
              <a href="lengkapp{{ $d->id_pengalaman }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-infoo">
              <p>{{$d->judul}}</p>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>

      </div>
    </section><!-- End Portfolio Section -->


  <!--==========================
    Footer
  ============================-->
  @endsection
