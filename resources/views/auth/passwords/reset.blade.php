@include('layouts.admin.head')
@section('titulo','ADG')

<main>
    <div id="dashboard" class="reset-password">
        <section id="reset-password">
                <form method="POST" action="#">
                @csrf
                <h6 class="titulo">Alterar senha</h6>
                <div class="input-field">
                    <i class="material-icons">account_circle</i>
                    <input id="email" type="email" class="suave" name="email" required autofocus placeholder="Email">
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <div class="input-field">
                    <i class="material-icons">lock</i>
                    <input id="password" type="password" class="suave" name="password" required placeholder="Senha">
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                 <button type="submit" class="suave click">{{ __('Login') }}</button>
                <button href="/home">Cancelar</button>
              </form>
        </section>
    </div>
</main>