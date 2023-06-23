
<link
	href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	rel="stylesheet">
 

    <div class="flex  text-gray-500  pb-4 bg-black dark:bg-gray-900 p-10 mt-2 rounded-lg" > 
      
        <div  class="mr-6 mt-2">
            <span><i class="fa-solid fa-magnifying-glass"></i></span>
            </div>

            <input type="text" id="table-search-users" class=" p-2 pl-10 text-sm text-white border border-gray-300 rounded-lg w-full bg-gray-900
            focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
             dark:focus:ring-blue-500 dark:focus:border-blue-500" 
              wire:model="search"
              placeholder="Buscar Usuarios">

                <select wire:model="perpage" class="border-gray-300 rounded-lg bg-gray-900">
                    <option value="5" class="text-gray-500">5</option>
                    <option value="10" class="text-gray-500">10</option>
                    <option value="15" class="text-gray-500">15</option>
                    <option value="20" class="text-gray-500">20</option>
                </select>  
            <button wire:click="clear" class="ml-6">
            <span><i class="fa fa-eraser"></i></span>
            </button>
             
      </div>
	<div class=" w-full  rounded">
		<div class="overflow-auto bg-black shadow-md rounded  ">
			<table class="table text-gray-400 border-separate text-sm min-w-max w-full table-auto p-2">
                 
                    
				<thead class="bg-gray-900 text-gray-500">
					<tr>
						<th class="p-3  text-left">Marca</th>
						<th class="p-3 text-left">Sucursal</th>
						<th class="p-3 text-left">Tecnico</th>
						<th class="p-3 text-left">Estado</th>
						<th class="p-3 text-left">Accion</th>
					</tr>
				</thead>
				<tbody>

					<tr class="bg-gray-800">
						<td class="p-3">
							<div class="flex align-items-center"> 
                                <div class="ml-3">
									<div class="">Nike</div>
									<div class="text-gray-500">23/06/2023</div>
								</div>
							</div>
						</td>
						<td class="p-3">
							Ecatepec Edo.Mex
						</td>
						<td class="p-3 font-bold">
							Diana Reyna
						</td>
						<td class="p-3">
							<span class="bg-green-400 text-gray-50 rounded-md px-2">Activo</span>
						</td>
						<td class="p-3 ">
							<a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a>
							<a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
								<i class="material-icons-outlined text-base">edit</i>
							</a>
							<a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
								<i class="material-icons-round text-base">delete_outline</i>
							</a>
						</td>
					</tr>

                    <tr class="bg-gray-800">
						<td class="p-3">
							<div class="flex align-items-center"> 
                                <div class="ml-3">
									<div class="">Adidas</div>
									<div class="text-gray-500">24/06/2023</div>
								</div>
							</div>
						</td>
						<td class="p-3">
							Neza Edo.Mex
						</td>
						<td class="p-3 font-bold">
							Ariana Gonzalez
						</td>
						<td class="p-3">
							<span class="bg-red-400 text-gray-50 rounded-md px-2">Cerrado</span>
						</td>
						<td class="p-3 ">
							<a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a>
							<a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
								<i class="material-icons-outlined text-base">edit</i>
							</a>
							<a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
								<i class="material-icons-round text-base">delete_outline</i>
							</a>
						</td>
					</tr>

                    <tr class="bg-gray-800">
						<td class="p-3">
							<div class="flex align-items-center"> 
                                <div class="ml-3">
									<div class="">Bershka</div>
									<div class="text-gray-500">25/06/2023</div>
								</div>
							</div>
						</td>
						<td class="p-3">
							Polanco Edo.Mex
						</td>
						<td class="p-3 font-bold">
							Karla Reyna
						</td>
						<td class="p-3">
							<span class="bg-orange-400 text-gray-50 rounded-md px-2">Pendiente</span>
						</td>
						<td class="p-3 ">
							<a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a>
							<a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
								<i class="material-icons-outlined text-base">edit</i>
							</a>
							<a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
								<i class="material-icons-round text-base">delete_outline</i>
							</a>
						</td>
					</tr>

					 
				</tbody>
 
			</table>
       
		</div>
	</div>
</div>
<style>
	.table {
		border-spacing: 0 15px;
	}

	i {
		font-size: 1rem !important;
	}

	.table tr {
		border-radius: 20px;
	}

	tr td:nth-child(n+5),
	tr th:nth-child(n+5) {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
</style>
 

 



    