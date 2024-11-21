@extends('template.template')
@section('title', 'welcome')
@section('Conteudo')


<style>
.pje {
  display: flex;
  flex-direction: column;
  gap: 20px;
  justify-content: center;
  align-items: center;
}
</style>

<div class=" pje">
  <div class="">
    <img src="" alt="">
    <h2>Boas Vindas!</h2>
  </div>

  <div class="p">
    <form action="" method="POST">
      <div class="form-group">
        <label for="username">Usuário</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="btn">Entrar</button>
      <div class="forgot-password">
        <a href="#">Esqueci Minha Senha</a>
      </div>
    </form>
  </div>
</div>

@endsection