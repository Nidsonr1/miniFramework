<h1>Index</h1>
<hr>

<?php
  // echo "<pre>";
  // print_r($this->view->dados);
  // echo"</pre>";
  foreach($this->view->dados as $indice => $produto) {
    echo $produto['id'] . ' - ' . $produto['descricao'] . ' - ' . $produto['preco'] .'<br>';
    
  }

?>