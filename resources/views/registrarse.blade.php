@extends('plantilla')

@section('seccion')

<form>
    <div class="row">
      <div class="col">
      <label for="exampleInputPassword1">Usuario</label>
      <input type="text" class="form-control" id="exampleInputPassword1" required>
      <div class="invalid-feedback">Debe ingresar un usuario</div>
      </div>
      <div class="col">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" required>
        <div class="invalid-feedback">Debe ingresar un usuario</div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="exampleInputPassword1">Nombre</label>
        <input type="text" class="form-control" required>
        <div class="invalid-feedback">Debe ingresar su nombre</div> 
      </div>
      <div class="col">
        <label for="exampleInputPassword1">Apellido</label>
        <input type="text" class="form-control" required>
        <div class="invalid-feedback">Debe ingresar su apellido</div> 
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="exampleInputPassword1">Fecha de Nacimiento</label>
        <input type="text" class="form-control" required>
      </div>
      <div class="col">
        <label for="exampleInputPassword1">Teléfono</label>
        <input type="text" class="form-control">
      </div>
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <button type="submit" class="btn btn-primary">Registrarse</button>
</form>
@endsection