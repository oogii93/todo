<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('styles')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    {{-- blade-formatter-disable--}}
    <style type="text/tailwindcss">
    .btn{
    @apply rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/5 hover:bg-slate-50 text-slate-700
    }
    .link{
        @apply font-medium text-gray-700 underline decoration-pink-500
    }
    label{
    @apply block uppercase text-slate-700 mb-2
    }
    input,textarea{
        @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
        }
    .error{
        @apply text-red-500 text-sm
    }


    </style>
{{-- blade-formatter-enable--}}

</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="text-2xl mb-4">
        @yield('title')
    </h1>
    <div x-data="{ flash: true }">
        @if (session()->has('success'))
            <div>{{ session('success') }}</div>
            <div x-show="flash"
                class="relative mb-10 rounded border border-red-400 bg-red-100 px-4 py-3 text-lg text-red-700"
                role="alert">
                <strong class="font-bold">success</strong>
                <div> this is flash</div>
                <span class="absolute top-0 right-0 bottom-0 px-4 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        @click="flash = false" @click="flash = false" stroke="currentColor"
                        class="h-6 w-6 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>

                </span>
            </div>
        @endif
        @yield('content')
    </div>
</body>

</html>
