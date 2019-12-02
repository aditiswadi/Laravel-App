@extends('layout/main');

@section('title', 'Daftar Mahasiswa')

@section('container')

<div class="container">
	<div class="row">
		<div class="col">
			<h2>Daftar Mahasiswa</h2>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">NRP</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Email</th>
			      <th scope="col">Jurusan</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($mahasiswa as $mhs)
			    <tr>
			      <th scope="row">{{$loop->iteration}}</th>
			      <td>{{$mhs->nrp}}</td>
			      <td>{{$mhs->nama}}</td>
			      <td>{{$mhs->email}}</td>
			      <td>{{$mhs->jurusan}}</td>

			      <td>
			      	<a href="" class="badge badge-succes">edit</a>
			      	<a href="" class="badge badge-danger">hapus</a>
			      </td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>

@endsection