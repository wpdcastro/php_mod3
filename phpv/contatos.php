<!DOCTYPE html>
<html>
<head>
    <title>
        contatos
    </title>
</head> 
<body>
	   <h3> Contatos </h3>
    	<p> Email: wcastro@traylabs.com.br </p> 
    	<p> Telefone: (14)9 9667-7641  </p>
    	<p> Horario de atendimento : Seg a Sex | 09:00 as 16:00 </p>
    	<br>
    	<form method="POST"> 
    		Name <br>
    		<input type="text" name="nome" required>
    		<br> E-mail <br>
    		<input type="text" name="email" required>
    		<br> Assunto <br>
    		<input type="text" name="assunto" required>
    		<br> Conteúdo <br>
    		<input type="text" name="conteudo" required>
    		<br>
    		<input type="submit">
    		<input type="reset">
    	</form>
</body>
</html>

<?php

if ((!empty($_POST['nome'])) && (!empty($_POST['email'])) && 
	(!empty($_POST['assunto'])) && (!empty($_POST['conteudo']))) {
	require_once __DIR__ . '/class/class.phpmailer.php';
	// Inicia a classe PHPMailer
	$mail = new PHPMailer(true);
	// Define os dados do servidor e tipo de conexão
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=  
		$mail->IsSMTP(true); // Define que a mensagem será SMTP
		$mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
		$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
		$mail->Username = 'wcastro@traylabs.com.br'; // Usuário do servidor SMTP
		$mail->Password = 'vaigoku1'; // Senha do servidor SMTP
		$mail->SMTPSecure = 'tls';     
		$mail->Port = 587;

	 


		// Define o remetente
		// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
		$mail->setFrom($_POST['email'], $_POST['name']);
		// Define os destinatário(s)
		// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
		$mail->AddAddress('wcastro@traylabs.com.br', 'Adm');
		// Define os dados técnicos da Mensagem
		// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
		$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
		// Define a mensagem (Texto e Assunto)
		// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
		$mail->Subject  = $_POST['assunto']; // Assunto da mensagem
		$mail->Body = $_POST['conteudo'];
		$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";
		// Define os anexos (opcional)
		// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
		//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
		// Envia o e-mail
		$enviado = $mail->Send();
		// Limpa os destinatários e os anexos
		$mail->ClearAllRecipients();
		$mail->ClearAttachments();
		// Exibe uma mensagem de resultado
		if ($enviado) {
		  echo "E-mail enviado com sucesso!";
		} else {
		  echo "Não foi possível enviar o e-mail.";
		  echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
		}
}
?> 

