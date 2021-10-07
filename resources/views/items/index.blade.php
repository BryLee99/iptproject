@extends('base')

@section('content')

<div class="mt-5">

  <a class="btn btn-primary" href="{{ route('items.create') }}" > Add Item</a>
  <div>
    <table class="table table-striped">
      <thead class="text-dark">
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
      </thead>
      <tbody>
        @foreach ($items as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->quantity }}</td>
            <td>
              <form action="{{ route('items.destroy',$item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a class="btn btn-sm" href="{{ route('items.edit',$item->id) }}">Edit</a>
                <button type="submit" class="btn btn-sm">Delete</button>
              </form>
            </td>
        </tr>
        @endforeach
      </tbody>
  
    </table>
  </div>
</div>

@endsection