<?php
//Header
include_once 'includes/header.php';
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
          <tr>
            <td>1</td>
            <td>Wagner Costa 007</td>
            <td>wg.o.costa@gmail.com</td>
            <td><a href="" class="btn-floating blue">
              <i class="material-icons">edit</i>
            </a></td>
            <td><a href="" class="btn-floating red">
              <i class="material-icons">delete</i>
            </a></td>
           
          </tr>
        </tbody>
      </table>
      <br>
      <a href="" class="btn">Adicionar Vendedor</a>
    </div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>