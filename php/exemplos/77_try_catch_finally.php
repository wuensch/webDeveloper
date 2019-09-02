<?php

function trataNome($nome) {

    //Nome vaziu lança exceção.
    if (!$nome) {
        throw new Exception("Nome de usuário não foi informado <br>", 1);
    }

    echo ucfirst("O nome informado foi : " . $nome . "<br>");
}

try {
    
    trataNome("Rubens have so much dollars");
    trataNome("");

} catch (\Throwable $th) {
    //Mostra o erro
    echo $th->getMessage();
}finally {
    echo "Executou com sucesso <br>";
}


?>