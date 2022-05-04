@extends('layouts.api')
@section('header')
<div id="intro" class="p-5 text-center bg-light">
    <h1 class="mb-3 h2">Hoşgeldiniz...</h1>
</div>
@endsection
@section('orta')
@livewire('blog.index')
@endsection
