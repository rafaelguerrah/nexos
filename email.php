<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = htmlspecialchars($_POST['inNome']);
    $email = htmlspecialchars($_POST['inEmail']);
    $data = htmlspecialchars($_POST['inData']);
    $contato = htmlspecialchars($_POST['inContato']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

   
    $to = "softwaremachinebrasil@gmail.com"; // email que ira receber
    $subject = "Novo Orçamento Recebido";
    $body = "Nome: $nome\nEmail: $email\nData de Nascimento: $data\nContato: $contato\nMensagem: $mensagem";

    if (mail($to, $subject, $body)) {
        echo "Orçamento enviado com sucesso.";
    } else {
        echo "Erro ao enviar orçamento.";
    }
}
?>
