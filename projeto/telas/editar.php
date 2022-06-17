<h1>Editando contato</h1>
<hr>

<form action="" method="post">

    <input value="<?php echo $dados[0];?>" name="nome" class="form-control mb-3" type="text" placeholder="Nome completo">
    <input value="<?php echo $dados[1];?>" name="email" class="form-control mb-3" type="text" placeholder="E-mail">
    <input value="<?php echo $dados[2];?>" name="telefone" class="form-control mb-3" type="text" placeholder="(DDD) + Telefone">
    <button class="btn btn-primary">Enviar</button>

</form>