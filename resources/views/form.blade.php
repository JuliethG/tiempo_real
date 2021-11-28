@extends('layouts.app')
@section('title')
    Search
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="mx-auto col-8 mt-5">
            <img class="rounded mx-auto d-block col-4 mt-5"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Sena_Colombia_logo.svg/1045px-Sena_Colombia_logo.svg.png"
                alt="Logo-SENA">
            <input class="form-control col-10" type="search" id="search" placeholder="Search" id="search">
        </div>
    </div>
</div>
@endsection
