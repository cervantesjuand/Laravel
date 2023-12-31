@extends('layouts.app')

@section('titulo')
    Hola desde Dashboard
@endsection

@section('contenido')
        <div class="flex justify-center">
            <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row gap-10">
                <div class="w-8/12 lg:w-6/12 px-5">
                    <img src="{{ asset('img/usuario.svg') }}" alt="imagen de usuario">
                </div >

                <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-10">
                    <p class="text-gray-700 text-2xl mb-5">{{ $user->username }}</p>
                    <p class="text-gray-800 text-sm mb-3 font-bold">
                        0
                        <span class="font-normal mt-10"> Seguidores</span>
                    </p>
                    <p class="text-gray-800 text-sm mb-3 font-bold">
                        0
                        <span class="font-normal"> Siguiendo</span>
                    </p>
                    <p class="text-gray-800 text-sm mb-3 font-bold">
                        0
                        <span class="font-normal"> Post</span>
                    </p>
                </div>
            </div>
        </div>
@endsection

