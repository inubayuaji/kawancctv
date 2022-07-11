@extends('_layouts.web')

@section('title', 'Kawan CCTV | Paket CCTV')

@section('content')
    @include('_components.header', [
        'title' => 'Paket CCTV',
        'subtitle' => 'Pilih CCTV sesuai kebutuhan anda',
    ])

    <section class="container flex flex-wrap md:flex-row px-2 mx-auto py-5 md:py-10">
        <div class="w-full md:w-1/2 p-2">
            <div class="w-full h-72 md:h-80 flex flex-wrap items-center justify-center bg-center bg-cover bg-no-repeat"
                style="background-image: url('/assets/img/Hillok-Banner.png')">
                <a href="{{ url('/paket/hilook') }}" class="btn btn-primary btn-lg border-2 border-white">Lihat Harga</a>
            </div>
        </div>
        <div class="w-full md:w-1/2 p-2">
            <div class="w-full h-72 md:h-80 flex flex-wrap items-center justify-center bg-center bg-cover bg-no-repeat"
                style="background-image: url('/assets/img/Hikvision-Banner.png')">
                <a href="{{ url('/paket/hikvision') }}" class="btn btn-lg bg-red-500 active:bg-red-600 text-white border-2 border-white">Lihat
                    Harga</a>
            </div>
        </div>
        <div class="w-full md:w-1/2 p-2">
            <div class="w-full h-72 md:h-80 flex flex-wrap items-center justify-center bg-center bg-cover bg-no-repeat"
                style="background-image: url('/assets/img/Dahua-Banner.png')">
                <a href="{{ url('/paket/dahua') }}"
                    class="btn btn-lg bg-orange-500 active:bg-orange-600 text-white border-2 border-white">Lihat Harga</a>
            </div>
        </div>
        <div class="w-full md:w-1/2 p-2">
            <div class="w-full h-72 md:h-80 flex flex-wrap items-center justify-center bg-center bg-cover bg-no-repeat"
                style="background-image: url('/assets/img/Ezviz-Banner.png')">
                <a href="{{ url('/paket/ezviz') }}" class="btn btn-lg bg-green-500 active:bg-green-600 text-white border-2 border-white">Lihat
                    Harga</a>
            </div>
        </div>
    </section>
@endsection
