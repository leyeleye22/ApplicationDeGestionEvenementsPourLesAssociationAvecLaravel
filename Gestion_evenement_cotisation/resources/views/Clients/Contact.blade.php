@extends('Clients.navcli')
@section('nav')
    {{-- <div class="flex p-5 flex-col justify-center items-center h-32 bg-indigo-600">
        <h3 class="text-lg text-white">How can we help?</h3>
        <p class="text-white opacity-50">We usually respond in a few hours</p>
    </div>
    <form action="https://api.web3forms.com/submit" method="POST" id="form" class="needs-validation" novalidate>
        <input type="hidden" name="apikey" value="YOUR_ACCESS_KEY_HERE" />
        <input type="hidden" name="subject" value="New Submission from Web3Forms" />
        <input type="checkbox" name="botcheck" id="" style="display: none;" />

        <div class="mb-4">
            <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Full Name</label>
            <input type="text" name="name" id="full_name" placeholder="John Doe" required
                class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
            <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                Please provide your full name.
            </div>
        </div>

        <div class="mb-4">
            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email Address</label>
            <input type="email" name="email" id="email" placeholder="you@company.com" required
                class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
            <div class="empty-feedback text-red-400 text-sm mt-1">
                Please provide your email address.
            </div>
            <div class="invalid-feedback text-red-400 text-sm mt-1">
                Please provide a valid email address.
            </div>
        </div>

        <div class="mb-4">
            <label for="message" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Your Message</label>
            <textarea rows="4" name="message" id="message" placeholder="Your Message"
                class="w-full h-28 px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                required></textarea>
            <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                Please enter your message.
            </div>
        </div>

        <div class="mb-3">
            <button type="submit"
                class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">
                Send Message
            </button>
        </div>
        <p class="text-xs text-center text-gray-400" id="result">
            <span>Powered by <a href="https://Web3Forms.com" class="text-gray-600" target="_blank"
                    rel="noopener noreferrer">Web3Forms</a></span>
        </p>
    </form>
    </div> --}}
@endsection
