<h1 class="font-bold text-lg lg:text-3xl bg-gradient-to-br from-white via-white/50 to-transparent bg-clip-text text-indigo">
    Panel<span class="text-indigo-400"> de control</span></h1>
<a href="http://debuk.test/profile" class="flex flex-col space-y-2 md:space-y-0 md:flex-row mb-5 items-center md:space-x-2 hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2">
    <div>
        <img class="rounded-full w-10 h-10 relative object-cover" src="/img/logo_A.png" alt="">
    </div>
    <div>
        <p class="font-medium group-hover:text-indigo-400 leading-4">Debuk</p>
        <span class="text-xs text-slate-400">Administrador</span>
    </div>
</a>
<hr class="my-2 border-slate-700">
<div id="menu" class="flex flex-col space-y-2 my-5">
    <a href="{{ url('admin') }}" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
        <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#064B72" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="5 12 3 12 12 3 21 12 19 12" />
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                </svg>
            </div>
            <div>
                <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">
                    Inicio</p>
            </div>

        </div>
    </a>
    <a href="{{ url('/characters') }}" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
        <div class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lego" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8DB5AD" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <line x1="9.5" y1="11" x2="9.51" y2="11" />
                    <line x1="14.5" y1="11" x2="14.51" y2="11" />
                    <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                    <path d="M7 5h1v-2h8v2h1a3 3 0 0 1 3 3v9a3 3 0 0 1 -3 3v1h-10v-1a3 3 0 0 1 -3 -3v-9a3 3 0 0 1 3 -3" />
                </svg>
            </div>
            <div>
                <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">
                    Personajes</p>
                <p class="text-slate-400 text-sm hidden md:block">Modelos 3D</p>
            </div>
        </div>
    </a>
    <a href="{{ url('/books') }}" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
        <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ED6335" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                    <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                    <line x1="3" y1="6" x2="3" y2="19" />
                    <line x1="12" y1="6" x2="12" y2="19" />
                    <line x1="21" y1="6" x2="21" y2="19" />
                </svg>
            </div>
            <div>
                <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">
                    Libros</p>
                <p class="text-slate-400 text-sm hidden md:block">Productos</p>
            </div>

        </div>
    </a>
    <a href="{{ url('/bookstores') }}" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
        <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-bank" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#026D81" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <line x1="3" y1="21" x2="21" y2="21" />
                    <line x1="3" y1="10" x2="21" y2="10" />
                    <polyline points="5 6 12 3 19 6" />
                    <line x1="4" y1="10" x2="4" y2="21" />
                    <line x1="20" y1="10" x2="20" y2="21" />
                    <line x1="8" y1="14" x2="8" y2="17" />
                    <line x1="12" y1="14" x2="12" y2="17" />
                    <line x1="16" y1="14" x2="16" y2="17" />
                </svg>
            </div>
            <div>
                <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">
                    Bibliotecas</p>
                <p class="text-slate-400 text-sm hidden md:block">Socios</p>
            </div>

        </div>
    </a>
    <a href="{{ url('contacts') }}" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
        <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-phone" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ECAE7D" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                    <path d="M9 12a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                </svg>
            </div>
            <div>
                <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">
                    Contactos</p>
                <p class="text-slate-400 text-sm hidden md:block">Clientes</p>
            </div>

        </div>
    </a>
    <form method="POST" action="http://debuk.test/logout">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <a class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group" href="http://debuk.test/logout" onclick="event.preventDefault();
                                                this.closest('form').submit();">
            <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#E93119" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M20 12h-13l3 -3m0 6l-3 -3" />
                    </svg>
                </div>
                <div>
                    <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">
                        Salir</p>
                </div>

            </div>
        </a>
    </form>
</div>