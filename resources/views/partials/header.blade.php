<header class="container-fluid pt-3 align-items-center">
    <div class="container d-flex justify-content-between">
        <ul class="d-flex gap-4">
            <li><a href="{{ route("Home") }}">Home </a></li>
            <li><a href="{{ route("Men") }}">Uomo </a></li>
            <li><a href="{{ route("Women") }}">Donna </a></li>
            <li><a href="{{ route("Kids") }}">Bambino </a></li>
        </ul>
        <img src="{{ Vite::asset('resources/img/boolean-logo.png')}}" alt="">

        <ul class="d-flex gap-4">
            <li>Omino</li>
            <li>Cuore</li>
            <li>Carrello</li>
        </ul>
    </div>  
</header>