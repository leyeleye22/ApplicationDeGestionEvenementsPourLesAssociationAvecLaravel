@extends('Company.navcom')
@section('nav')
    <br><br><br><br><br><br><br>
    <div class="flex flex-col w-full mt-20 bg-white rounded shadow-lg sm:w-3/4 md:w-1/2 lg:w-3/5">
        <div class="w-full h-64 bg-top bg-cover rounded-t"
            style="background-image: url({{ asset('images/' . $even->image) }})">
        </div>
        <div class="flex flex-col w-full md:flex-row">
            <div
                class="flex flex-row justify-around p-4 font-bold leading-none text-gray-800 uppercase bg-gray-400 rounded md:flex-col md:items-center md:justify-center md:w-1/4">
                <div class="md:text-3xl">{{ \Carbon\Carbon::parse($even->date_evenement)->format('M') }}</div>
                <div class="md:text-6xl">{{ \Carbon\Carbon::parse($even->date_evenement)->format('d') }}</div>
                <div class="md:text-xl">{{ \Carbon\Carbon::parse($even->date_evenement)->format('Y') }}</div>
            </div>
            <div class="p-4 font-normal text-gray-800 md:w-3/4">
                <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800">{{ $even->libelle }}</h1>
                <p class="leading-normal">{{ $even->description }}</p>
                <div class="flex flex-row items-center mt-4 text-gray-700">
                    <div class="flex flex-row items-center mt-2 text-green-700 mr-2">
                        <a href="/update/{{ $even->id }}"
                            class="middle none center rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            data-ripple-light="true">Modifier</a>
                    </div>
                    <div class="flex flex-row items-center mt-2 text-red-700">
                        <a href="/delete/{{ $even->id }}"
                            class="middle none center rounded-lg bg-red-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            data-ripple-light="true">Supprimer</a>
                    </div>
                    <a href="/dash" class="w-1/2 flex justify-end">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
