
@extends('basenl')

@section('content')

    <div class="container" style="margin-top:8%;">
        <form action="/registrarse" method="POST">
            @csrf

            @include('mensajes')

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
                <input type="text" class="form-control" name="username" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="emil" class="form-control" name="email" aria-describedby="emailHelp">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
                <input type="password" class="form-control" name="password_confirmation">
            </div>

            

            <button type="submit" class="btn btn-primary">Submit</button><br><br>
        </form>

        <a href="/login">Login</a><br>

    </div>


@endsection
