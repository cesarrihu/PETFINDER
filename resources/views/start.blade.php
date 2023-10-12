@extends('layouts.app3')

@section('title')
@endsection
<style>
    .background-image {
        background-image: url('/img/startImage2.png'); 
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%; 
        height: 100vh;
    }

    @media (max-width: 768px) {
        .background-image {
            background-size: contain; 
        }
    }
</style>
@section('content')

    <div class="background-image d-flex">
    </div>
@endsection

