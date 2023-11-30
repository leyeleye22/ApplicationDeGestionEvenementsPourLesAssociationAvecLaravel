@extends('Clients.navcli')
@section('nav')
    <div class="font-manrope flex h-screen w-full items-center justify-center">
        <div class="mx-auto box-border w-[365px] border bg-white p-4">
            <div class="flex items-center justify-between">
                <span class="text-[#64748B]">Reservation</span>
                <div class="cursor-pointer border rounded-[4px]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#64748B]" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>

            <form action="/reservation" method="POST">
                @csrf
                <input type="hidden" name="ideven" value="{{ $id1 }}">
                <input type="hidden" name="iduser" value="{{ $id2 }}">
                <div class="mt-6">
                    <div class="font-semibold">Combien de place?</div>
                    <div><input class="mt-1 w-full rounded-[4px] border border-[#A0ABBB] p-2" name="places" value="1"
                            type="number" placeholder="3" /></div>
                </div>

                <div class="mt-6">
                    <div class="font-semibold">From</div>
                    <div class="mt-2">
                        <div class="flex w-full items-center justify-between bg-neutral-100 p-3 rounded-[4px]">
                            <div class="flex items-center gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#299D37]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-semibold">Checking</span>
                            </div>

                            <div class="flex items-center gap-x-2">
                                <div class="text-[#64748B]">card ending in 6678</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 cursor-pointer" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <div class="flex justify-between">
                        <span class="font-semibold text-[#191D23]">Auteur</span>
                    </div>

                    <div class="flex items-center gap-x-[10px] bg-neutral-100 p-3 mt-2 rounded-[4px]">
                        <img class="h-10 w-10 rounded-full" src="{{ asset('images/' . Auth::User()->photo) }}"
                            alt="" />
                        <div>
                            <div class="font-semibold">{{ Auth::User()->lastname }}</div>
                            <div class="text-[#64748B]">{{ Auth::User()->email }}</div>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="w-full cursor-pointer rounded-[4px] bg-green-700 px-3 py-[6px] text-center font-semibold text-white">Reserver</button>
                </div>
            </form>

        </div>
    </div>
@endsection
