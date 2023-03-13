@extends('layouts.app')
@section('content')
    <div class="container py-5 px-5">
        @if ($page->layout == 'Sidebar')
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="mb-4">{{ $page->title }}</h1>
                            {!! $page->content !!}
                        </div>
                    </div>
                    <div class="col-md-4"
                        style=" background-image: urL('/storage/{{ $page->image }}'); background-size: cover; background-position: center; ">
                    </div>

                </div>
            </div>
        @elseif ($page->layout == 'Blog')
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <img class="card-img-top" src="/storage/{{ $page->image }}" alt="Title">
                        <div class="card-body">
                            <h1 class="mb-4">{{ $page->title }}</h1>
                            {!! $page->content !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="list-group list-group-numbered">
                        <li class="list-group-item active">Active item</li>
                        <li class="list-group-item">Item</li>
                        <li class="list-group-item disabled">Disabled item</li>
                    </ul>
                </div>
            </div>
        @else
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h1 class="mb-4">{{ $page->title }}</h1>
                            {!! $page->content !!}
                        </div>
                    </div>

                </div>
            </div>
        @endif




    </div>
    <section class="py-5 bg-secondary" id="calltoaction">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center ">
                <div class="col-md-8 ms-5 ">

                    <p class="text-white fs-2">{{ __('frontend.mitra') }}</p>

                </div>
                <div class="d-grid gap-2 col-md-3 p-4 me-5 ">
                    <button class="btn btn-primary btn-lg " type="button ">{{ __('frontend.kontak') }}</button>

                </div>
            </div>
        </div>


    </section>
    <style>
        article p {
            font-size: 14pt;
        }
    </style>
@endsection
