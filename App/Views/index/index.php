<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>Produtos</h1><br>

<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produto</th>
      <th scope="col">Preço</th>
    </tr>
  </thead>
  <tbody>
<?php 
  foreach($this->view->dados as $produtos => $produto) {?>
    <tr>
      <th scope="row"><?=$produto['id']?></th>
      <td><?= $produto['descricao'] ?></td>
      <td><?= $produto['preco'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

</body>
</html>

