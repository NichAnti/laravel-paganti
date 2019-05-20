@extends('layouts.pagantiLayout')

@section('content')

  <!-- @include('pagesElements.pagantiInfo') -->

  @foreach ($paganti as $pagante)

  <li>{{ $pagante->id }} - {{ $pagante->name}} - {{ $pagante->lastname}}</li>

  @endforeach

@stop
