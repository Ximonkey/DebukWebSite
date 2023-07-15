@extends('admin.plantilla.app')

@section('titulo')
Inicio
@endsection

@section('contenido')

<!-- component -->
<div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
    <div class="container xl:max-w-6xl mx-auto px-4">
        <!-- Heading start -->
        <header class="text-center mx-auto mb-12 lg:px-20">
            <h2 class="text-2xl leading-normal mb-2 font-bold text-black">¡A trabajar!</h2>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 60" style="margin: 0 auto;height: 35px;" xml:space="preserve">
                <circle cx="50.1" cy="30.4" r="5" class="stroke-primary" style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
                <line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary" style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                <line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary" style="stroke-width: 2;stroke-miterlimit: 10;"></line>
            </svg>
            <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Nuestras redes sociales. Link al panel de administración.</p>
        </header>
        <!-- End heading -->
        <!-- row -->
        <div class="flex flex-wrap flex-row -mx-4 text-center">
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                <!-- service block -->
                <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                        <!-- icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                        </svg>
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Facebook</h3>
                    <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
                </div>
                <!-- end service block -->
            </div>
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                <!-- service block -->
                <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                        <!-- icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <rect x="4" y="4" width="16" height="16" rx="4" />
                            <circle cx="12" cy="12" r="3" />
                            <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                        </svg>
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Instagram</h3>
                    <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
                </div>
                <!-- end service block -->
            </div>
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                <!-- service block -->
                <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                        <!-- icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <rect x="3" y="5" width="18" height="14" rx="4" />
                            <path d="M10 9l5 3l-5 3z" />
                        </svg>
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Youtube</h3>
                    <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
                </div>
                <!-- end service block -->
            </div>
        </div>
    </div>
</div>



@endsection