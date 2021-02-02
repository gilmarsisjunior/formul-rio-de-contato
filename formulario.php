<?php 
/* recebe os valores*/
$nome = $_POST ['nome'];
$email = $_POST ['email'];
$telefone = $_POST ['telefone'];
$mensagem = $_POST ['msg'];

/*Destino do email*/ 
$to = 'juniyor100@gmail.com';
$subject = 'Nome: '. $nome. '</br>'. 'E-mail: '. $email. '</br>'. 'Telefone: '. $telefone;
$message = $mensagem;

$teste = mail($to, $subject, $mensagem);
if ($teste) {
    header('location: email.html');
} 
else {echo "email não enviado";}

?>