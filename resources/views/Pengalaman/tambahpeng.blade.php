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
	
	<body>
	<div class="row">
		<div class="container">
 
			<h2 class="text-center my-5">Tambah Pengalaman</h2>
			
			<div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="tambahpengalaman" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}


          <div class="form-group">
						<b>Kategori</b><br/>
						<input type="text" required="required" class="form-control" name="kategori">
					</div>
          <div class="form-group">
						<b>Judul</b><br/>
						<input type="text" required="required" class="form-control" name="judul">
					</div>
					<div class="form-group">
						<b>Gambar kegiatan 1</b><br/>
						<input type="file" name="foto1">
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
						<b>Kliean</b><br/>
						<input type="text" required="required" class="form-control" name="klien">
					</div>
         		 <div class="form-group">
						<b>Alamat</b><br/>
						<input type="text" required="required" class="form-control" name="alamat">
					</div>
          <div class="form-group">
						<b>Tahun Kegiatan</b><br/>
						<input type="text"required="required" class="form-control" name="tahun">
					</div>
 
					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
 
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
				
			</div>
		</div>
	</div>
</body>

  <!--==========================
    Footer
  ============================-->
  
  @endsection
