<link
  href="https://fonts.googleapis.com/css2?family=Danfo&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
  rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<style>
  body {
    font-family: "inter", sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f2f2f2;
  }

  .login-container {
    background: #ffffff;
    border-radius: 20px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 300px;
  }

  h1 {
    color: #2d87ff;
  }

  label {
    display: block;
    margin-top: 10px;
    font-size: 14px;
    color: #333;
    font-weight: bold;
  }

  .input-group {
    margin-top: 5px;
    position: relative;
  }

  input,
  select {
    width: 100%;
    padding: 10px;
    margin-top: 0px;
    border-radius: 10px;
    border: 1px solid #333;
    font-size: 14px;
  }

  input {
    padding-right: 40px;

  }

  .input-group i {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    color: #333;
    font-size: 16px;
  }

  button {
    width: 110px;
    max-width: 200px;
    background-color: #2d87ff;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    margin: 10px auto;
    display: block;
  }


  .forgot-password,
  .register-link {
    display: block;
    margin-top: 10px;
    font-size: 12px;
    color: #0E4194;
    text-decoration: none;
  }

  .forgot-password {
    text-align: left;
  }

  .forgot-password:hover,
  .register-link:hover {
    text-decoration: underline;
  }

  .titulo-campo {
    margin-top: 10px;
    font-size: 14px;
    color: #333;
    text-align: left;
    width: 100%;
    color: #0E4194;
  }

  .titulo {
    color: #0E4194;
    font-family: "inter", sans-serif;
  }

  .entrar {
    background-color: #68B42D;
  }
</style>
<div class="login-container">
  <h1 class="titulo">Boas-vindas!</h1>
  <form id="loginForm">
    <label class="titulo-campo" for="userType">Selecione o tipo de usuário</label>
    <select id="userType" name="userType" required>
      <option value="admin">Sistema Fibra</option>
      <option value="user">Externo</option>
    </select>

    <label class="titulo-campo" for="username">Usuário</label>
    <div class="input-group">
      <input type="text" id="username" name="username" required>
      <i class="fas fa-user"></i>
    </div>

    <label class="titulo-campo" for="password">Senha</label>
    <div class="input-group">
      <input type="password" id="password" name="password" required>
      <i class="fas fa-lock"></i>
    </div>

    <a href="#" class="forgot-password">Esqueci minha senha</a>
    <button class="entrar" type="submit">Entrar</button>
    <a href="#" class="register-link">Ainda não tenho uma conta</a>
  </form>
</div>