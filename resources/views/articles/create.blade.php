@extends('layout')
@section('content')
<form action="/article" method="post">
    @csrf

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Date</label>
        <input name="datePublic" type="date" class="form-control" id="">
    </div>


    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" id="" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Short description</label>
        <input name="shortDesc" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <textarea name="desc" id="" class="form-control"></textarea>

    </div>

    <button type=" submit" class="btn btn-primary">Submit</button>
</form>
@endsection