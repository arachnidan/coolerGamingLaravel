@extends('plantilla')

@section('seccion')

<form action="{{ route('usuario.registrarse')}}" method="post">
    @csrf
    <div class="row">
      <div class="col">
      <label for="user">Usuario</label>
      <input type="text" class="form-control" id="inputUser" name="user" required>
      <div class="invalid-feedback">Debe ingresar un usuario</div>
      </div>
      <div class="col">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" id="inputPassword" name="password" required>
        <div class="invalid-feedback">Debe ingresar un usuario</div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" name="name" required>
        <div class="invalid-feedback">Debe ingresar su nombre</div> 
      </div>
      <div class="col">
        <label for="lastName">Apellido</label>
        <input type="text" class="form-control" name="lastname" required>
        <div class="invalid-feedback">Debe ingresar su apellido</div> 
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="birthday">Fecha de Nacimiento</label>
        <input type="text" class="form-control" name="birthday" required>
      </div>
      <div class="col">
        <label for="phone">Teléfono</label>
        <input type="text" class="form-control" name="phone">
      </div>
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" required>
  </div>
  <button type="submit" class="btn btn-primary">Registrarse</button>
</form>

@endsection