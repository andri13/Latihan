@extends ('master.edit')
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
    <a class="btn btn-danger" href="/epengalaman"> Kembali</a>
	
	<br/>
	<br/>
  <div class="row">
		<div class="container">
    <h2 class="text-center my-5">Edit Pengalaman</h2>
    <div class="col-lg-8 mx-auto my-5">	
 
	  @foreach($team as $d)
  	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $d->id_team }}"> <br/>
          <div class="form-group">
						<b>Nama</b><br/>
            <input type="text" class="form-control" required="required" name="nama" value="{{ $d->nama }}">
					</div>
          <div class="form-group">
						<b>Judul</b><br/>
						<input type="text" class="form-control" required="required" name="jabatan" value="{{ $d->jabatan }}" >
					</div>
					<div class="form-group">
						<b>Gambar kegiatan 1</b><br/>
						<input type="file"  name="foto" value="{{ $d->foto }}" >
					</div>
 
					<div class="form-group">
						<b>Desktipsi</b>
						<input type="text" class="form-control"  name="dedkripsi" value="{{ $d->deskripsi }}"> <br/>
					</div>
 
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>

	</form>
	@endforeach
  </div>
  </div>
  </div>

    @endsection

