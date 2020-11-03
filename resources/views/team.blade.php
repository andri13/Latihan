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

   </section>
    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Tim Kami</h3>
          <p>Berikut merupakan personil manajemen KARNO Corporation :</p>
        </div>

        <div class="row">

        @foreach ($team as $d)
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="{{$d->foto}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">

                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

          <div class="col-lg-9 col-md-6 box wow bounceInUp" data-wow-delay="0.1s">
            <div class="memberh">
              <h4>{{$d->nama}}</h4>
                  <span>{{$d->jabatan}}</span>
              
            </div>
            <hr color="pink" width="90%" size="90%" noshade align="left">
            <div><p>

            </p></div>
          </div>


        @endforeach

        </div>

      </div>
    </section><!-- #team -->

   
  <!--==========================
    Footer
  ============================-->
  @endsection