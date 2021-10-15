<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    @include('layouts.head_tag')
    @livewireStyles
</head>
<body class="c-app font-sans antialiased">
@include('layouts.sidebar')
<div class="c-wrapper">
    @include('layouts.header')

    <div class="c-body">
        <main class="c-main">
            <div class="container">
                <div class="row fade-in">
                    <div class="col">
                        {{ $slot }}
                    </div>
                    @if (isset($aside))
                        <div class="col-lg-3">
                            {{ $aside ?? '' }}
                        </div>
                    @endif
                </div>
            </div>
        </main>

        <footer class="c-footer">
            <div>
                <a href="https://jetstream.laravel.com/1.x/introduction.html">Jetstream</a> © 2020 Laravel.
            </div>
            <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
        </footer>
    </div>
</div>
@livewireScripts
@stack('scripts')
</body>
</html>
