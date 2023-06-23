    <div class="flex  text-gray-500  pb-4 bg-white dark:bg-gray-900 p-10" > 
      
        <div  class="mr-6 mt-2">
            <span><i class="fa-solid fa-magnifying-glass"></i></span>
            </div>

            <input type="text" id="table-search-users" class=" p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-full bg-gray-50
            focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
             dark:focus:ring-blue-500 dark:focus:border-blue-500" 
              wire:model="search"
              placeholder="Buscar Usuarios">

                <select wire:model="perpage" class="border-gray-300 rounded-lg">
                    <option value="5" class="text-gray-500">5</option>
                    <option value="10" class="text-gray-500">10</option>
                    <option value="15" class="text-gray-500">15</option>
                    <option value="20" class="text-gray-500">20</option>
                </select>  
            <button wire:click="clear" class="ml-6">
            <span><i class="fa fa-eraser"></i></span>
            </button>
             
      </div>
       
     
        
   
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                     ID
                     <button wire:click="sortable('id')">
                        <span><i class="fa fa{{$campo === 'id' ? $icon: '-circle'}}"></i></span>
                    </button>
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                    <button wire:click="sortable('name')">
                        <span><i class="fa fa{{$campo === 'name' ? $icon: '-circle'}}"></i></span>
                    </button>
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                    <button wire:click="sortable('email')">
                        <span><i class="fa fa{{$campo === 'email' ? $icon: '-circle'}}"></i></span>
                    </button>
                </th>
                <th scope="col" class="px-6 py-3">
                    role
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                <div class="text-base font-semibold">{{$user->id}}</div>
                </td>
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    
                    <div class="pl-3">
                        <div class="text-base font-semibold">{{$user->name}}</div>
                       
                    </div>  
                </th>
                <td class="px-6 py-4">
                <div class="font-normal text-gray-500">{{$user->email}}</div>
                </td>

                <td class="px-6 py-4">
                <div class="font-normal text-gray-500">Administrador</div>
                </td>

                <td class="px-6 py-4">
                <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border 
                border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2
                 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" 
                 data-hs-overlay="#hs-focus-management-modal" wire:click="showModal({{$user->id}})" href="javascript:void(0)">
                    Editar
                    </button>

                    <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border 
                border-transparent font-semibold bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:ring-2
                 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" 
                 data-hs-overlay="#hs-focus-management-modal" wire:click="showModal({{$user->id}})">
                    Eliminar
                    </button>
 
                </td>
            </tr>
            
            @endforeach
       
        </tbody>

    </table>
    <div class=" items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
    {{$users->links()}}
    </div>
</div>
</div>



 

 
 
 
