
@extends('layauts.app')

@section('titulo')

    Datos Basicos

@endsection

@section('contenido')

        <div class="md:flex md:justify-center md:gap-10 md:ítems-center">

            <div class="md:w-6/12 p-5">
                <img src="{{asset  ('img/registrar.jpg') }}" alt="">
            </div>

            <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">

                <form action="/Actualizar-datos" method="POST">
                    
                    @csrf
                    <div class="mb-5">
                        <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                        <input type="text" name="name " id="name" placeholder="Nombre" onkeyUp="nombre()" class="border p-3 w-full rounded-lg @error('name')
                        border-red-500 
                        @enderror">

                        @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Apellido</label>
                        <input type="text" name="username" id="username" placeholder="Apellido" class="border p-3 w-full rounded-lg @error('username')
                        border-red-500
                        @enderror">

                        @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror

                    </div>
                    <div class="mb-5">
                        <label for="number" class="mb-2 block uppercase text-gray-500 font-bold"></span>Cedula</label>
                        <input type="text" name="card" id="card" placeholder="Cedula" class="border p-3 w-full rounded-lg @error ('email')
                        border-red-500
                        @enderror">

                        @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror

                    </div>

                    <div class="mb-5">
                        <label for="number" class="mb-2 block uppercase text-gray-500 font-bold">Telefono</label>
                        <input type="text" name="telefono" id="telefono" placeholder="Telefono" class="border p-3 w-full rounded-lg @error ('email')
                        border-red-500
                        @enderror">

                        @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror

                    </div>

                    <div class="mb-5">
                        <label for="number" class="mb-2 block uppercase text-gray-500 font-bold">Dirección</label>
                        <input type="text" name="direccion" id="direccion" placeholder="Dirección" class="border p-3 w-full rounded-lg @error ('email')
                        border-red-500
                        @enderror">

                        @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror

                    </div>
                    

                    <div class="mb-5">
                        <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Correo</label>
                        <input type="text" name="email" id="email" placeholder="Correo" class="border p-3 w-full rounded-lg @error ('email')
                        border-red-500
                        @enderror">

                        @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror

                    </div>
                    <div class="mb-5">
                        <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="Contraseña" class="border p-3 w-full rounded-lg @error('password')
                        border-red-500
                        @enderror">

                        @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror

                    </div>

                    <div class="mb-5">
                        <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Confirmar Contraseña</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar Contraseña" class="border p-3 w-full rounded-lg @error ('password-confirmation')
                        border-red-500
                        @enderror">

                        @error('password_confirmation')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror
                    </div>

                    <input type="submit" value="Actualizar datos" class=" cuenta bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white">

                    <input type="submit" value="Eliminar datos" class=" eliminar bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white">

                </form>
            </div>
        </div>

@endsection