@extends('layouts.app')

@section('page-title')
    Products
@endsection

@section('main-content')



<main>
    <section class="list-products">
        @foreach ($data as $item)
            <article class="cards">
                <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                <h4>{{ $item['series'] }}</h4>
            </article>
        @endforeach
    </section>
</main>



@endsection
