@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection



@section('content')
<!--<h1>optional($param)->secondname</h1>-->
 @foreach($campanies as $campanie)

<!--<h1>{{ $post['secondname'] }}</h1>-->
<h1>$campanie</h1>


@endforeach

@endsection