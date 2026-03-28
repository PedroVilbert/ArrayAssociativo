<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
    $_SESSION["nome"] = $_POST['nome'];
    $_SESSION["telefone"] = $_POST['telefone'];
    $_SESSION["email"] = $_POST['email'];

    $_SESSION["nome2"] = $_POST['nome2'];
    $_SESSION["telefone2"] = $_POST['telefone2'];
    $_SESSION["email2"] = $_POST['email2'];

    $pessoa = [

        'nome' => $_POST['nome'],
        'telefone' => $_POST['telefone'],
        'email' => $_POST['email'] 

    ];

    $pessoa2 = [

        'nome' => $_POST['nome2'],
        'telefone' => $_POST['telefone2'],
        'email' => $_POST['email2'] 

    ];
    }
    
    echo "<h2>Dados do Contato</h2>";

    print_r($pessoa);
    echo "<br>";
    echo "Nome: " . $pessoa['nome'] . "<br>";
    echo "Telefone: " . $pessoa['telefone'] . "<br>";
    echo "Email: " . $pessoa['email'] . "<br> <br>";

    print_r($pessoa2);
    echo "<br>";
    echo "Nome: " . $pessoa2['nome'] . "<br>";
    echo "Telefone: " . $pessoa2['telefone'] . "<br>";
    echo "Email: " . $pessoa2['email'] . "<br>";


?>