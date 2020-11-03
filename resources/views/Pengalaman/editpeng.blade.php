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
 
	  @foreach($pengalaman as $d)
  	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $d->id_pengalaman }}"> <br/>
          <div class="form-group">
						<b>Kategiri</b><br/>
            <input type="text" class="form-control" required="required" name="nama" value="{{ $d->kategori }}">
					</div>
          <div class="form-group">
						<b>Judul</b><br/>
						<input type="text" class="form-control" required="required" name="judul" value="{{ $d->judul }}" >
					</div>
					<div class="form-group">
						<b>Gambar kegiatan 1</b><br/>
						<input type="file"  name="foto1" value="{{ $d->foto1 }}" >
					</div>
          <div class="form-group">
						<b>Gambar kegiatan 2</b><br/>
						<input type="file" name="foto2">
					</div>
          <div class="form-group">
						<b>Gambar kegiatan 3</b><br/>
						<input type="file" name="foto3">
					</div>
          <div class="form-group">
						<b>Alamat</b><br/>
						<input type="text" class="form-control" required="required" name="alamat" value="{{ $d->alamat }}"> <br/>
					</div>
          <div class="form-group">
						<b>Tahun Kegiatan</b><br/>
						<input type="text" class="form-control" required="required" name="tahun"value="{{ $d->tahun }}"> <br/>
					</div>
 
					<div class="form-group">
						<b>Keterangan</b>
						<input type="text" class="form-control"  name="keterangan" value="{{ $d->keterangan }}"> <br/>
					</div>
 
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>

	</form>
	@endforeach
  </div>
  </div>
  </div>

    @endsection

