{{-- <h1 class="mb-5"> TEST ITERAZIONE </h1> --}}

<div class="ms_card d-flex flex-column">
    <img src="{{ Vite::asset('resources/img/' . $item_desc['frontImage']) }}" alt="">
    <p class="ms_fs-small">{{$item_desc['brand']}}</p class="ms_fs-small">
    <p class="fw-semibold">{{ $item_desc['name']}}</p>
    <span> {{ $item_desc['price'].' €' }} </span>
</div>