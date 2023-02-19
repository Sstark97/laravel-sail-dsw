@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($date as $key => $field)
        <p>{{ ucfirst($key) }}: {{ $field }}</p>
    @endforeach
</div>
@endsection
