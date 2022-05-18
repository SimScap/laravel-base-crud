@extends('layouts.main')

@section('title', 'Edit')

@section('main-content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.update', ['comic' => $comic])}}" method="post">
                    @csrf
                    @method('PUT') 
                    <div class="row g-3 flex-column">
                        <div class="col-auto">
                            <label for="title" class="col-form-label">Title</label>
                        </div>
                        <div class="col-auto">
                            <input value="{{ $comic->title }}" name="title" type="text" id="title" class="form-control" >
                        </div>
        
                        <div class="col-auto">
                            <label for="description" class="col-form-label">Description</label>
                        </div>
                        <div class="col-auto">
                            <input value="{{ $comic->description }}" name="description" type="text" id="description" class="form-control" >
                        </div>
        
                        <div class="col-auto">
                            <label for="thumb" class="col-form-label">Thumb</label>
                        </div>
                        <div class="col-auto">
                            <input value="{{ $comic->thumb }}" name="thumb" type="text" id="thumb" class="form-control" >
                        </div>
        
                        <div class="col-auto">
                            <label for="price" class="col-form-label">Price</label>
                        </div>
                        <div class="col-auto">
                            <input value="{{ $comic->price }}" name="price" type="number" id="price" class="form-control" step="0.01" min="0" max="100">
                        </div>
        
                        <div class="col-auto">
                            <label for="series" class="col-form-label">Series</label>
                        </div>
                        <div class="col-auto">
                            <input value="{{ $comic->series }}" name="series" type="text" id="series" class="form-control" >
                        </div>
        
                        <div class="col-auto">
                            <label for="sale_date" class="col-form-label">Sale Date</label>
                        </div>
                        <div class="col-auto">
                            <input value="{{ $comic->sale_date }}" name="sale_date" type="date" id="sale_date" class="form-control" >
                        </div>
        
                        <div class="col-auto">
                            <label for="type" class="col-form-label">Type</label>
                        </div>
                        <div class="col-auto">
                            <input value="{{ $comic->type }}" name="type" type="text" id="type" class="form-control mb-2" >
                            <input  type="submit" value="Invia"  >
                        </div>
                    </div>
                </form>           
            </div>
        </div>
    </div>
    
</main>
@endsection
