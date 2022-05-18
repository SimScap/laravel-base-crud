@extends('layouts.main')

@section('title', 'Info')   

@section('main-content')
<main>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12">
                <h6 class="card-subtitle mb-2 ">{{$comics->title}}</h6>
            </div>
        </div>
    </div>
</main>
@endsection