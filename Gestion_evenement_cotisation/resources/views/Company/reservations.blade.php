@extends('Company.navcom')
@section('nav')
    <div class="min-h-screen bg-gradient-to-r from-sky-200 to-red-100 py-20">
        <h1 class="text-5xl font-bold text-center pb-10"><span class="text-blue-700">Upcoming</span>Event</h1>
        @foreach ($events as $even)
            <div class="max-w-6xl mx-auto flex flex-col gap-10 px-5">
                <div class="flex flex-col md:flex-row bg-white md:bg-transparent rounded-xl gap-10 mb-10">
                    <div class="flex justify-center md:justify-end">
                        <div class="w-[120px]  h-[120px] bg-white shadow-lg rounded-xl p-4 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-14 h-14 text-blue-950">
                                <path
                                    d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                                <path
                                    d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                            </svg>
                        </div>
                    </div>
                    <div
                        class=" bg-white shadow-lg rounded-xl p-4 hover:bg-gradient-to-r hover:from-red-50 hover:to-sky-50">
                        <h1 class="font-bold text-xl">{{ $even->libelle }} </h1>
                        <p>{{ $even->description }}</p>
                        <br>
                        <a href="/sowreservation/{{ $even->id }}"class="middle none center mr-3 rounded-lg border border-orange-500 py-3 px-6 font-sans text-xs font-bold uppercase text-otange-500 transition-all hover:opacity-75 focus:ring focus:ring-orange-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            data-ripple-dark="true">Voir reservation</a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
@endsection
