<div>

  <div>
    <div class="{{$showModal}} fixed relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    
     
      <div class=" fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    
      <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
      
          <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
    
              <div class="sm:flex sm:items-start">
                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100  sm:mx-0 sm:h-10 sm:w-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6" class="text-green-600">
                <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
                </div>

              <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
              <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Editar Usuario</h3>
              <div class="mt-2">
                <p class="text-sm text-gray-500">
                    <form>
                     <div class="flex ">
                      
                        <div class="mb-2 mr-2">
                            <label for="" class="block text-sm font-medium leading-6 text-gray-900 ">Nombre</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                              <input type="text" id="nombre" class="block w-full rounded-md border-0 py-1.5 pl-1 pr-20 text-gray-900 ring-1 ring-inset
                               ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                               placeholder="Ingrese Nombre">
                            </div>
                          </div>

                         
                            <div class="mb-2">
                                <label for="" class="block text-sm font-medium leading-6 text-gray-900 ">Rol</label>
                                <div class="relative mt-2 rounded-md shadow-sm">
                                  <select wire:model="perpage" class="border-gray-300 rounded-lg">
                                    <option value="select" class="text-gray-500">Seleccione</option>
                                    <option value="SuperAdministrador" class="text-gray-500">SuperAdministrador</option>
                                    <option value="Administrador" class="text-gray-500">Administrador</option>
                                    <option value="Moderador" class="text-gray-500">Moderador</option>
                                    <option value="Usuario" class="text-gray-500">Usuario</option>
                                </select>  
                                </div>
                              </div>
                     </div>
                            
                     <div class="mb-2 mr-2">
                      <label for="" class="block text-sm font-medium leading-6 text-gray-900 ">Email</label>
                      <div class="relative mt-2 rounded-md shadow-sm">
                        <input type="email" id="Email" class="block w-full rounded-md border-0 py-1.5 pl-1 pr-20 text-gray-900 ring-1 ring-inset
                         ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                         placeholder="Ingrese su Email">
                      </div>
                    </div>
                           
                            
                    </form>
                </p>
              </div>
            </div>
          </div>

        </div>

        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">

          <button type="button" class="inline-flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold
           text-white shadow-sm hover:bg-blue-500 sm:ml-3 sm:w-auto">Actualizar</button>

          <button type="button" 
          wire:click="cerrarModal"
          class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2
           text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 
           sm:w-auto">Cancelar</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>

</div>

{{-- <x-component-modal  :showModal="$showModal"> --}}

{{-- </div>
<x-component-input-select 
name="roles" 
label="Rol" 
:options="['superadmin'=>'SuperAdministrador','admin'=>'Administrador','Moder'=>'Moderador','User'=>'Usuario']">
</x-component-input-select>
</div>
    
    <x-component-input placeHolder="Ingrese su correo" name="email" label="Correo email"></x-component-input>
      <x-component-input placeHolder="Ingrese su correo" name="email" label="Correo email"></x-component-input> --}}
