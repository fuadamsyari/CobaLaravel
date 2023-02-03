@extends('layout.main')
@section('title', 'Ubah Data Mahasiswa')
@section('container')
<div class="container">
    <div class="row mt-3">
      <div class="col-8">
        <h1 class="mt-3" >Ubah Data Data Mahasiswa</h1>
        <form method="post" action="{{url('/students/'. $student->id)}}" >
            @method('patch')
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukan Nama" value="{{$student->nama}}">
              @error('nama')
              <div id="nama" class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="nrp">NRP</label>
              <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="Masukan NRP" value="{{$student->nrp}}">
              @error('nrp')
              <div id="nrp" class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan Email" value="{{$student->email}}">
              @error('email')
              <div id="email" class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Masukan Jurusan" value="{{$student->jurusan}}">
              @error('jurusan')
              <div id="jurusan" class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </form>
      </div>
    </div>
</div>
@endsection
