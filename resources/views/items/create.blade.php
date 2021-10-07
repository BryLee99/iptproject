@extends('base')

@section('content')

<div class="mt-5">
  <div>
    <form action="{{ route('items.store') }}" method="post">
      @csrf
      <div class="mb-3">
        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
      </div>
      <div class="mb-3">
        <input type="text" name="description" id="description" class="form-control"  placeholder="Description">
      </div>
      <div class="mb-3">
        <input type="text" name="price" id="price" class="form-control" placeholder="Price">
      </div>
      <div class="mb-3">
        <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
      </div>
      <button class="btn btn-primary" type="submit">Add</button>
    </form>
  </div>
</div>

@endsection