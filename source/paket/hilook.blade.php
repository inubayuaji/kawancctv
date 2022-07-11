@extends('_layouts.web')

@section('title', 'Kawan CCTV | Paket CCTV Hilook')

@section('content')
    @include('_component.header', [
        'title' => 'Paket CCTV > Hilook',
        'subtitle' => 'Paket CCTV Hilook untuk anda.',
    ])

    <!-- price start -->
    <section class="bg-gray-100">
        <div class="container px-2 mx-auto py-5 md:py-10">
            <div class="flex flex-wrap justify-center">
                <div class="p-2 w-full md:w-80">
                    <div class="bg-white rounded-sm hover:shadow-lg ease-linear transition-all duration-150">
                        <div class="bg-blue-500 rounded-t-sm text-white text-center py-6">
                            <h3>Paket 2 CCTV</h3>
                            <p>1 Indoor 1 Outdoor</p>
                        </div>
                        <div class="py-2 px-5">
                            <div class="py-4">
                                <div class="flex justify-center">
                                    <span class="text-lg align-super">Rp</span>
                                    <span class="text-base text-8xl font-light">2.5</span>
                                </div>
                                <span class="text-base text-center block">Juta</span>
                            </div>
                            <div>
                                <div>1 CCTV Outdoor</div>
                                <hr class="my-2">
                                <div>1 CCTV Indoor</div>
                                <hr class="my-2">
                                <div>HDD 500Gb</div>
                                <hr class="my-2">
                                <div>DVR 4 Chanel</div>
                            </div>
                            <div class="my-5 text-center">
                                <a href="https://api.whatsapp.com/send/?phone=6281326799339&text=Saya+tertarik+paket+2+cctv+hilook"
                                    target="_blank" class="btn btn-primary" x-on:click="$store.events.contact()">Dapatkan
                                    Harga</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 w-full md:w-80">
                    <div class="bg-white rounded-sm hover:shadow-lg ease-linear transition-all duration-150">
                        <div class="bg-blue-500 rounded-t-sm text-white text-center py-6">
                            <h3>Paket 3 CCTV</h3>
                            <p>1 Indoor 2 Outdoor</p>
                        </div>
                        <div class="py-2 px-5">
                            <div class="py-4">
                                <div class="flex justify-center">
                                    <span class="text-lg align-super">Rp</span>
                                    <span class="text-base text-8xl font-light">3.5</span>
                                </div>
                                <span class="text-base text-center block">Juta</span>
                            </div>
                            <div>
                                <div>1 CCTV Outdoor</div>
                                <hr class="my-2">
                                <div>2 CCTV Indoor</div>
                                <hr class="my-2">
                                <div>HDD 1Tb</div>
                                <hr class="my-2">
                                <div>DVR 4 Chanel</div>
                            </div>
                            <div class="my-5 text-center">
                                <a href="https://api.whatsapp.com/send/?phone=6281326799339&text=Saya+tertarik+paket+3+cctv+hilook"
                                    target="_blank" class="btn btn-primary" x-on:click="$store.events.contact()">Dapatkan
                                    Harga</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 w-full md:w-80">
                    <div class="bg-white rounded-sm hover:shadow-lg ease-linear transition-all duration-150">
                        <div class="bg-blue-500 rounded-t-sm text-white text-center py-6">
                            <h3>Paket 4 CCTV</h3>
                            <p>2 Indoor 2 Outdoor</p>
                        </div>
                        <div class="py-2 px-5">
                            <div class="py-4">
                                <div class="flex justify-center">
                                    <span class="text-lg align-super">Rp</span>
                                    <span class="text-base text-8xl font-light">3.8</span>
                                </div>
                                <span class="text-base text-center block">Juta</span>
                            </div>
                            <div>
                                <div>2 CCTV Outdoor</div>
                                <hr class="my-2">
                                <div>2 CCTV Indoor</div>
                                <hr class="my-2">
                                <div>HDD 1Tb</div>
                                <hr class="my-2">
                                <div>DVR 4 Chanel</div>
                            </div>
                            <div class="my-5 text-center">
                                <a href="https://api.whatsapp.com/send/?phone=6281326799339&text=Saya+tertarik+paket+4+cctv+hilook"
                                    target="_blank" class="btn btn-primary" x-on:click="$store.events.contact()">Dapatkan
                                    Harga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- price end -->

    <!-- cta start -->
    <section class="bg-green-500">
        <div class="container px-2 mx-auto py-5 md:py-10 text-center text-white">
            <h1 class="text-4xl md:text-5xl">Butuh Paket Lainya?</h1>
            <p class="mb-8">Hubungi kami untuk paket flexsibel lainya.</p>
            <a href="https://api.whatsapp.com/send/?phone=6281326799339&text=Tanya+paket+hilook+lainya" target="_blank"
                class="btn btn-primary btn-lg" x-on:click="$store.events.contact()">Tanya Paket Hilook</a>
        </div>
    </section>
    <!-- cta end -->
@endsection
