@extends('layouts.paganteLayout')

@section('content')

<!-- @include('pagesElements.paganteInfo') -->

<li>{{ $pagante[0]->id }} - {{ $pagante[0]->name}} - {{ $pagante[0]->lastname}}</li>

@stop
