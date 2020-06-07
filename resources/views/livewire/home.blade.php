<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            {{ $time }}
        </div>

        @livewire('child')
    </div>
    <button wire:click="$refresh">Click</button>

    <script type="text/javascript">
        console.log(new Date())
    </script>
</div>
