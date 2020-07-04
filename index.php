<?php
//Header
include_once 'includes/header.php';

//Mostrar mensagem quando salvar ou editar
include_once 'includes/mensagem.php';
//Conexão
include_once 'DAO/db_config.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Vendedores</h3>
      <table class="striped">
        <thead>
          <tr>
            <th>Código:</th>
            <th>Nome:</th>
            <th>Email:</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $sql = "SELECT * FROM vendedores";
            $resultado = mysqli_query($connect,$sql);
            while($dados = mysqli_fetch_array($resultado)):
          ?>
              <tr>
                <td><?php echo $dados['ID']; ?></td>
                <td><?php echo $dados['NOME']; ?></td>
                <td><?php echo $dados['EMAIL']; ?></td>
                
                <td><a href="view/editar.php?id=<?php echo $dados['ID']; ?>" class="btn-floating blue">
                  <i class="material-icons">edit</i>
                </a></td>

                <td><a href="#modal<?php echo $dados['ID']; ?>" class="btn-floating red modal-trigger">
                  <i class="material-icons">delete</i>
                </a></td>

                  <!-- Modal Structure -->
              <div id="modal<?php echo $dados['ID']; ?>" 
                class="modal">
                <div class="modal-content">
                  <p>Atenção! Confirma a exclusão do Vendedor ?</p>
                </div>
                <div class="modal-footer">
                  

                 <form action="DAO/delete.php" method="POST">
                    <input type="hidden" name="id" 
                    value="<?php echo $dados['ID']; ?>">
                    <button type="submit" name="btn-deletar"
                    class="btn red">Excluir Vendedor</button> 
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                 </form>
                  

                </div>
              </div>
               
              </tr>
            <?php endwhile; ?>
        </tbody>
      </table>
      <br>
      <a href="/view/adicionar.php" class="btn">Adicionar Vendedor</a>
    </div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>