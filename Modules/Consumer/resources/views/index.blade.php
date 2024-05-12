@extends('consumer::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('consumer.name') !!}</p>
@endsection
