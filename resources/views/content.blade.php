@extends ('layout/app')
@section ('content')
<h4>User Profile</h4>
<h4>SEKARANG SAYA DARI KONTEN UNTUK {{$nama}}</h4>
{!! Form: :open(['url'=>'/proses_tambah']) !!}
NRP:
{!! Form: :text('nrp', '',['placeholder'=>'NRP','class'=>'form-control']) !!}
Nama:
{!! Form: :text('nama', '',['placeholder'=>'NRP','class'=>'form-control']) !!}
<br><br>
{!! Form: :submit('Tambah Data',['class'=>'btn btn-info']) !!}

{!! Form: :close() !!}
@endsection