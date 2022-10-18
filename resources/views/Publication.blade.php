@extends('layouts.app')
@section('content')


<div class="container"><br>
    <h1 class="text-success text-center">Your Publications</h1><br>
    <table  class="table table-bordered">
        <tr class="">
            <th>Publication Title</th>
            <th>Publication Status</th>
            <th>Year</th>
            <th>More Actions</th>
        </tr>
        @foreach($data as $value)
        <tr>
            <td> {{ $value ->title}}</td>
            <td>{{ $value ->status}}</td>
            <td>{{ $value ->year}}</td>
            <td><a href=""><button>Edit</button></a>&nbsp;<a href=""><button>Delete</button></a></td>
        </tr>
        @endforeach

    </table>
    <button class="btn btn-info" data-toggle="collapse" data-target="#demo">Add more publications here</button> <button class="btn btn primary"><a href="home">Go Back to Dashboard</a></button><br>
    <div id="demo" class="collapse">
    <h3 class="text-success text-center">Complete your publication's detail</h3><br>
    <div class="col-md-offset-3 col-md-6 m-auto d-block">
        <form action="pub" method="post">

            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div>
                <div class="form-group">
                    <label>Title </label>
                    <input type="text" name="title" id="" class="form-control">

                </div>

                <div class="form-group">
                    <label>Conference / General </label>
                    <div class="radio form-control">
                        <label class="col-md-4"><input type="radio" name="status" value="conf" >Conference</label>

                        <label class="col-md-4"><input type="radio" name="status"  value="general">General</label>
                        <label><input type="radio" name="status" value="other" >Other</label>
                        </div>
                </div>

                <div class="form-group">
                    <label>Year: </label>
                    <input type="number" name="year" id="" class="form-control">
                </div>
            </div>

            <div>
                <input type="submit" name="submit" value="ADD!" class="btn btn-lg col-md-offset-3 col-md-6 m-auto d-block">
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>

    </div>
    </div><!--end demo-->


    @endsection