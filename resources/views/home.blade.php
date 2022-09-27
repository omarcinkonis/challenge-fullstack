@extends('layouts.app')

@section('content')
<div class="container">
    <x-comments :comments="$comments"/>
</div>
@endsection
