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


  
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Kontak Kami</h3>
          <p></p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Alamat</h3>
              <address>Jl. Batik Kumeli No.8, Sukaluyu, Cibeunying Kaler, Bandung 40123</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Nomor Telepon</h3>
              <p><a href="tel:02220462363">022-20462363</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:karno.corporation@yahoo.com">karno.corporation@yahoo.com</a></p>
              <p><a href="mailto:karno.corporation2013@gmail.com">karno.corporation2013@gmail.com</a></p>
            </div>
          </div>


           
        
          <div class="col-lg-8 mx-auto my-5">	
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9410600281185!2d107.62974911477271!3d-6.897653195015884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7b0157006a5%3A0x1b0800fc3b55a198!2sJl.%20Batik%20Kumeli%20No.8%2C%20Sukaluyu%2C%20Kec.%20Cibeunying%20Kaler%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040123!5e0!3m2!1sid!2sid!4v1595307890519!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="tambahpesan" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subjek" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <input type="submit" value="Upload" class="btn btn-primary">
           
          </form>

         
      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
@endsection
