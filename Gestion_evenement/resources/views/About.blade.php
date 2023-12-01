@extends('layout.nav')

@section('nav')
    <div class="py-16 bg-white">
        @foreach ($evens as $even)
            <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                    <div class="md:5/12 lg:w-5/12">

                        <img src="{{ asset('images/' . $even->image) }}" loading="lazy" width="" height="">

                    </div>
                    <div class="md:7/12 lg:w-6/12">
                        <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">{{ $even->libelle }}</h2>
                        <p class="mt-6 text-gray-600">{{ $even->description }}</p>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
