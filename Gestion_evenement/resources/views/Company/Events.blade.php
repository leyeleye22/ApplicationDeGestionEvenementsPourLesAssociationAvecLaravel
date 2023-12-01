@extends('Company.navcom')
@section('nav')
    <form action="/EventCreated" method="POST" enctype="multipart/form-data"
        class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        @csrf
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <input type="hidden" name="idassociation" id="" value="{{ Auth::guard('association')->user()->id }}">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex items-center space-x-5">
                        <div
                            class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
                            i</div>
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed">Create an Event</h2>
                            <p class="text-sm text-gray-500 font-normal leading-relaxed">Create an event now, publish it,
                                and
                                make sure to invite anyone who might be interested.</p>
                        </div>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="flex flex-col">
                                <label for="eventTitle" class="leading-loose">Event Title</label>
                                <input type="text" id="eventTitle"
                                    class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                    placeholder="Event title" name="eventitle">
                            </div>
                            <div class="flex flex-col">
                                <label for="eventSubtitle" class="leading-loose">Event Subtitle</label>
                                <textarea id="eventSubtitle"
                                    class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                    placeholder="Event subtitle" name="desceven"></textarea>
                            </div>
                            <div class="flex flex-col">
                                <label for="featuredImage" class="leading-loose">Featured Image</label>
                                <input type="file" id="featuredImage"
                                    class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                    placeholder="Upload Image" name="image">
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex flex-col">
                                    <label for="registrationDeadline" class="leading-loose">Registration deadline</label>
                                    <div class="relative focus-within:text-gray-600 text-gray-400">
                                        <input type="date" id="registrationDeadline"
                                            class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            placeholder="25/02/2020" name="dateregister">
                                        <div class="absolute left-3 top-2">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label for="eventDate" class="leading-loose">Event date</label>
                                    <div class="relative focus-within:text-gray-600 text-gray-400">
                                        <input type="date" id="eventDate"
                                            class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            placeholder="26/02/2020" name="dateeven">
                                        <div class="absolute left-3 top-2">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pt-4 flex items-center space-x-4">
                            <a href="/dash"
                                class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg> Cancel
                            </a>
                            <button
                                class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none"
                                type="submit">Create</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
