@extends('base')


@section('content')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="text-align:center;">Registration Form</h3>
                </div>

                <div class="card-body">
                    <form action="{{url('/register')}}" method="post">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                        <button class="btn btn-success form-control" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@stop