@extends('layouts.app')

@include('partials.header')

@section('content')
    <div class="container ms_pt-120">
        <div class="row flex-row">
        {{-- @foreach in Homepage @forelse in Uomo/Donna/Bambino in caso di non presenza di prodotti --}}
            @foreach ($products as $item)
                @foreach ($item as $item_desc)
                    <div class="col-4">
                        {{-- @dd($item_desc) --}}
                        @include('partials.card')
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection