<div class="mt-20 text-gray-900 tracking-wider leading-normal">
    <div id="last-users">
        <h1 class="font-bold py-4 uppercase">Lista de Libros</h1>
        <div class="overflow-x-scroll">
            <table class="w-full whitespace-nowrap">
                <thead class="bg-black/60">
                    <th class="text-left py-3 px-2">ID</th>
                    <th class="text-left py-3 px-2">ID Libro</th>
                    <th class="text-left py-3 px-2">Nombre</th>
                    <th class="text-left py-3 px-2 rounded-l-lg">Icono Color</th>
                    <th class="text-left py-3 px-2 ">Icono Personalidad</th>
                    <th class="text-left py-3 px-2 rounded-r-lg">Icono objeto</th>
                    <th class="text-left py-3 px-2">Descripción</th>
                    <th class="text-left py-3 px-2">Foto</th>
                    <th class="text-left py-3 px-2">Foto</th>
                    <th class="text-left py-3 px-2">Foto</th>
                    <th class="text-left py-3 px-2">Modelo 3D</th>
                    <th class="text-left py-3 px-2">Estatus</th>
                </thead>
                <tbody>
                    @foreach ($characters as $character)
                    <tr class="border-b border-gray-700">
                        <td class="py-3 px-2">{{$character->id}}</td>
                        <td class="py-3 px-2">{{$character->book->title}}</td>
                        <td class="py-3 px-2">{{$character->name}}</td>
                        <td class="py-3 px-2 font-bold">{{$character->icolor}}</td>
                        <td class="py-3 px-2">{{$character->iperson}}</td>
                        <td class="py-3 px-2">{{$character->iobj}}</td>
                        <td class="py-3 px-2">{{$character->desc}}</td>
                        <td class="py-3 px-2 font-bold">
                            <div class="inline-flex space-x-3 items-center">
                                <span><img class="rounded-full w-8 h-8" src="personajes/{{$character->photo}}" alt="" width="100"></span>
                            </div>
                        </td>
                        <td class="py-3 px-2 font-bold">
                            <div class="inline-flex space-x-3 items-center">
                                <span><img class="rounded-full w-8 h-8" src="personajes/{{$character->photo2}}" alt="" width="100"></span>
                            </div>
                        </td>
                        <td class="py-3 px-2 font-bold">
                            <div class="inline-flex space-x-3 items-center">
                                <span><img class="rounded-full w-8 h-8" src="personajes/{{$character->photo3}}" alt="" width="100"></span>
                            </div>
                        </td>
                        <td class="py-3 px-2">{{$character->model}}</td>
                        <td class="py-3 px-2">{{$character->status}}</td>
                        <td class="py-3 px-2">
                            <div class="inline-flex items-center space-x-3">
                                <a href="/characters/{{$character->id}}/edit" title="Editar" class="hover:text-white"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                                <a href="/characters/{{$character->id}}" title="Eliminar" class="hover:text-white"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>