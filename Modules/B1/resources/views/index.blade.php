@extends('b1::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('b1.name') !!}</p>
@endsection
