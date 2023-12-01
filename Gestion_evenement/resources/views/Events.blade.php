@extends('layout.nav')

@section('nav')
    <div class="relative wrap overflow-hidden p-10 h-full">
        <div class="border-2-2 border-black-555 absolute h-full border"
            style="right: 50%; border: 2px solid #FFC100; border-radius: 1%;"></div>
        <div class="border-2-2 border-black-555 absolute h-full border"
            style="left: 50%; border: 2px solid #FFC100; border-radius: 1%;"></div>

        <div class="container mx-auto w-full h-full">
            <div class="events-timeline">
                @foreach ($evens as $index => $even)
                    @if ($index % 2 === 0)
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1 w-5/12 px-1 py-4 text-right">
                                <p class="mb-3 text-base text-black-300">{{ $even['date_evenement'] }}</p>
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">{{ $even['libelle'] }}</h4>
                                <p class="text-sm md:text-base leading-snug text-black-50 text-opacity-100">
                                    {{ $even['description'] }}</p>
                            </div>
                        </div>
                    @else
                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1 w-5/12 px-1 py-4 text-left">
                                <p class="mb-3 text-base text-black-300">{{ $even['date_evenement'] }}</p>
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">{{ $even['libelle'] }}</h4>
                                <p class="text-sm md:text-base leading-snug text-black-50 text-opacity-100">
                                    {{ $even['description'] }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
