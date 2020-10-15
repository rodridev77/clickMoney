@extends('forms.form-template')

@section('form-card')
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Painel Administrativo</p>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        @endif
        <form method="post" id="signin-form" action="{{route("password.reset")}}">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="email" id="signin-cpf" class="form-control" placeholder="Email"
                    required="">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" id="signin-pass" class="form-control"
                    placeholder="Senha" required="">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password_confirmation" id="signin-pass" class="form-control"
                    placeholder="Confirmar senha" required="">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <input name="token" value={{$token}} type="hidden">
            <div class="row">
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block admin-auth-btn">Entrar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-card-body -->
</div>
@endsection