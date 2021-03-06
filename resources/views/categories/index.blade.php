@extends('layout')

@section('content')

    <br><br><h1 class="title">Kategorije</h1>

    @include('message')

    <br>
    <div class="displayItems" style="color: #9d0006">
        <div class="name">Naziv</div>
        <div class="description">Opis</div>
    </div>
    <br>
    @foreach($category as $item)
        <div class="displayItems">
            <a class="name" href="/categories/{{ $item->id }}">{{ $item->name }}</a>
            <div class="description"> {{ $item->description }} </div>
        </div>
    @endforeach

    <div class="pagination">
        {{ $category->links() }}
    </div>
@endsection
