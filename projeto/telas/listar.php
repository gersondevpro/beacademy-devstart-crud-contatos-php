<h1>Listar Contato</h1>

<?php // var_dump($contatos); ?>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($contatos as $posicao => $contato) {
                $partes = explode(";" , $contato);
               
                echo '<tr>';
                    echo '<td>' . $partes[0] . '</td>';
                    echo '<td>' . $partes[1] . '</td>';
                    echo '<td>' . $partes[2] . '</td>';
                    
                    echo "<td>
                        <a href='/excluir?id={$posicao}' class='btn btn-danger btn-sm'> Excluir </a>
                        <a href='/editar?id={$posicao}' class='btn btn-warning btn-sm'> Editar </a>
                    </td>";

                echo '<tr>';
            } 
        ?>
    </tbody>
</table>