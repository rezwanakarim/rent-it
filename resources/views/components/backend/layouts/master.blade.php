
<x-backend.layouts.partials.head />

<body style="box-sizing:border-box;" id="body-pd">
    <x-backend.layouts.partials.header />
    <x-backend.layouts.partials.sidebar />

        <div class="bg-light">
            <h2>{{ $title ?? '' }}</h2>
        </div>

    {{ $slot }}


    <x-backend.layouts.partials.footer />
</body>

</html>
