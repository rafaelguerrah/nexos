<?php
// Incluir as classes do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Requerer os arquivos do PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $nome = htmlspecialchars($_POST['inNome']);
    $email = htmlspecialchars($_POST['inEmail']);
    $data = htmlspecialchars($_POST['inData']);
    $contato = htmlspecialchars($_POST['inContato']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Inicializar o PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Servidor SMTP do Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'softwaremachinebrasil@gmail.com'; // Seu email do Gmail
        $mail->Password = '1111030361E'; // Sua senha do Gmail
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Configurações de remetente e destinatário
        $mail->setFrom('softwaremachinebrasil@gmail.com', 'Nome do Remetente');
        $mail->addAddress('softwaremachinebrasil@gmail.com', 'Nome do Destinatário');

        // Configurar o campo Return-Path
        $mail->addCustomHeader('Return-Path', 'softwaremachinebrasil@gmail.com');

        // Conteúdo do email
        $mail->isHTML(true);
        $mail->Subject = 'Novo Orçamento Recebido';
        $mail->Body    = "Nome: $nome<br>Email: $email<br>Data de Nascimento: $data<br>Contato: $contato<br>Mensagem: $mensagem";
        $mail->AltBody = "Nome: $nome\nEmail: $email\nData de Nascimento: $data\nContato: $contato\nMensagem: $mensagem";

        // Enviar email
        $mail->send();
        echo 'Orçamento enviado com sucesso.';
    } catch (Exception $e) {
        echo "Erro ao enviar orçamento: {$mail->ErrorInfo}";
    }
}
?>
