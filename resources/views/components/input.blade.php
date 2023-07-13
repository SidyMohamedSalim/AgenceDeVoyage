


<div>
    <div class="mb-6">
        <label for="{{$name}}-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label  }}</label>
        <input value="{{old($name, $value)}}" type="{{$type ?? "text"}}" id="{{$name}}" class="bg-gray @error($name) bg-red-50 border border-red-500 @enderror -50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @error($name)
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{$message}}</p>
        @enderror
    </div>
</div>


