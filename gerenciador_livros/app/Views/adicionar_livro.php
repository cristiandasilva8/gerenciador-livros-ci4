<h2>Adicionar Livro</h2>
<form action="<?= base_url('livros/adicionar') ?>" method="post">
    Título: <input type="text" name="titulo"><br>
    Autor: <input type="text" name="autor"><br>
    Ano de Publicação: <input type="text" name="ano_publicacao"><br>
    <input type="submit" value="Adicionar">
</form>