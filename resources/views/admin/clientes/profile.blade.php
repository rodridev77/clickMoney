<div class="row">
  <div class="col-sm-12">
      <a href="#" onclick="loadViewInSelectContent('{{route('admin.clientes')}}')">
          <i class='fas fa-arrow-left' style='font-size:16px;color: rgba(0, 123, 255, .7);'></i><span style="margin-left:5px">voltar</span>
      </a>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-3">
      <!-- Profile Image -->
      <div class="card card-primary card-outline">
          <div class="card-body box-profile">
              <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{asset('dist/img/user2-160x160.jpg')}}"
                      alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">Alexander Pierce</h3>

              <p class="text-muted text-center">Cliente</p>

              <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                      <b>ID do Cliente</b> <a class="float-right">1322</a>
                  </li>
                  <li class="list-group-item">
                      <b>ID da Maquina</b> <a class="float-right">123456</a>
                  </li>
                  {{-- <li class="list-group-item">
          <b>Following</b> <a class="float-right">543</a>
        </li>
        <li class="list-group-item">
          <b>Friends</b> <a class="float-right">13,287</a>
        </li> --}}
              </ul>
          </div>
          <!-- /.card-body -->
      </div>
      <!-- /.card -->
  </div>
  <!-- /.col -->
  <div class="col-md-9">
      <div class="card card-primary card-outline">
          <div class="card-header p-2">
             Dados do Cliente
          </div><!-- /.card-header -->
          <div class="card-body">
              <div class="tab-content">
                  <div class="tab-pan" id="settings">
                      <form class="form-horizontal" action='#'>
                          <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                              <div class="col-sm-10">
                                  <input type="email" value="Alexander Pierce" class="form-control" id="inputName" placeholder="Name" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                  <input type="email" value="alexander@email.com" class="form-control" id="inputEmail" placeholder="Email" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="inputExperience" class="col-sm-2 col-form-label">Razão</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputSkills" placeholder="Razão" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="inputExperience" class="col-sm-2 col-form-label">Fantasia</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputSkills" placeholder="Fanatasia" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="inputSkills" class="col-sm-2 col-form-label">CNPJ/CPF</label>
                              <div class="col-sm-10">
                                  <input type="text" value="000.000.000-00" class="form-control" id="inputSkills" placeholder="CNPJ" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="inputSkills" class="col-sm-2 col-form-label">Endereço</label>
                              <div class="col-sm-10">
                                  <input type="text" value="Rua: Antonio Bandeira n 4" class="form-control" id="inputSkills" placeholder="Endereço" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="inputSkills"  class="col-sm-2 col-form-label">Estado</label>
                              <div class="col-sm-10 col-md-4">
                                  <input type="text" value="CE" class="form-control" id="inputSkills" placeholder="Estado" readonly>
                              </div>
                              <label for="inputSkills" class="col-sm-2 col-form-label">Cidade</label>
                              <div class="col-sm-10 col-md-4">
                                  <input type="text" value="Fortaleza" class="form-control" id="inputSkills" placeholder="Cidade" readonly>
                              </div>
                          </div>
                      </form>
                  </div>
                  <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
          </div><!-- /.card-body -->
      </div>
      <!-- /.nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
