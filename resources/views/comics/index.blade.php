@extends('layouts.main')

@section('title', 'Comics')   

@section('main-content')
<main>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Thumb</th>
                            <th scope="col">Price</th>
                            <th scope="col">Series</th>
                            <th scope="col">Sale Date</th>
                            <th scope="col">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic->title}}
                            </td>
                            <td>{{ $comic->description}}</td>
                            <td>{{ $comic->thumb}}</td>
                            <td>{{ $comic->price}}</td>
                            <td>{{ $comic->series}}</td>
                            <td>{{ $comic->sale_date}}</td>
                            <td>{{ $comic->type}}</td>
                        </tr>
                        @endforeach                  
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection