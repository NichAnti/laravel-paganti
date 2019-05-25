@foreach ($paganti as $pagante)

<li>{{ $pagante->id }} - {{ $pagante->name}} - {{ $pagante->lastname}}</li>

@endforeach
