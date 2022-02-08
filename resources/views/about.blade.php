@extends('layouts/main')

@section('container')
    <h1> About Me </h1>
    <h2><?= $name ?></h2>
    <p><?= $email ?></p>
    <img src="img/<?= $image ?>" alt="<?= $name ?>" width="200" class="img-thumnail rounded-circle">    
@endsection