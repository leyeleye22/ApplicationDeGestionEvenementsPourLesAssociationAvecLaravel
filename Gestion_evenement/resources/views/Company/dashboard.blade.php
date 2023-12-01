@extends('Company.navcom')
@section('nav')
    <br><br>
    <div class="flex flex-wrap -mx-2">
        @foreach ($evens as $even)
            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 px-2 mb-2">
                <div class="flex flex-col w-full max-w-md bg-white rounded shadow-lg sm:w-full md:w-full lg:max-w-lg">
                    <div class="w-full h-32 bg-top bg-cover rounded-t"
                        style="background-image: url({{ asset('images/' . $even->image) }})"> </div>
                    <div class="flex flex-col w-full md:flex-row">
                        <div
                            class="flex flex-row justify-around p-2 font-bold leading-none text-gray-800 uppercase bg-gray-400 rounded md:flex-col md:items-center md:justify-center md:w-1/4">
                            <div class="md:text-xl">{{ \Carbon\Carbon::parse($even->date_evenement)->format('M') }}</div>
                            <div class="md:text-3xl">{{ \Carbon\Carbon::parse($even->date_evenement)->format('d') }}
                            </div>
                            <div class="md:text-xl">{{ \Carbon\Carbon::parse($even->date_evenement)->format('Y') }}</div>
                        </div>
                        <div class="p-2 font-normal text-gray-800 md:w-3/4">
                            <h1 class="mb-2 text-2xl font-bold leading-none tracking-tight text-gray-800">
                                {{ $even->libelle }}</h1>
                            <p class="text-sm leading-normal"> {{ $even->description }}</p>
                            <div class="flex flex-row items-center mt-2 text-gray-700">
                                <a href="/viewmore/{{ $even->id }}"
                                    class="middle none center rounded-lg bg-gray-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                    data-ripple-light="true">Voir plus</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
