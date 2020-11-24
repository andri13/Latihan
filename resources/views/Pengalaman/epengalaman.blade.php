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
  <a class="btn btn-primary" href="/tambahpeng"> + Tambah pengalaman</a>
	
	<br/>
	<br/>
	<h2 class="text-center my-5">Pengalaman</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Judul</th>
			<th>foto1</th>
			<th>Foto2</th>
			<th>Foto3</th>
      		<th>Alamaat</th>
      		<th>Tahun</th>
      		<th>Keterangan</th>
			  <th>Action</th>

		</tr>
		<?php $no=0;?>
		@foreach($pengalaman as $d)
		<?php $no++;?>
		<tr>
			<td>{{$no}}
			<td>{{ $d->kategori }}</td>
			<td>{{ $d->judul }}</td>
			<td><img  width="150px" src="{{url('pengalaman/'.$d->foto1)}}"></td>
			<td><img  width="150px" src="{{url('pengalaman/'.$d->foto2)}}"></td>
			<td><img  width="150px" src="{{url('pengalaman/'.$d->foto3)}}"></td>
			<td>{{ $d->alamat }}</td>
			<td>{{ $d->tahun }}</td>
			<td>{{ $d->keterangan}}</td>

				
			<td>
				<a class="btn btn-danger" href="/editpeng{{ $d->id_pengalaman }}">Edit</a>
				
				<a class="btn btn-danger" href="/hapuspeng{{ $d->id_pengalaman }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	
  <!--==========================
    Footer
  ============================-->
  
  @endsection