<?php
include "cabecalho.php";
?>




<main class="container">
        <form action="produtos-salvar.php"  method="POST">
            <h1>Login</h1>
            
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="Id" name="id">ID</label>
            <input type="int" placeholder="Insira ID do produto" name="id" autofocus="true" />
            <label for="name" name="nome_do_produto">Nome do produto</label>
            <input type="name" name="nome_do_produto" placeholder="Insira nome do produto" autofocus="true" />

            <button type="submit" > salvar </button>
        </form>
    </div>
</main>
    <?php
include "rodape.php";
?>

</main>
