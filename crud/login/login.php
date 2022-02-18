<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar a la cuenta</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="container">
  <div class="actions">
    <a href="/login" data-target="login" class="btn nav login modal">Login</a>
    <a href="/register" data-target="register" class="btn nav register modal">Register</a>
  </div>
</div>
<div class="modal">
  <div class="content">
    <form>
      <a class="nav login" data-target="login">Ingresar a la cuenta</a>
      <a class="nav register" data-target="register">Register</a>

      <div class="email">
        <label for="email">Email</label>
        <input id="email" type="email"/>
      </div>
      <label for="username">Nombre de usuario</label>
      <input id="username" />
      <label for="password">Password</label>
      <input id="password" type="password" />
      <button type="submit">
        <span class="login">Ingresar</span>
        <span class="register">Register</span>
        <span class="loading">Loading</span>
      </button>
      <div class="text-center">
        <a href="/forgot">Forgot Password?</a>
      </div>
    </form>
  </div>
  <div class="success-check"></div>
</div>

<script src="scriptlogin.js"></script>


</body>
</html>