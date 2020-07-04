<?php
//Header
include_once '../includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Cadastro de Vendedores</h3>
      <form>
        <div class="input-field col s12">
          <input type="text" name="nome" id="nome">
          <label for="nome">Nome</label>
        </div>
        <div class="input-field col s12">
          <input type="text" name="email" id="email">
          <label for="email">E-mail</label>
        </div>
        <div class="input-field col s12">
          <input type="text" name="comissao" id="comissao" placeholder="8.50" disabled>
          <label for="email">Comissão (%)</label>
        </div>
        <button type="submit" class="btn">Salvar</button>
        <button type="submit" class="btn green">Listar Vendedores</button>
      </form>
    </div>
</div>

<?php
//Footer
include_once '../includes/footer.php';
?>