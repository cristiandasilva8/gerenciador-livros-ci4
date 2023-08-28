<h2>Editar Livro</h2>
<form action="<?= base_url('livros/editar/' . $livro['id']) ?>" method="post">
    Título: <input type="text" name="titulo" value="<?= $livro['titulo'] ?>"><br>
    Autor: <input type="text" name="autor" value="<?= $livro['autor'] ?>"><br>
    Ano de Publicação: <input type="text" name="ano_publicacao" value="<?= $livro['ano_publicacao'] ?>"><br>
    <input type="submit" value="Editar">
</form>