<h1>Sobre Nós</h1>
<hr>

<?php
  foreach($this->view->dados as $infos => $info) { ?>
    <h1> <?= $info['titulo']; ?> </h1>
    <p> <?= $info['descricao']; ?> </p>
  <?php } ?>
  
