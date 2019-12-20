@extends('layouts.app')
@section('content')
    <div class="blogs__wrapper container-fluid mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="pt-5">REAL ESTATE INFORMATION</h2>
                </div>
            </div>
        </div>
    </div><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>Blogs</h4>
                <hr>
            </div>
        </div><br>
        <div class="row">
            @if (count($blogs) > 0)
                @foreach ($blogs as $blog)
                    <div class="col-md-4">
                        <img src="{{ asset('images/house.jpeg') }}" class="img-fluid house" alt="">
                        <h4 class="text-center pt-4">{{ $blog->title }}</h4>
                        <p>{{ $blog->description }}</p>
                        <a href="/blogs/{{$blog->id}}" class="more__btn">See Details</a>
                        <br><br>
                    </div>
                @endforeach
                {{ $blogs->links() }}
                @else
                <div class="container">
                    <small>No blog bost was found. Check back later</small>
                </div>
            @endif
        </div><br><br>
    </div>
@endsection
