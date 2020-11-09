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
  <a class="btn btn-primary" href="/formtambahteam"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
	<h2 class="text-center my-5">Personil</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Foto</th>
			<th>Deskripsi</th>
			  <th>Action</th>

		</tr>
		<?php $no = 0;?>
		@foreach($team as $d)
		<?php $no++ ;?>
		<tr>
			<td> {{$no}} </td>
			<td>{{ $d->nama }}</td>
			<td>{{ $d->jabatan }}</td>
			<td> <img  width="150px" src="{{ url('/data_file/'.$d->foto) }}"> </td>
		
			<td>{{ $d->deskripsi }}</td>
			
				
			<td>
				<a class="btn btn-danger" href="/editteam{{ $d->id_team }}">Edit</a>
				
				<a class="btn btn-danger" href="hapusteam{{ $d->id_team }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
  <!--==========================
    Footer
  ============================-->
  
  @endsection