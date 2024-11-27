<link
  href="https://fonts.googleapis.com/css2?family=Danfo&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
  rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="Conecte-se-container">
  <h1 class="titulo">Boas-vindas!</h1>
  <form id="loginForm">
    <label class="titulo-campo" for="userType">Selecione o tipo de usuário</label>
    <select class="seleção" id="userType" name="userType" required>
      <option value="admin">Sistema Fibra</option>
      <option value="user">Externo</option>
    </select>

    <label class="titulo-campo" for="username">Usuário</label>
    <div class="input-group">
      <input class="input-campos" type="text" id="username" name="username" required>
      <i class="fas fa-user"></i>
    </div>

    <label class="titulo-campo" for="password">Senha</label>
    <div class="input-group">
      <input class="input-campos" type="password" id="password" name="password" required>
      <i class="fas fa-lock"></i>
    </div>

    <a href="#" class="esqueceu-senha">Esqueci minha senha</a>
    <button class="entrar" type="submit">Entrar</button>
    <a href="#" class="link-de-registro">Ainda não tenho uma conta</a>
  </form>
</div>