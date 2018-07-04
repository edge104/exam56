<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.meta')
</head>
<body>
    <div id="app">
        @include('layouts.nav')

        <main class="py-4">
            <div class="container">
                @yield('content')

                @if(session('status'))
                    @component('bs::alert', ['type' => 'info'])
                        {{ session('status') }}
                    @endcomponent
                @endif                
            </div>
        </main>
    </div>
</body>
</html>
