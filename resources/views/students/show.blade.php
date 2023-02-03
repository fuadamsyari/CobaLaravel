@extends('layout.main')
@section('title', 'Detail Mahasiswa')
@section('container')
<div class="container">
    <div class="row mt-3">
      <div class="col-6">
        <h1 class="mt-3" >Daftar Mahasiswa</h1>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$student->nama}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
              <p class="card-text">{{$student->email}}</p>
              <p class="card-text">{{$student->jurusan}}</p>
              <a  href="{{url('/students/'. $student['id'] .'/edit')}}" class="btn btn-info">Edit</a>
              <form action="{{$student->id}}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                  <button type="submit" href="" class="btn btn-danger">Hapus</button>
              </form>
            </div>

        </div>
        <a href="{{url('/students')}}" class="mt-3 btn btn-primary">Back</a>
      </div>
    </div>
</div>
@endsection
