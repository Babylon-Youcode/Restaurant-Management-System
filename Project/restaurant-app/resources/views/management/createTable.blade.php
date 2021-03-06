@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('management.inc.sidebar')
             <div class="col-md-8">
                    <i class="fas fa-plus"></i> Create a Table
                    <hr>
                    @if($errors->any())
                        <div class=" alert alert-danger">
                             <ul>
                                 @foreach($errors->all() as $error)  
                                    <li>{{$error}}</li>
                                 @endforeach
                             </ul>
                        </div>
                    @endif
                <form action="/management/table" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="categoryTable">Table Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Table ... ">


                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="cancel" class="btn btn-danger" onclick="location.href = '/management/table';">Cancel</button>

                </form> 
            </div>
    </div>
</div>

@endsection