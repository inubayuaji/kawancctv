<nav class="relative flex flex-wrap items-center justify-between px-2" x-data="navbar">
    <div class="container mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between md:w-auto md:static md:block md:justify-start">
            <a class="leading-relaxed inline-block mr-4 py-2" href="{{ url('/') }}">
                <img src="/assets/img/logo color.png" class="h-10 md:h-14 lg:h-16">
            </a>
            <button
                class="cursor-pointer leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block md:hidden outline-none focus:outline-none"
                type="button" x-on:click="toggle()">
                <svg style="width:36px;height:36px" viewBox="0 0 24 24" class="text-blue-500">
                    <path fill="currentColor" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
                </svg>
            </button>
        </div>
        <div class="md:flex flex-grow items-center" x-bind:class="open ? '' : 'hidden'">
            <ul class="flex flex-col md:flex-row list-none ml-auto">
                <li class="nav-item flex">
                    <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug hover:text-blue-500"
                        href="{{ url('/') }}">
                        Branda
                    </a>
                </li>
                <li class="nav-item flex">
                    <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug hover:text-blue-500"
                        href="{{ url('/paket') }}">
                        Paket
                    </a>
                </li>
                <li class="nav-item flex">
                    <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug hover:text-blue-500" href="{{ url('/blog') }}">
                        Blog
                    </a>
                </li>
                {{-- <li class="nav-item flex">
                    <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug hover:text-blue-500"
                        href="#">
                        Produk Lainya
                    </a>
                </li> --}}
                {{-- <li class="nav-item flex">
                    <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug hover:text-blue-500"
                        href="#">
                        Protofolio
                    </a>
                </li> --}}
                {{-- <li class="nav-item flex md:mr-4 lg:mr-8">
                    <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug hover:text-blue-500"
                        href="#">
                        Blog
                    </a>
                </li> --}}
                <li class="nav-item flex mb-3 md:mb-0">
                    <a href="https://api.whatsapp.com/send/?phone=6281326799339&text=Saya+mau+penawaran+cctv"
                        target="_blank" class="btn btn-primary" type="button" x-on:click="$store.events.contact()">
                        Hubungi
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
