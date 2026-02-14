@extends('layout.master')
@section('title')
    Edit Kategori
@endsection
@section('content')

    <form action="/categories/{{$categories->id}}" method="POST">
        @csrf

        @method("PUT")

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


  <div class="mb-3">
    <label class="form-label">Category</label>
    <input type="text" class="form-control" value="{{$categories->name}}" name="name">
  </div>

  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control" cols="30" rows="10">{{$categories->description}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Ubah</button>
</form>
@endsection
        