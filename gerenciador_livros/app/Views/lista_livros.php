<h1>Lista de Livros</h1>
<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Ano de Publicação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($livros as $livro) : ?>
            <tr>
                <td><?= $livro['titulo']; ?></td>
                <td><?= $livro['autor']; ?></td>
                <td><?= $livro['ano_publicacao']; ?></td>
                <td>
                    <!-- Adicione botões de editar e deletar aqui -->
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>