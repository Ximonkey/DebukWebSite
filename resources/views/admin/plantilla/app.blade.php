<!DOCTYPE html>
<html lang="es">

<head>
    @include('admin.plantilla.head')
    <title>@yield('titulo')</title>
</head>

<body>
    <div class="antialiased w-full min-h-screen text-slate-300 relative py-4">
        <div class="grid grid-cols-12 mx-auto gap-2 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 max-w-7xl my-10 px-2">

            <div id="menu" class="bg-white/10 col-span-3 rounded-lg p-4">
                @include('admin.plantilla.nav')
            </div>

            <div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">

                @yield('contenido')

            </div>
        </div>
    </div>

</body>



</html>