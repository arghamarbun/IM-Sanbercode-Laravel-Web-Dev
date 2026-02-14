@extends('layout.master')
@section('title')
    Tampil Kategori
@endsection
@section('content')

<a href="" class="btn btn-primary btn-sm my-2">Tampilkan</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($categories as $item)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$item->name}}</td>
        <td>
            <a href="/categories/{{$item->id}}" class="btn btn-sm btn-info">Detail</a></td>
        </tr>
    @empty
        
    @endforelse
    
  </tbody>
</table>
@endsection
        