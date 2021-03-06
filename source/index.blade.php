@extends('_layouts.web')

@section('content')
    <!-- hero start -->
    <section class="bg-blue-500 text-white px-2 py-10 md:py-24 lg:py-36 bg-right-top bg-no-repeat bg-cover"
        style="background-image: url('/assets/img/banner hero.png')">
        <div class="container flex mx-auto">
            <div class="w-full md:w-2/3 lg:w-1/2">
                <h1 class="text-4xl lg:text-6lx">Pasang CCTV Anda<br />Bersama Kawan CCTV</h1>
                <p class="text-xl mb-12">Jasa pasang CCTV lengkap untuk rumah, kantor dan tempat usaha anda</p>

                <a href="https://api.whatsapp.com/send/?phone=6281326799339&text=Saya+mau+penawaran+cctv" target="_blank"
                    class="btn btn-lg bg-white active:bg-slate-200 text-gray-800"
                    x-on:click="$store.events.contact()">Dapatkan Harga</a>
            </div>
        </div>
    </section>
    <!-- hero end -->

    <!-- feature 1 start -->
    <section class="container flex flex-wrap flex-col-reverse md:flex-row px-2 mx-auto py-5 md:py-10">
        <div class="w-full md:w-1/2 p-2">
            <img src="assets/img/Paket-Lengkap.png"
                class="rounded-sm hover:shadow-lg ease-linear transition-all duration-150">
        </div>
        <div class="w-full md:w-1/2 flex items-center p-2">
            <div>
                <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-blue-500">
                    <svg style="width:40px;height:40px" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M2,10.96C1.5,10.68 1.35,10.07 1.63,9.59L3.13,7C3.24,6.8 3.41,6.66 3.6,6.58L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.66,6.72 20.82,6.88 20.91,7.08L22.36,9.6C22.64,10.08 22.47,10.69 22,10.96L21,11.54V16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V10.96C2.7,11.13 2.32,11.14 2,10.96M12,4.15V4.15L12,10.85V10.85L17.96,7.5L12,4.15M5,15.91L11,19.29V12.58L5,9.21V15.91M19,15.91V12.69L14,15.59C13.67,15.77 13.3,15.76 13,15.6V19.29L19,15.91M13.85,13.36L20.13,9.73L19.55,8.72L13.27,12.35L13.85,13.36Z" />
                    </svg>
                </div>
                <h2>Paket CCTV Lengkap</h2>
                <p>Setiap paket sudah bisa dipasang hingga CCTV dapat digunkan juga paket bisa diganti sesui kebutuhan anda.
                    Apa saja yang anda daptakan?</p>

                <ul class="mt-3 flex flex-wrap lg:block">
                    <li class="flex items-center mb-1 mr-1">
                        <div class="bg-blue-200 text-blue-500 w-8 h-8 p-0.5 rounded-full inline-block mr-2">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M6.03 12.03L8.03 15.5L5.5 18.68L2 12.62L6.03 12.03M17 18V15.29C17.88 14.9 18.5 14.03 18.5 13C18.5 12.43 18.3 11.9 17.97 11.5L19.94 10.35C20.95 9.76 21.3 8.47 20.71 7.46L19.33 5.06C18.74 4.05 17.45 3.7 16.44 4.28L8.31 9C7.36 9.53 7.03 10.75 7.58 11.71L9.08 14.31C9.63 15.26 10.86 15.59 11.81 15.04L13.69 13.96C13.94 14.55 14.41 15.03 15 15.29V18C15 19.1 15.9 20 17 20H22V18H17Z" />
                            </svg>
                        </div>
                        CCTV
                    </li>
                    <li class="flex items-center mb-1 mr-1">
                        <div class="bg-blue-200 text-blue-500 w-8 h-8 p-0.5 rounded-full inline-block mr-2">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M14.5,10.37C15.54,10.37 16.38,9.53 16.38,8.5C16.38,7.46 15.54,6.63 14.5,6.63C13.46,6.63 12.63,7.46 12.63,8.5A1.87,1.87 0 0,0 14.5,10.37M14.5,1A7.5,7.5 0 0,1 22,8.5C22,10.67 21.08,12.63 19.6,14H9.4C7.93,12.63 7,10.67 7,8.5C7,4.35 10.36,1 14.5,1M6,21V22H4V21H2V15H22V21H20V22H18V21H6M4,18V19H13V18H4M15,17V19H17V17H15M19,17A1,1 0 0,0 18,18A1,1 0 0,0 19,19A1,1 0 0,0 20,18A1,1 0 0,0 19,17Z" />
                            </svg>
                        </div>
                        DVR
                    </li>
                    <li class="flex items-center mb-1 mr-1">
                        <div class="bg-blue-200 text-blue-500 w-8 h-8 p-0.5 rounded-full inline-block mr-2">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M6,2H18A2,2 0 0,1 20,4V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2M12,4A6,6 0 0,0 6,10C6,13.31 8.69,16 12.1,16L11.22,13.77C10.95,13.29 11.11,12.68 11.59,12.4L12.45,11.9C12.93,11.63 13.54,11.79 13.82,12.27L15.74,14.69C17.12,13.59 18,11.9 18,10A6,6 0 0,0 12,4M12,9A1,1 0 0,1 13,10A1,1 0 0,1 12,11A1,1 0 0,1 11,10A1,1 0 0,1 12,9M7,18A1,1 0 0,0 6,19A1,1 0 0,0 7,20A1,1 0 0,0 8,19A1,1 0 0,0 7,18M12.09,13.27L14.58,19.58L17.17,18.08L12.95,12.77L12.09,13.27Z" />
                            </svg>
                        </div>
                        HDD
                    </li>
                    <li class="flex items-center mb-1 mr-1">
                        <div class="bg-blue-200 text-blue-500 w-8 h-8 p-0.5 rounded-full inline-block mr-2">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M7.05 3.5C5.68 4.88 5.68 7.1 7.05 8.47L15.54 16.95C16.12 17.54 16.12 18.5 15.54 19.07C14.95 19.66 14 19.66 13.41 19.07L9.17 14.83L10.23 13.77L6.7 10.23L6.34 10.59L4.93 9.17C4.54 8.78 3.91 8.78 3.5 9.17L2.1 10.59C1.71 11 1.71 11.61 2.1 12L3.5 13.41L3.16 13.77L6.7 17.3L7.76 16.24L12 20.5C13.37 21.85 15.58 21.85 16.95 20.5C18.32 19.12 18.32 16.9 16.95 15.54L8.46 7.05C7.88 6.46 7.88 5.5 8.46 4.93C9.05 4.34 10 4.34 10.59 4.93L14.83 9.17L13.77 10.23L17.3 13.77L17.66 13.41L19.07 14.83C19.46 15.22 20.1 15.22 20.5 14.83L21.9 13.41C22.29 13 22.29 12.39 21.9 12L20.5 10.59L20.84 10.23L17.3 6.7L16.24 7.76L12 3.5C10.63 2.15 8.42 2.15 7.05 3.5M2.81 11.29L4.22 9.88L5.64 11.29L4.22 12.71M18.36 12.71L19.78 11.29L21.19 12.71L19.78 14.12Z" />
                            </svg>
                        </div>
                        Kabel
                    </li>
                    <li class="flex items-center mb-1 mr-1">
                        <div class="bg-blue-200 text-blue-500 w-8 h-8 p-0.5 rounded-full inline-block mr-2">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M13.78 15.3L19.78 21.3L21.89 19.14L15.89 13.14L13.78 15.3M17.5 10.1C17.11 10.1 16.69 10.05 16.36 9.91L4.97 21.25L2.86 19.14L10.27 11.74L8.5 9.96L7.78 10.66L6.33 9.25V12.11L5.63 12.81L2.11 9.25L2.81 8.55H5.62L4.22 7.14L7.78 3.58C8.95 2.41 10.83 2.41 12 3.58L9.89 5.74L11.3 7.14L10.59 7.85L12.38 9.63L14.2 7.75C14.06 7.42 14 7 14 6.63C14 4.66 15.56 3.11 17.5 3.11C18.09 3.11 18.61 3.25 19.08 3.53L16.41 6.2L17.91 7.7L20.58 5.03C20.86 5.5 21 6 21 6.63C21 8.55 19.45 10.1 17.5 10.1Z" />
                            </svg>
                        </div>
                        Alat Bantu
                    </li>
            </div>
        </div>
    </section>
    <!-- feature 1 end -->

    <!-- feature 2 start -->
    <section class="container flex flex-wrap flex-row px-2 mx-auto py-5 md:py-10">
        <div class="w-full md:w-1/2 flex items-center p-2">
            <div>
                <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-blue-500">
                    <svg style="width:40px;height:40px" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M22.9 21.2L18.8 17.1C19.2 16.1 19 14.8 18.1 14C17.2 13.1 15.9 12.9 14.8 13.4L16.7 15.3L15.3 16.7L13.3 14.7C12.8 15.8 13 17.1 13.9 18.1C14.8 19 16 19.2 17 18.8L21.1 22.9C21.3 23.1 21.6 23.1 21.7 22.9L22.7 21.9C23 21.6 23 21.3 22.9 21.2M13 20H2V18C2 15.8 5.6 14 10 14C10.5 14 11 14 11.4 14.1C11.1 14.7 11 15.3 11 16C11 17.6 11.8 19.1 13 20M10 4C7.8 4 6 5.8 6 8S7.8 12 10 12 14 10.2 14 8 12.2 4 10 4" />
                    </svg>
                </div>
                <h2>Sudah Termasuk Pemasangan</h2>
                <p>Kami tidak hanya menjual paket CCTV, tapi kami juga akan memasangkan CCTV anda hingga berfungsi.</p>

                <ul class="mt-3 flex flex-wrap lg:block">
                    <li class="flex items-center mb-1 mr-1">
                        <div class="bg-blue-200 text-blue-500 w-8 h-8 p-0.5 rounded-full inline-block mr-2">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M16 9C16 14.33 8 14.33 8 9H10C10 11.67 14 11.67 14 9M20 18V21H4V18C4 15.33 9.33 14 12 14C14.67 14 20 15.33 20 18M18.1 18C18.1 17.36 14.97 15.9 12 15.9C9.03 15.9 5.9 17.36 5.9 18V19.1H18.1M12.5 2C12.78 2 13 2.22 13 2.5V5.5H14V3C15.45 3.67 16.34 5.16 16.25 6.75C16.25 6.75 16.95 6.89 17 8H7C7 6.89 7.75 6.75 7.75 6.75C7.66 5.16 8.55 3.67 10 3V5.5H11V2.5C11 2.22 11.22 2 11.5 2" />
                            </svg>
                        </div>
                        Tenaga Ahli
                    </li>
                    <li class="flex items-center mb-1 mr-1">
                        <div class="bg-blue-200 text-blue-500 w-8 h-8 p-0.5 rounded-full inline-block mr-2">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M14.5,10.37C15.54,10.37 16.38,9.53 16.38,8.5C16.38,7.46 15.54,6.63 14.5,6.63C13.46,6.63 12.63,7.46 12.63,8.5A1.87,1.87 0 0,0 14.5,10.37M14.5,1A7.5,7.5 0 0,1 22,8.5C22,10.67 21.08,12.63 19.6,14H9.4C7.93,12.63 7,10.67 7,8.5C7,4.35 10.36,1 14.5,1M6,21V22H4V21H2V15H22V21H20V22H18V21H6M4,18V19H13V18H4M15,17V19H17V17H15M19,17A1,1 0 0,0 18,18A1,1 0 0,0 19,19A1,1 0 0,0 20,18A1,1 0 0,0 19,17Z" />
                            </svg>
                        </div>
                        Bergaransi
                    </li>
                    <li class="flex items-center mb-1 mr-1">
                        <div class="bg-blue-200 text-blue-500 w-8 h-8 p-0.5 rounded-full inline-block mr-2">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M6,2H18A2,2 0 0,1 20,4V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2M12,4A6,6 0 0,0 6,10C6,13.31 8.69,16 12.1,16L11.22,13.77C10.95,13.29 11.11,12.68 11.59,12.4L12.45,11.9C12.93,11.63 13.54,11.79 13.82,12.27L15.74,14.69C17.12,13.59 18,11.9 18,10A6,6 0 0,0 12,4M12,9A1,1 0 0,1 13,10A1,1 0 0,1 12,11A1,1 0 0,1 11,10A1,1 0 0,1 12,9M7,18A1,1 0 0,0 6,19A1,1 0 0,0 7,20A1,1 0 0,0 8,19A1,1 0 0,0 7,18M12.09,13.27L14.58,19.58L17.17,18.08L12.95,12.77L12.09,13.27Z" />
                            </svg>
                        </div>
                        Ramah
                    </li>
            </div>
        </div>
        <div class="w-full md:w-1/2 p-2">
            <img src="assets/img/Paket-Lengkap.png"
                class="rounded-sm hover:shadow-lg ease-linear transition-all duration-150">
        </div>
    </section>
    <!-- feature 2 end -->

    <!-- price start -->
    <section class="bg-gray-100">
        <div class="container px-2 mx-auto py-5 md:py-10">
            <div class="text-center mb-5">
                <h2>Paket Harga CCTV</h2>
                <p>Paket CCTV flexsibel sesuai kebutuhan anda.</p>
            </div>
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
                                    <span class="text-base text-8xl font-light">2.7</span>
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
                                <a href="https://api.whatsapp.com/send/?phone=6281326799339&text=Saya+tertarik+paket+2+cctv+dahua"
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
                                    <span class="text-base text-8xl font-light">3.6</span>
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
                                <a href="https://api.whatsapp.com/send/?phone=6281326799339&text=Saya+tertarik+paket+3+cctv+dahua"
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
                                    <span class="text-base text-8xl font-light">4</span>
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
                                <a href="https://api.whatsapp.com/send/?phone=6281326799339&text=Saya+tertarik+paket+4+cctv+dahua"
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

    <!-- benefit start -->
    <section class="bg-gray-100">
        <div class="container px-2 mx-auto py-5 md:py-10">
            <div class="text-center mb-10">
                <h2>Kenapa Harus Kawan CCTV?</h2>
                <p>Setiap pemasangan anda akan mendapatkan kelebihan yang dapat kami berikan.</p>
            </div>
            <div class="flex flex-wrap flex-row px-2 mx-auto">
                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-2 text-center">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 hover:shadow-lg rounded-sm">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9.5 7C10.33 7 11 7.67 11 8.5C11 9.33 10.33 10 9.5 10C8.67 10 8 9.33 8 8.5C8 7.67 8.67 7 9.5 7M14.5 14C15.33 14 16 14.67 16 15.5C16 16.33 15.33 17 14.5 17C13.67 17 13 16.33 13 15.5C13 14.67 13.67 14 14.5 14M8.41 17L7 15.59L15.59 7L17 8.41L8.41 17M18.65 2.85L19.26 6.71L22.77 8.5L21 12L22.78 15.5L19.24 17.29L18.63 21.15L14.74 20.54L11.97 23.31L9.19 20.5L5.33 21.14L4.71 17.25L1.22 15.47L3 11.97L1.23 8.5L4.74 6.69L5.35 2.87L9.22 3.5L12 .695L14.76 3.46L18.65 2.85M20.1 9.37L17.5 8L17 5.11L14.1 5.53L12 3.5L9.9 5.53L7 5.11L6.5 8L3.9 9.37L5.2 12L3.9 14.63L6.5 16L7 18.89L9.9 18.47L12 20.5L14.1 18.47L17 18.89L17.5 16L20.1 14.63L18.8 12L20.1 9.37Z" />
                                </svg>
                            </div>
                            <h6 class="text-xl font-semibold">Bukan Murahan</h6>
                            <p class="mt-2 mb-4">Jangan terkecoh dengan harga murah karena kami selalu mengutamakan
                                kualitas bagi Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-4/12 px-2 text-center">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 hover:shadow-lg rounded-sm">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-sky-400">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M21.71 8.71C22.96 7.46 22.39 6 21.71 5.29L18.71 2.29C17.45 1.04 16 1.61 15.29 2.29L13.59 4H11C9.1 4 8 5 7.44 6.15L3 10.59V14.59L2.29 15.29C1.04 16.55 1.61 18 2.29 18.71L5.29 21.71C5.83 22.25 6.41 22.45 6.96 22.45C7.67 22.45 8.32 22.1 8.71 21.71L11.41 19H15C16.7 19 17.56 17.94 17.87 16.9C19 16.6 19.62 15.74 19.87 14.9C21.42 14.5 22 13.03 22 12V9H21.41L21.71 8.71M20 12C20 12.45 19.81 13 19 13L18 13L18 14C18 14.45 17.81 15 17 15L16 15L16 16C16 16.45 15.81 17 15 17H10.59L7.31 20.28C7 20.57 6.82 20.4 6.71 20.29L3.72 17.31C3.43 17 3.6 16.82 3.71 16.71L5 15.41V11.41L7 9.41V11C7 12.21 7.8 14 10 14S13 12.21 13 11H20V12M20.29 7.29L18.59 9H11V11C11 11.45 10.81 12 10 12S9 11.45 9 11V8C9 7.54 9.17 6 11 6H14.41L16.69 3.72C17 3.43 17.18 3.6 17.29 3.71L20.28 6.69C20.57 7 20.4 7.18 20.29 7.29Z" />
                                </svg>
                            </div>
                            <h6 class="text-xl font-semibold">Slalu Kawan</h6>
                            <p class="mt-2 mb-4 text-slate-500">Tidak hanya setelah pemasangan CCTV kami akan slalu menjadi
                                kawan jika ada kendala di CCTV Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="pt-6 w-full md:w-4/12 px-2 text-center">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 hover:shadow-lg rounded-sm">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M21,11C21,16.55 17.16,21.74 12,23C6.84,21.74 3,16.55 3,11V5L12,1L21,5V11M12,21C15.75,20 19,15.54 19,11.22V6.3L12,3.18L5,6.3V11.22C5,15.54 8.25,20 12,21M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9" />
                                </svg>
                            </div>
                            <h6 class="text-xl font-semibold">Bergaransi</h6>
                            <p class="mt-2 mb-4 text-slate-500">Anda akan selalu dilindungi karena kami akan memberikan
                                garansi CCTV selama satu tahun.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- benefit end -->

    <!-- faq start -->
    <section class="container px-2 mx-auto py-5 md:py-10">
        <div class="text-center mb-5">
            <h2>FAQ</h2>
            <p>Pertanyaan yang sering ditanya.</p>
        </div>
        <div class="flex flex-wrap justify-center">
            <div class="w-full" x-data="{ open: false }" x-on:click="open = !open">
                <h3 class="text-lg md:text-xl cursor-pointer">
                    <svg style="width:27px;height:27px;" viewBox="0 0 24 24" x-bind:class="!open ? 'inline' : 'hidden'">
                        <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                    </svg>
                    <svg style="width:27px;height:27px;" viewBox="0 0 24 24" x-bind:class="open ? 'inline' : 'hidden'">
                        <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                    </svg>
                    Bisa pasang luar kota?
                </h3>
                <p x-show="open">Kami siap melayani pemasangan daerah Semarang, Demak, Kendal, Ambarawa, Grobogan dan
                    Kudus. Kami juga
                    siap melayani untuk daerah lainya dengan menghubungi kami.</p>
                <hr class="my-3">
            </div>
            <div class="w-full" x-data="{ open: false }" x-on:click="open = !open">
                <h3 class="text-lg md:text-xl cursor-pointer">
                    <svg style="width:27px;height:27px;" viewBox="0 0 24 24" x-bind:class="!open ? 'inline' : 'hidden'">
                        <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                    </svg>
                    <svg style="width:27px;height:27px;" viewBox="0 0 24 24" x-bind:class="open ? 'inline' : 'hidden'">
                        <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                    </svg>
                    Apakah bergaransi?
                </h3>
                <p x-show="open">Kami berani memberi garansi selama 1 tahun sehingga Anda lebih terlindungi.</p>
                <hr class="my-3">
            </div>
            <div class="w-full" x-data="{ open: false }" x-on:click="open = !open">
                <h3 class="text-lg md:text-xl cursor-pointer">
                    <svg style="width:27px;height:27px;" viewBox="0 0 24 24" x-bind:class="!open ? 'inline' : 'hidden'">
                        <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                    </svg>
                    <svg style="width:27px;height:27px;" viewBox="0 0 24 24" x-bind:class="open ? 'inline' : 'hidden'">
                        <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                    </svg>
                    Berapa kapasitas hardisk yang saya butuhkan?
                </h3>
                <p x-show="open">Untuk kamera 2Mp setiap harinya membutuhkan 18Gb untuk menyimpan hasil rekaman anda
                    tinggal menghitung berapa CCTV anada dan lama durasinya.</p>
                <hr class="my-3">
            </div>
            <div class="w-full" x-data="{ open: false }" x-on:click="open = !open">
                <h3 class="text-lg md:text-xl cursor-pointer">
                    <svg style="width:27px;height:27px;" viewBox="0 0 24 24" x-bind:class="!open ? 'inline' : 'hidden'">
                        <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                    </svg>
                    <svg style="width:27px;height:27px;" viewBox="0 0 24 24" x-bind:class="open ? 'inline' : 'hidden'">
                        <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                    </svg>
                    Apa bisa tambah cctv nantinya?
                </h3>
                <p x-show="open">Bisa ditambah CCTV nantinya tergantung jumlah channel yang disediakan di DVR. Jika DVR 4
                    Channel berarti maksimal 4 CCTV jika 8 Channel berarti 8 CCTV.</p>
                <hr class="my-3">
            </div>
        </div>
    </section>
    <!-- faq end -->

    <!-- cta start -->
    <section class="bg-green-500">
        <div class="container px-2 mx-auto py-5 md:py-10 text-center text-white">
            <h1 class="text-4xl md:text-5xl">Dapatkan Harga Sekarang</h1>
            <p class="mb-8">Segera hubungi kami sebelum harga berubah.</p>
            <a href="https://api.whatsapp.com/send/?phone=6281326799339&text=Saya+mau+penawaran+cctv" target="_blank"
                class="btn btn-primary btn-lg" x-on:click="$store.events.contact()">Dapatkan Harga</a>
        </div>
    </section>
    <!-- cta end -->
@endsection
