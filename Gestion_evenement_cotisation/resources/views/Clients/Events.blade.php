@extends('Clients.navcli')
@section('nav')
    <div class="flex min-h-screen items-center justify-center">
        <div>
            <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
                <div role="alert"
                    class="relative block w-full text-base font-regular px-4 py-4 rounded-lg bg-gray-900 text-white flex">
                    <div class=" mr-12">
                        <p class="font-bold text-red-500">Black Friday Sale
                            <span class="text-red-300">
                                - Up to 50% off on fashion items!
                            </span>
                            <span title=""
                                class="inline-flex items-center justify-center text-sm font-bold text-red-500 transition-all ml-4 duration-200 rounded-md hover:text-red-700"
                                role="button">
                                Get Now<svg class="w-4 h-4 ml-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </span>
                        </p>
                    </div>
                    <button
                        class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 !absolute top-3 right-3"
                        type="button">
                        <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>

            <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
                <div role="alert"
                    class="relative block w-full text-base font-regular px-4 py-4 rounded-lg bg-red-500 text-white flex">
                    <div class=" mr-12">
                        <p class="font-bold text-black">
                            🌟 Black Friday Sale
                            <span class="text-white">
                                - Up to 50% off on fashion items!
                            </span>
                            <span title=""
                                class="inline-flex items-center justify-center text-sm font-bold text-yellow-300 transition-all ml-4 duration-200 rounded-md hover:text-gray-700"
                                role="button">
                                Get Now <svg class="w-4 h-4 ml-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </span>
                        </p>
                    </div>
                    <button
                        class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 !absolute top-3 right-3"
                        type="button">
                        <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>


            <div role="alert"
                class="relative block w-full text-base font-regular px-4 py-4 rounded-lg bg-gray-900 text-white flex"
                style="opacity: 1;">
                <div class="shrink-0">
                    🎁
                </div>
                <div class="ml-3 mr-12">
                    <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium">Black Friday
                        Special Offers:</p>
                    <ul class="mt-2 ml-2 list-inside list-disc">
                        <li>Massive discounts up to 70% off!</li>
                        <li>Exclusive deals on electronics, fashion, home goods, and more!</li>
                        <li>Free shipping on orders over $50.</li>
                        <a href="#"
                            class="absolute inset-y-0 right-0 flex items-center px-4 py-2 bg-red-600 text-white rounded-l-lg">
                            <p class="text-sm font-bold">Shop Now - Limited Time Offer!</p>
                        </a>
                    </ul>
                </div>
            </div>

            <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
                <div
                    class="relative flex w-full max-w-[48rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                    <div
                        class="relative w-2/5 m-0 overflow-hidden text-gray-700 bg-white rounded-r-none shrink-0 rounded-xl bg-clip-border">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80"
                            alt="image" class="object-cover w-full h-full" />
                        <!-- Black Friday Mega Offer -->
                        <div
                            class="absolute inset-0 flex items-center justify-center text-white bg-black bg-opacity-75 rounded-xl">
                            <h2 class="text-4xl font-bold text-center"> Black Friday <br />
                                <span class="text-red-500"> 50% Off</span>
                            </h2>

                        </div>
                        <!-- End Black Friday Mega Offer -->
                    </div>
                    <div class="p-6">
                        <h6
                            class="block mb-4 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-red-500 uppercase">
                            Startups
                        </h6>
                        <h4
                            class="block mb-2 font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            Lyft launching cross-platform service this week
                        </h4>
                        <p class="block mb-8 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
                            Like so many organizations these days, Autodesk is a company in
                            transition. It was until recently a traditional boxed software company
                            selling licenses. Yet its own business model disruption is only part of
                            the story
                        </p>
                        <a class="inline-block" href="#">
                            <button
                                class="flex items-center gap-2 px-6 py-3 font-sans text-xs font-bold text-center text-red-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button">
                                Buy Now
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full pt-5 px-4 mb-8 mx-auto ">
                <div class="text-sm text-gray-700 py-1 text-center">
                    Made with <a class="text-gray-700 font-semibold"
                        href="https://www.material-tailwind.com/?ref=tailwindcomponents" target="_blank">Material
                        Tailwind</a> by <a href="https://www.creative-tim.com?ref=tailwindcomponents"
                        class="text-gray-700 font-semibold" target="_blank"> Creative Tim</a>.
                </div>
            </div>
        </div>
    </div>
@endsection
