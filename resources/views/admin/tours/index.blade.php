@extends('layout')

@section('title', 'Accueil Admin')

@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-8">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="bg-slate-100">
                <th scope="col" class="px-6 py-3">
                    titre
                </th>
                <th scope="col" class="px-6 py-3">
                    Prix
                </th>
                <th scope="col" class="px-6 py-3">
                    Ville
                </th>
                <th scope="col" class="px-6 py-3">
                    Notes
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($tours as $tour)

                <tr class="border-b bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{ $tour->title }}
                    </th>
                    <td class="px-6 py-4">
                        {{$tour->price}}$
                    </td>
                    <td class="px-6 py-4">
                        {{$tour->city}}
                    </td>
                    <td class="px-6 py-4">
                        {{$tour->rating}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                    </td>
                </tr>

            @endforeach
             </tbody>
        </table>


    </div>
   <div class="m-8">
       {{$tours->links()}}
   </div>
@endsection

