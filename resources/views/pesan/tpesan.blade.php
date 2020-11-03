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

  <h2 class="text-center my-5">Pesan</h2>
	<br/>
    
	<br/>
 
	<table class="table table-bordered table-striped">
    
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Subjek</th>
			<th>Pesan</th>
			
			  <th>Action</th>

		</tr>
		@foreach($pesan as $d)
		
		<tr>
   
			<td>{{ $d->nama }}</td>
			<td>{{ $d->email }}</td>
			
			<td>{{ $d->subjek }}</td>
			<td>{{ $d->pesan}}</td>

				
			<td>

				<a class="btn btn-danger" href="mailto:{{ $d->email }}">Balas</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection