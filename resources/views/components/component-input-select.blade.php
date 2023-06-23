<div>
    <div class="mb-2">
        <label for="{{$name}}" class="block text-sm font-medium leading-6 text-gray-900 ">{{$label}}</label>
        <div class="relative mt-2 rounded-md shadow-sm">
         
            <select   class="block w-full rounded-md border-0 py-1.5 pl-1 pr-20 text-gray-900 ring-1 ring-inset
            ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                <option value="" class="text-gray-500">Seleccione</option>
                @foreach($options as $key => $option)
                    <option value="{{$key}}" class="text-gray-500">{{$option}}</option>
                @endforeach
            </select> 
         
        </div>
      </div>
</div>

 