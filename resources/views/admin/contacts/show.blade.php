@extends('admin.plantilla.app')

@section('titulo')
Contactos
@endsection

@section('contenido')
<div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Contactos</h3>
            <p class="mt-1 text-sm text-gray-600">Completa los campos para añadir una nuevo contacto.</p>
        </div>
    </div>
    <div class="mt-5 md:col-span-2 md:mt-0">
        <form action="/contacts/{{$contact->id}}" method="POST">
        @csrf
        @method('DELETE')
            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="" class="block text-sm font-medium text-gray-700">ID</label>
                            <input readonly type="text" name="id" value="{{ $contact->id }}" id="" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" disabled>
                        </div>
                    </div>

                    <div>
                        <label for="" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input readonly type="text" name="name" value="{{ $contact->name }}" id="" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <label for="" class="block text-sm font-medium text-gray-700">Correo</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input readonly type="text" name="mail" value="{{ $contact->mail }}" id="" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="www.example.com">
                        </div>
                    </div>

                    <div class="col-span-3 sm:col-span-2">
                        <label for="" class="block text-sm font-medium text-gray-700">Tel</label>
                        <input readonly type="text" name="tel" id="" value="{{ $contact->tel }}" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>

                    <div>
                        <label for="" class="block text-sm font-medium text-gray-700">Texto</label>
                        <div class="mt-1">
                            <textarea id="" name="text" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $contact->text }}</textarea>
                        </div>
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