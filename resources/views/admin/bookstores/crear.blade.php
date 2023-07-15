<div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Bibliotecas</h3>
            <p class="mt-1 text-sm text-gray-600">Completa los campos para añadir una nuevo punto de compra.</p>
        </div>
    </div>
    <div class="mt-5 md:col-span-2 md:mt-0">
        <form action="/bookstores" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="" class="block text-sm font-medium text-gray-700">ID</label>
                            <input type="text" name="id" id="" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" disabled>
                        </div>
                    </div>

                    <div>
                        <label for="" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="name" id="" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>
                    </div>

                    <div>
                         <label class="block text-sm font-medium text-gray-700">Cover photo</label>
                         <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                             <div class="space-y-1 text-center">
                                 <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                     <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                                 <div class="flex text-sm text-gray-600">
                                     <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                         <span>Upload a file</span>
                                         <input id="file-upload" name="img" type="file" accept="image/*" class="sr-only" required>
                                     </label>
                                     <p class="pl-1">or drag and drop</p>
                                 </div>
                                 <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                             </div>
                         </div>
                     </div>

                    <div>
                        <label for="" class="block text-sm font-medium text-gray-700">Link</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="link" id="" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="www.example.com" required>
                        </div>
                    </div>

                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700">Estatus</label>
                        <select id="status" name="status" autocomplete="status-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            <option>Activo</option>
                        </select>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Crear</button>
                </div>
            </div>
        </form>
    </div>
</div>