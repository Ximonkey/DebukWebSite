@extends('admin.plantilla.app')

@section('titulo')
Bibliotecas
@endsection

@section('contenido')
<div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Bibliotecas</h3>
            <p class="mt-1 text-sm text-gray-600">Completa los campos para añadir una nuevo punto de compra.</p>
        </div>
    </div>
    <div class="mt-5 md:col-span-2 md:mt-0">
        <form action="/bookstores/{{$bookstore->id}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="" class="block text-sm font-medium text-gray-700">ID</label>
                            <input readnoly type="text" name="id" value="{{ $bookstore->id }}" id="" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" disabled>
                        </div>
                    </div>

                    <div>
                        <label for="" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input readnoly type="text" name="name" value="{{ $bookstore->name }}" id="" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Imagen</label>
                        <div class="mt-1 flex items-center">
                            <span class="inline-block h-12 w-12 overflow-hidden rounded-full bg-gray-100">
                            <img class="h-full w-full text-gray-300" viewBox="0 0 24 24"
                                        src="/bibliotecas/{{$bookstore->img}}" alt="" width="100">
                            </span>
                            <button type="button" class="ml-5 rounded-md border border-gray-300 bg-white py-2 px-3 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Change</button>
                        </div>
                    </div>
                   
                    <div>
                        <label for="" class="block text-sm font-medium text-gray-700">Link</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input readnoly type="text" name="link" value="{{ $bookstore->link }}" id="" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="www.example.com">
                        </div>
                    </div>

                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700">Estatus</label>
                        <select id="status" name="status" value="{{ $bookstore->status }}" autocomplete="status-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            <option>Activo</option>
                            <option>Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Borrar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection