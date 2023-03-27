<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$telefone = filter_input(INPUT_POST, 'telefone');
$msg = filter_input(INPUT_POST, 'msg');

$emailsender = "bruno@wbdigitalsolutions.com";
$nomeremetente = "WB Digital Solutions";
$emaildestinatario = "bruno@wbdigitalsolutions.com" . ",";
$comcopia = "wbrunovieira77@gmail.com";


$mensagem = "Novo contato via SITE:\r\n";
$mensagem .= "\n";
$mensagem .= "Nome: " . $name . "\n";
$mensagem .= "email: " . $email . "\n";
$mensagem .= "telefone: " . $telefone . "\n";
$mensagem .= "msg: " . $msg . "\n\n";



// O remetente deve ser um e-mail do seu dom�nio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers  = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/plain; charset=utf-8\n";
$headers .= "Content-Transfer-Encoding: 8bit\n";
$headers .= "From: bruno@wbdigitalsolutions.com\n"; // remetente
$headers .= "Bcc: bruno@wbdigitalsolutions.com\n"; // remetente
$headers .= "Reply-To: " . $email . "\n";
$headers .= "Return-Path: bruno@wbdigitalsolutions.com\n"; // return-path
$envio = mail("bruno@wbdigitalsolutions.com", "Contato Via Site - WB", $mensagem, $headers, "-r" . $emailsender);

echo "<script>";

if ($envio) {
    echo "alert('Seu e-mail foi enviado com sucesso!');";
} else {
    echo "alert('Erro ao enviar o email!');";
}
echo "window.location = 'index.html';";
echo "</script>";
