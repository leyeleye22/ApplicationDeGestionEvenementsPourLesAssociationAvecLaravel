@extends('Clients.navcli')
@section('nav')
    <div class="mb-10 sm:mb-0 mt-10 grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($evens as $even)
            <div
                class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                <img class="w-20 h-20 object-cover object-center rounded-full" src="{{ asset('images/' . $even->image) }}"
                    alt="cuisine" />
                <h4 class="text-white text-2xl font-bold capitalize text-center">{{ $even->libelle }}</h4>
                <p class="text-white/50">Date limite d'isncription:{{ $even->date_limite_inscription }}</p>
                <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">22 Online <span
                        class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse"></span></p>
                @if (Carbon\Carbon::now()->lessThan($even->date_limite_inscription))
                    <a href="/reservation/{{ $even->id }}/{{ Auth::user()->id }}"
                        class="middle none center rounded-lg bg-orange-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-light="true">Reserver votre place</a>
                @else
                    <button
                        class="middle none center rounded-lg bg-gray-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-500/20 transition-all hover:shadow-lg hover:shadow-gray-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        disabled>Inscription clôturée</button>
                @endif

            </div>
        @endforeach



    </div>
@endsection
