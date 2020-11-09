
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
  <a class="btn btn-danger" href="/eteam"> Kembali</a>
	
	<body>
	<div class="row">
		<div class="container">
 
			<h2 class="text-center my-5">Tambah Personil</h2>
			
			<div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="tambahteam" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
				
                  <div class="form-group">
                    <label for="texs">Nama</label>
                    <th><input type="text" class="form-control" name="nama"required></th>
                  </div>

                  <div class="from-group">
                    <label for="texs">Jabatan</label>
                    <th><input type="text" class="form-control" name="jabatan"required></th>
                  </div>

				          <div class="form-group">
                     <b>File Gambar</b><br/>
                    <input type="file" name="foto">
                  </div>
                  
                  <div>
                    <label for="texs">Deskripsi</label>
                    <th><input type="text" class="form-control" name="deskripsi"></th>
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

  