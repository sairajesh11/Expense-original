@extends('layouts.app')
@section('content')

foreach ($users as $user) {
    echo $user->name;
}

@endsection