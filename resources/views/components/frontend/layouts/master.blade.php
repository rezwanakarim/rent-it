
<x-frontend.layouts.partials.head />

<body style="box-sizing:border-box;" id="body-pd">

    <x-frontend.layouts.partials.navbar />


        <div class="bg-light">
            {{-- <h2>{{ $title ?? 'Catergory' }}</h2> --}}
        </div>

    {{ $slot }}

    <x-frontend.layouts.partials.footer />
</body>

</html>
