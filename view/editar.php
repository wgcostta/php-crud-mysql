<?php
//Header
include_once '../includes/header.php';

//Conexão
include_once '../DAO/db_config.php';

//pegando o ID da URL
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect,$_GET['id']);
    $sql = "SELECT * FROM vendedores WHERE ID= '$id'";
    $resultado = mysqli_query($connect,$sql);
    $dados = mysqli_fetch_array($resultado);
  endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Cadastro de Vendedores</h3>
      <form action="../DAO/update.php" method="POST">
        <!--pegando o ID mesmo com o campo hidden-->
        <input type="hidden" name="id" 
            value="<?php echo $dados['ID']; ?>">

        <div class="input-field col s12">
          <input type="text" name="nome" id="nome" 
            value="<?php echo $dados['NOME']; ?>">
          <label for="nome">Nome</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="email" id="email" 
            value="<?php echo $dados['EMAIL']; ?>">
          <label for="email">E-mail</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="comissao" id="comissao" 
            value="<?php echo $dados['COMISSAO']; ?>" disabled>
          <label for="email">Comissão (%)</label>
        </div>

        <button type="submit" name="btn-editar" class="btn">
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