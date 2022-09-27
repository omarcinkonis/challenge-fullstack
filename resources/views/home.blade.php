@extends('layouts.app')

@section('content')
<div class="container">
    <x-comments :data="$data"/>
</div>
@endsection
