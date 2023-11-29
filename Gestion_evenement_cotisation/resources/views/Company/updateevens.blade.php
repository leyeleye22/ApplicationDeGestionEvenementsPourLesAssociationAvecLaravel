@extends('Company.navcom')
@section('nav')
    <div class="flex items-center justify-center p-12">
        <div>
            <img src="{{ asset('images/' . $even->image) }}" alt="">
        </div>
        <div class="mx-auto w-full max-w-[550px]">
            <form action="/send/even" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="-mx-3 flex flex-wrap">
                    <input type="hidden" name="association" value="{{ $even->id }}">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                Libelle
                            </label>
                            <input type="text" name="libelle" id="libelle" placeholder="libelle"
                                value="{{ $even->libelle }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                Date de l'événement
                            </label>
                            <input type="date" name="dateevement" id="date" value="{{ $even->date_evenement }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]">
                        Description
                    </label>
                    <textarea type="number" id="guest" placeholder="5" min="0" name="description"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">{{ $even->description }}</textarea>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                Date de clôture des inscriptions
                            </label>
                            <input type="date" name="closing_date" id="closing_date"
                                value="{{ $even->date_limite_inscription }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="logo" class="mb-3 block text-base font-medium text-[#07074D]">
                                Logo
                            </label>
                            <input type="file" name="logo" id="logo"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <label class="mb-3 block text-base font-medium text-[#07074D]">
                        Clotured ur even?
                    </label>
                    <div class="flex items-center space-x-6">
                        <div class="flex items-center">
                            <input type="radio" name="clotured" id="radioButtonYes" class="h-5 w-5" value="oui" />
                            <label for="radioButtonYes" class="pl-3 text-base font-medium text-[#07074D]">
                                Yes
                            </label>
                            <input type="radio" name="clotured" id="radioButtonNo" class="h-5 w-5" value="non" />
                            <label for="radioButtonNo" class="pl-3 text-base font-medium text-[#07074D]">
                                Non
                            </label>

                        </div>
                    </div><br>
                    <button
                        class="middle none center rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-light="true" type="submit">Modifier</button>
                </div>

            </form>
        </div>
    </div>
@endsection
