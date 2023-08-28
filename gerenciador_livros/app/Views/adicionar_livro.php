<h2>Adicionar Livro</h2>
<?php
if(session()->has('message')){
    echo session()->getFlashdata('message');
}
?>

<form action="<?= base_url('livros/add') ?>" method="post">
    Título: <input type="text" name="titulo"><br>
    Autor: <input type="text" name="autor"><br>
    Ano de Publicação: <input type="text" name="ano_publicacao"><br>
    <input type="submit" value="Adicionar">
</form>