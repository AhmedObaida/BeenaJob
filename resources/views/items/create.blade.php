
@extends('layouts.app')

@section('title') Create @endsection

@section('content')


    <div class="row">
    <form action="{{route('items.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name" type="text" class="form-control" >
            <label class="form-label">price</label>
            <input name="price" type="text" class="form-control" >
        </div>
        <button type="submit" class="btn btn-success">Create Item</button>
    </form>
@endsection
