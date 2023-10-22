<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <html>
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <script src="https://cdn.tailwindcss.com"></script>
                        <link rel="stylesheet" href="/css/games.css">
                    </head>
                        <body>
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        @if(count($allGames) > 0) 
                                        <table class="min-w-full text-center text-sm font-light">
                                        <thead
                                            class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">NAME</th>
                                                @role('admin')
                                                <th scope="col">ACTIONS</th>
                                                @endrole
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($allGames as $game)
                                        <tr>
                                            <th scope="row">{{ $game->id }}</th>
                                            <td>{{ $game->name }}</td>
                                            @role('admin')
                                            <td>
                                                <a href="/games/edit/{{ $game->id }}" class="bg-transparent hover:bg-black text-black font-semibold hover:text-white h-8 px-4 m-4 border border-black-200 hover:border-transparent rounded">Edit</a>
                                                <form action="/games/{{ $game->id }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="hover:bg-black text-black font-semibold hover:text-white py-0 px-4 m-4 border border-black-200 hover:border-transparent rounded">Delete</button>
                                                </form>
                                            </td>
                                            @endrole
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        </table>
                                        @endif
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </body>
                    </html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
