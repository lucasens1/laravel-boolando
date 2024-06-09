<div class="ms_card d-flex flex-column">

    {{-- Inserimento dell'immagine --}}
    <img src="{{ Vite::asset('resources/img/' . $item_desc['frontImage']) }}" alt="">
    {{-- Brand --}}
    <p class="ms_fs-small">{{ $item_desc['brand'] }}</p>
    {{-- Nome --}}
    <p class="fw-semibold">{{ $item_desc['name'] }}</p>
    {{-- 
        Uso la direttiva Blade @php che mi permette di creare una finestra di codice php, così da creare flag e discountedPrice 
    --}}
    @php
        $isDiscounted = false;
        $discountedPrice = $item_desc['price'];
    @endphp
    {{-- Itero sui badges in $item_desc --}}
    @foreach ($item_desc['badges'] as $badge)
        {{--
            Controllo se type è settato e se ha la voce 'discount' 
        --}}
        @if (isset($badge['type']) && $badge['type'] === 'discount')
            {{-- 
            Entrando nella condizione posso quindi usare la flag -> true, e calcolare il prezzo 
        --}}
            @php
                # Rimuovo sia il simbolo percentuale che il segno meno, passando [% e -]
                $discountPercentage = str_replace(['%', '-'], '', $badge['value']);
                $discountedPrice = $item_desc['price'] * ($discountPercentage / 100);
                $isDiscounted = true;
            @endphp
            <p>
                <span class="ms_primary-price fw-bold ms_fs-small"> {{ number_format($discountedPrice, 2) }} € </span>
                <span class="fw-bold ms_fs-small"> <del>{{ $item_desc['price'] . ' €' }}</del></span>
            </p>
        @endif
        {{-- Controllo per mettere etichetta discount e tag --}}
        @if (isset($isDiscounted) && $badge['type'] === 'discount')
            <span class="ms_discount">{{ $badge['value'] }}</span>
        @endif
        @if ($badge['type'] === 'tag')
            <span class="ms_tag">{{ $badge['value'] }} </span>
        @endif
    @endforeach
    {{-- Visualizzo il prezzo normale se non è settato discount  --}}
    @if (!isset($isDiscounted))
        <span class="fw-bold ms_fs-small ms_primary-price">{{ $item_desc['price'] . ' €' }}</span>
    @endif

</div>
