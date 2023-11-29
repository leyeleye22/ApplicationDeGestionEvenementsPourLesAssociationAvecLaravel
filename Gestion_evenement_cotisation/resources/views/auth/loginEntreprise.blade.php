<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat"
    style="background-color:gray">
    <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
        <div class="text-white">
            <div class="mb-8 flex flex-col items-center">

                <h1 class="mb-2 text-2xl">Gestion Evenement</h1>
                <span class="text-gray-300">Enter Login Details</span>
            </div>
            <form action="{{ route('loginEntreprises') }}" method="POST">
                @csrf
                <div class="mb-4 text-lg">
                    <input
                        class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md"
                        type="text" name="login" placeholder="leyeleye22" />
                </div>

                <div class="mb-4 text-lg">
                    <input
                        class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md"
                        type="Password" name="password" placeholder="*********" />
                </div>
                <div class="mt-8 flex justify-center text-lg text-black">
                    <button type="submit"
                        class="rounded-3xl bg-yellow-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
