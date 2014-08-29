@extends('layout')

@section('content')
    @foreach($users as $user)
      <p>{{ $users }}</p>
    @endforeach
@stop