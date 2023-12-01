<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="flex min-h-full justify-center px-6 py-12 lg:px-8">
    <div class="sm:78-w-xl sm:mx-auto">
        <!-- Formulaire d'inscription -->
        <div class="sm:w-full">
            <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register an Account</h2>

            <form class="mt-10 space-y-6" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                    <div class="mt-2">
                        <input id="name" name="name" type="text" autocomplete="name" required
                            class="block w-full md:w-96 rounded-md border-gray-300 focus:border-indigo-600 focus:ring focus:ring-indigo-200 placeholder-gray-400 focus:outline-none focus:ring-2 text-sm py-3 px-4">
                    </div>
                </div>

                <div>
                    <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
                    <div class="mt-2">
                        <input id="lastname" name="lastname" type="text" autocomplete="family-name" required
                            class="block w-full md:w-96 rounded-md border-gray-300 focus:border-indigo-600 focus:ring focus:ring-indigo-200 placeholder-gray-400 focus:outline-none focus:ring-2 text-sm py-3 px-4">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                        address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full md:w-96 rounded-md border-gray-300 focus:border-indigo-600 focus:ring focus:ring-indigo-200 placeholder-gray-400 focus:outline-none focus:ring-2 text-sm py-3 px-4">
                    </div>
                </div>

                <div>
                    <label for="telephone" class="block text-sm font-medium leading-6 text-gray-900">Telephone</label>
                    <div class="mt-2">
                        <input id="telephone" name="telephone" type="text" autocomplete="tel" required
                            class="block w-full md:w-96 rounded-md border-gray-300 focus:border-indigo-600 focus:ring focus:ring-indigo-200 placeholder-gray-400 focus:outline-none focus:ring-2 text-sm py-3 px-4">
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Photo
                        Profile</label>
                    <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                        <div class="text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                <label for="file-upload"
                                    class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                    <span>Upload a file</span>
                                    <input type="file" name="leye">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="new-password" required
                            class="block w-full md:w-96 rounded-md border-gray-300 focus:border-indigo-600 focus:ring focus:ring-indigo-200 placeholder-gray-400 focus:outline-none focus:ring-2 text-sm py-3 px-4">
                    </div>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm
                        Password</label>
                    <div class="mt-2">
                        <input id="password_confirmation" name="password_confirmation" type="password"
                            autocomplete="new-password" required
                            class="block w-full md:w-96 rounded-md border-gray-300 focus:border-indigo-600 focus:ring focus:ring-indigo-200 placeholder-gray-400 focus:outline-none focus:ring-2 text-sm py-3 px-4">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-4 py-3 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Already a member?
                <a href="{{ route('login') }}"
                    class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign in</a>
            </p>
            <p class="mt-10 text-center text-sm text-gray-500">
                Create your Organisation?
                <a href="{{ route('Entrepriseregister') }}"
                    class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Create Organisation</a>
            </p>

        </div>
    </div>
</div>
