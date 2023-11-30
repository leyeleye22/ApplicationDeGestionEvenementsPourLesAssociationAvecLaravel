@extends('layout.nav')

@section('nav')
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    Announcing our next round of funding. <a href="#" class="font-semibold text-indigo-600"><span
                            class="absolute inset-0" aria-hidden="true"></span>Read more <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Data to enrich your online
                    business</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui
                    irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                        started</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
    </div>

    <div class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32>
                <h2 class="text-4xl
                font-bold text-gray-900">Collections</h2>
                @php
                    $firstThreeEvens = $evens->take(3);
                @endphp

                <div class="flex flex-wrap -mx-2 overflow-hidden sm:-mx-2 md:-mx-2 lg:-mx-2 xl:-mx-2">
                    @foreach ($firstThreeEvens as $even)
                        <div
                            class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-2 md:px-2 md:w-1/2 lg:my-2 lg:px-2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/3">
                            <div class="group relative">
                                <div
                                    class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                    <img src="{{ asset('images/' . $even->image) }}"
                                        alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                        class="h-full w-full object-cover object-center">
                                </div>
                                <h3 class="mt-6 text-sm text-gray-500">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        {{ $even->libelle }}
                                    </a>
                                </h3>
                                <p class="text-base font-semibold text-gray-900">{{ $even->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
