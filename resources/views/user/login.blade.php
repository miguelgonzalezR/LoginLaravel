@extends('basenl')

@section('content')


    <div class="container" style="margin-top:8%;">
        <form action="/login" method="post">
            @csrf

            <h1>login</h1>
            @include('mensajes')

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de usuario o correo</label>
                <input type="text" class="form-control" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password">
            </div>

            

            <button type="submit" class="btn btn-primary">Submit</button><br><br>
        </form>

        <a href="/registrarse">Registrarse</a><br>

    </div>
@endsection