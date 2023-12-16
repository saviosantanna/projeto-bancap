<?php
include_once "header.php";
?>
<div class="container col-2 bg-warning mt-5 pt-3 mb-5 pb-3 rounded-2">

<form method="POST" action="">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Endereço de e-mail">
  </div>

  <div class="form-group">
    <label for="senha">Password</label>
    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
  </div>

  <div class="form-group bg-success text-center mt-1">
  <button type="submit" class="btn btn-sm btn-primary">Login</button>
  <a href="#"><button type="button" class="btn btn-sm btn-primary">Cadastre-se</button></a>
  </div>
</form>

</div>

<?php
include_once "footer.php";
?>