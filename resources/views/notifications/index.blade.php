<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2 m-5 mb-10">

                    <div class="bg-white overflow-hidden border border-gray-200 p-3">
                        <div class="m-2 text-justify text-sm">
                            <p class="text-right text-xs">Notificaciones</p>
                            <h2 class="font-bold text-lg h-2 mb-8">NO leidas</h2>
                            @foreach($unreadNotifications as $unreadNotification)
                                <div class="w-full">
                                    <div class="flex cursor-pointer my-1 hover:bg-blue-100 rounded">
                                        <div class="w-8 h-10 text-center py-1">
                                            <p class="text-3xl p-0 text-red-100">&bull;</p>
                                        </div>
                                        <div class="w-4/5 h-10 py-3 px-1">
                                            <a href="{{ $unreadNotification->data['link'] }}">
                                                <p class="hover:text-blue-dark">{{ $unreadNotification->data['text'] }}</p>
                                            </a>
                                        </div>
                                        <div class="w-1/5 h-10 text-right">
                                            <form method="POST" action="{{ route('notifications.read', $unreadNotification->id) }}">
                                                @method('PATCH')
                                                @csrf
                                                <button type="submit" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-red-400 hover:text-gray-500 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                                    <span class="sr-only">Close menu</span>
                                                    <!-- Heroicon name: outline/x -->
                                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden border border-gray-200 p-3">
                        <div class="m-2 text-justify text-sm">
                            <p class="text-right text-xs">Notificaciones</p>
                            <h2 class="font-bold text-lg h-2 mb-8">Leidas</h2>
                            @foreach($readNotifications as $readNotification)
                                <div class="w-full">
                                    <a href="{{ $readNotification->data['link'] }}">
                                        <div class="flex cursor-pointer my-1 hover:bg-blue-100 rounded">
                                            <div class="w-8 h-10 text-center py-1">
                                                <p class="text-3xl p-0 text-red-100">&bull;</p>
                                            </div>
                                            <div class="w-4/5 h-10 py-3 px-1">
                                                <p class="hover:text-blue-dark">{{ $readNotification->data['text'] }}</p>
                                            </div>
                                            <div class="w-1/5 h-10 text-right">
                                                <form method="POST" action="{{ route('notifications.destroy', $readNotification->id) }}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-red-400 hover:text-gray-500 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                                        <span class="sr-only">Close menu</span>
                                                        <!-- Heroicon name: outline/x -->
                                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
