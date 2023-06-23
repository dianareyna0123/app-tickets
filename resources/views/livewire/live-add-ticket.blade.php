
<div class="w-full h-14 pt-2 text-center  bg-purple-700  shadow overflow-hidden sm:rounded-md font-bold text-3xl text-white ">
        Agregar Ticket Nuevo </div>

    <section class="text-gray-600 body-font  m-0 p-0 relative"></section>

    <div class=" mr-10 ml-10">
        <div class="flex justify-between "> 
            <img src="{{asset ('/img/logo2.png')}}" width="200px" >
            <img src="{{asset ('/img/logo3.png')}}" width="100px">
        </div>

   
        
        <div class="mt-10 md:mt-0 md:col-span-2">
            <form action="#" method="POST">
                
                <div class="shadow-lg overflow-hidden sm:rounded-lg mb-3 mt-3 border-gray-200 border-2 ">
                    <h3 class="px-5 pt-5 font-extrabold text-2xl">Seleccione la Ubicación Del Equipo</h3>
                    <div class="px-2 py-8 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-6 sm:col-span-3">
                                <label for="Sucursal" class="block text-sm font-medium text-gray-700">Sucursal</label>
                                <select id="Sucursal" name="Sucursal" autocomplete="Sucursal"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none
                                     focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Seleccione</option>
                                    <option>Ecatepec Edo. Mex.</option>
                                    <option>Neza Edo. Mex.</option>
                                    <option>Buenavista</option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="Solicitado" class="block text-sm font-medium text-gray-700">Solicitado Por</label>
                                <input type="text" name="Solicitado" placeholder="Quien Solicita Ticket" id="Solicitado"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="Direcc" class="block text-sm font-medium text-gray-700">Dirección De La Entrega</label>
                                <textarea type="text" name="Direcc"  id="Direcc"
                                    class="mt-1 focus:ring-indigo-500 text-gray-300  focus:border-indigo-500 block w-full shadow-sm sm:text-sm
                                     border-gray-300 rounded-md" placeholder="Dirección"></textarea>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="fact" class="block text-sm font-medium text-gray-700">Datos De facturación</label>
                                <textarea type="text" name="fact"  id="fact"
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 text-gray-300  focus:border-indigo-500 block w-full shadow-sm sm:text-sm
                                     border-gray-300 rounded-md" placeholder="Ingrese Datos De facturación"></textarea>
                            </div>

                            
                            <div class="col-span-12 sm:col-span-6">
                                <label for="" class="block text-sm font-medium text-gray-700">Piso</label>
                                <select id="Piso" name="Piso" autocomplete="Piso"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none
                                     focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Seleccione</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>

                        </div>
                    </div>  
                </div>

                <div class="shadow-lg overflow-hidden sm:rounded-lg mb-3 mt-3 border-gray-200 border-2 ">
                    <h3 class="px-5 pt-5 font-extrabold text-2xl">Datos Para Realizar Servicio</h3>
                    <div class="px-2 py-8 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-6 sm:col-span-3">
                                <label for="" class="block text-sm font-medium text-gray-700">Fecha</label>
                                <input type="Date" name="fecha"  id="fecha"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="" class="block text-sm font-medium text-gray-700">Hora </label>
                                <input type="time" name="hora" id="hora"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="" class="block text-sm font-medium text-gray-700">Contacto</label>
                                <input type="text"  placeholder="Contactot" id="contacto"
                                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="" class="block text-sm font-medium text-gray-700">Telefono</label>
                                <input type="number" name="Telefono"  id="Telefono"
                                    class="mt-1 focus:ring-indigo-500 text-gray-300  focus:border-indigo-500 block w-full shadow-sm sm:text-sm
                                     border-gray-300 rounded-md" placeholder="Ej. 5566110022"/>
                            </div>
                        </div>
                    </div>  
                </div>
                
                <div class="shadow-lg overflow-hidden sm:rounded-lg mb-3 mt-3 border-gray-200 border-2 ">
                    <h3 class="px-5 pt-5 font-extrabold text-2xl">Información del Equipo</h3>
                    <div class="px-2 py-8 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-12 sm:col-span-6">
                                <label for="" class="block text-sm font-medium text-gray-700">Tipo</label>
                                <select id="Tipo" name="Tipo"  
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none
                                     focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Seleccione</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <label for="" class="block text-sm font-medium text-gray-700">Modelo</label>
                                <select id="Modelo" name="Modelo"  
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none
                                     focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Seleccione</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <label for="" class="block text-sm font-medium text-gray-700">Numero de Serie</label>
                                <input type="text"  placeholder="Serie" id="n_serie"
                                   
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                    </div>  
                </div>
                  

                <div class="shadow-lg overflow-hidden sm:rounded-lg mb-3 mt-3 border-gray-200 border-2 ">
                    <h3 class="px-5 pt-5 font-extrabold text-2xl">Descripción del Problema</h3>
                    <div class="px-2 py-8 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-12 sm:col-span-6">
                                <label for="" class="block text-sm font-medium text-gray-700">Nivel De Urgencia</label>
                                <select id="Urgencia" name="Urgencia"  
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none
                                     focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Seleccione</option>
                                    <option>Baja</option>
                                    <option>Media</option>
                                    <option>Alta</option>
                                    <option>Muy Alta</option>
                                </select>
                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <label for="" class="block text-sm font-medium text-gray-700">Descripción del Problema</label>
                                <textarea type="number" name="Telefono"  id="Telefono"
                                    class="mt-1 focus:ring-indigo-500 text-gray-300  focus:border-indigo-500 block w-full shadow-sm sm:text-sm
                                     border-gray-300 rounded-md" placeholder="Describe claramente el problema"></textarea>
                            </div>                       
                    </div>  
                </div>
            </div>
        </div>
</fieldset>

                   
                    <div class="px-4 py-3 bg-white text-right sm:px-6">
                        <button type="submit"
                            class="mr-4 inline-flex justify-center w-24 py-2 px-4 border border-transparent shadow-sm text-sm font-medium 
                            rounded-md ring ring-gray-500 ring-offset-4  text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 
                             focus:ring-indigo-500">
                            Borrador
                        </button>
                        <button type="submit"
                            class="inline-flex justify-center w-24 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md ring 
                             ring-indigo-500 ring-offset-4 bg-indigo-600 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2 
                              focus:ring-indigo-500 text-white">
                            Salvar
                        </button>

                    </div>
                </div>
        </div>
        </form>
    </div>
    </section>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class=""></div>
        </div>
    </div>
</div>

