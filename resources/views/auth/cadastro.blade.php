@extends('cadastro-template')

@section('form')
<div class="card">
    <div class="card-header p-2">
      <ul class="nav nav-pills">
        <li class="nav-item">Cadastro</li>
      </ul>
    </div><!-- /.card-header -->
    <div class="card-body">
      <div class="tab-content">
        <div class="tab-pan" id="settings">
          <form class="form-horizontal" action='#'>
            <div class="form-group row">
              <label for="inputName" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputName" placeholder="Name">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label">Senha</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="password" placeholder="Name">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputExperience" class="col-sm-2 col-form-label">Razão</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputSkills" placeholder="Razão">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputExperience" class="col-sm-2 col-form-label">Fantasia</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputSkills" placeholder="Fantasia">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputSkills" class="col-sm-2 col-form-label">CNPJ</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputSkills" placeholder="CNPJ">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputSkills" class="col-sm-2 col-form-label">Endereço</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputSkills" placeholder="Endereço">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputSkills" class="col-sm-2 col-form-label">Estado</label>
              <div class="col-sm-10 col-md-4">
                <input type="text" class="form-control" id="inputSkills" placeholder="Estado">
              </div>
              <label for="inputSkills" class="col-sm-2 col-form-label">Cidade</label>
              <div class="col-sm-10 col-md-4">
                <input type="text" class="form-control" id="inputSkills" placeholder="Cidade">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">cadastrar</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div><!-- /.card-body -->
  </div>
@endsection