@extends('layouts.CSSHome')

    @section('content')
        {{ csrf_field() }}
        {{--@foreach($productDetail as $b)--}}
            {{--{{$b->name}}--}}
        {{--@endforeach--}}
        {{$productDetail->ProductName}}
    @endsection
