<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enviar mensaje') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- component -->
                <div class="heading text-center font-bold text-2xl m-5 text-gray-800">Mensaje:</div>
                <style>
                    body {background:white !important;}
                </style>
                <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
                    <form method="POST" action="{{ route('messages') }}">
                        @csrf
                        <select name="recipient_id" class="{{ $errors->has('recipient_id') ? 'border-red-500' : '' }} mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="">Seleccione un usario</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('recipient_id', "<span class='flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1'>:message</span>") !!}
                        <div class="mt-1">
                            <textarea name="body" rows="5" class="{{ $errors->has('body') ? 'border-red-500' : '' }} shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe tu mensaje"></textarea>
                            {!! $errors->first('body', "<span class='flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1'>:message</span>") !!}
                        </div>

                        <div class="icons flex text-gray-500 m-2"></div>
                        <!-- buttons -->
                        <div class="buttons flex">
                            <div class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-500 ml-auto">Cancel</div>
                            <div class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500">
                                <button type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
