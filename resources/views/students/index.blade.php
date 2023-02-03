@extends('layout.main')
@section('title', 'Mahasiswa')
@section('container')
<div class="container">
    <div class="row mt-3">
      <div class="col-6">
        <h1 class="mt-3" >Daftar Mahasiswa</h1>
        <a href="{{url('/students/create')}}" class="btn btn-success my-3">Create Data Student</a>
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        <ul class=" list-group">
            @foreach ($students as $student)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$student->nama}}
              <a href="{{ url('students/'.$student->id)}}" class="badge badge-primary badge-pill">Detail</a>
            </li>
            @endforeach
          </ul>
      </div>
    </div>
</div>
@endsection
