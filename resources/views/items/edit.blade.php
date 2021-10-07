@extends('base')

@section('navbar')

<nav class="navbar navbar-expand-lg navbar-light bs bg-light">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ url('/items') }}">Prelim App</a>
    <form class="d-flex">
      <ul class="navbar-nav">
        <a class="btn btn-danger" href="{{ url('/logout') }}">Logout</a>
      </ul>
    </form>
  </div>
</nav>

@endsection

@section('content')

<div class="mt-5">
  <div>
    <form method="post" action="/items/{{ $item->id }}">
        {{ csrf_field() }}
        @method('put')
      <div class="mb-3">
        <input type="text" name="name" id="name" value="{{ $item->name }}" class="form-control" placeholder="Name" required>
      </div>
      <div class="mb-3">
      <input type="text" name="description" id="description"  value="{{ $item->description }}" class="form-control"  placeholder="Description">
      </div>
      <div class="mb-3">
        <input type="number" name="price" id="price" value="{{ $item->price }}" class="form-control" placeholder="Price" required>
      </div>
      <div class="mb-3">
        <input type="number" name="quantity" id="quantity" value="{{ $item->quantity }}" class="form-control" placeholder="Quantity" required>
      </div>
      <button class="btn btn-warning" type="submit">Edit</button>
    </form>
  </div>
</div>

@endsection