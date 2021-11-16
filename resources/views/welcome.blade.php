<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <style>
            :root{
{{--                @foreach($settings ?? '' as $setting)--}}
{{--                       --primary-color: {{ $setting->primary_color }};--}}
{{--                       --secondary-color: {{ $setting->secondary_color }};--}}
{{--                   @endforeach--}}
            }
            .primary-color-bg{
                background-color: var(--primary-color);
             }
            .primary-color-text{
                color: var(--primary-color);
             }
        </style>
    </head>
    <body class="antialiased">

    <nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 shadow sm:items-baseline w-full primary-color-bg">
        <div class="mb-2 sm:mb-0 testColor">
            <a href="/home" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">Home</a>
        </div>
        <div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="bg-white">
            <p class="primary-color-text">test text</p>
        </div>
    </nav>

    </body>
</html>
