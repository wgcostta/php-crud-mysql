<?php
//Header
include_once '../includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Cadastro de Vendedores</h3>
      <form action="../DAO/create.php" method="POST">
        
        <div class="input-field col s12">
          <input type="text" name="nome" id="nome">
          <label for="nome">Nome</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="email" id="email">
          <label for="email">E-mail</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="comissao" id="comissao" value=8.50 disabled>
          <label for="email">Comissão (%)</label>
        </div>

        <button type="submit" name="btn-cadastrar" class="btn">
        Salvar
        </button>
        
        <a href="../index.php" class="btn green">
              Listar Vendedores
        </a>

      </form>
    </div>
</div>

<?php
//Footer
include_once '../includes/footer.php';
?>