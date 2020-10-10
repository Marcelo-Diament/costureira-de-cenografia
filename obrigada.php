<?php include_once('head.php'); ?>
<title>Obrigada!</title>
<meta content="Ops!" name="title">
<meta content="Mensagem enviada com sucesso!" name="description">
<?php
// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once("class/class.phpmailer.php");
// Inicia a classe PHPMailer
$mail = new PHPMailer(true);
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['tel'];
$mensagem = $_POST['mensagem'];
if (isset($_POST['cenario'])) {
	$cenario = 'Sim';
};
if (isset($_POST['figurino'])) {
	$figurino = 'Sim';
};
if (isset($_POST['outro'])) {
	$outro = 'Sim';
};
date_default_timezone_set('America/Sao_Paulo');
$hora = getdate()['hours'];
$minutos = getdate()['minutes'];
$dia = getdate()['mday'];
$mes = getdate()['mon'];
$ano = getdate()['year'];
$data = $hora . ':' . $minutos . ' de ' . $dia . '/' . $mes . '/' . $ano;
$assunto = 'Contato de ' . $nome . ' às ' . $data;
$assunto = '=?UTF-8?B?' . base64_encode($assunto) . '?=';
try {
	$mail->Host = 'smtp.costureira-de-cenografia.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
	$mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
	$mail->Port       = 587; //  Usar 587 porta SMTP
	$mail->Username = 'webmaster@costureira-de-cenografia.com.br'; // Usuário do servidor SMTP (endereço de email)
	$mail->Password = 'MDdm290787*579597'; // Senha do servidor SMTP (senha do email usado)
	//Define o remetente
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
	$mail->SetFrom('webmaster@costureira-de-cenografia.com.br'); //Seu e-mail
	$mail->AddReplyTo($email, $nome); //Seu e-mail
	$mail->Subject = $assunto; //Assunto do e-mail
	//Define os destinatário(s)
	//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->AddAddress('webmaster@costureira-de-cenografia.com.br', 'Costureira de Cenografia');
	//Campos abaixo são opcionais 
	//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->AddCC('marcelodiament@gmail.com', 'Marcelo Diament'); // Copia
	$mail->AddCC('gloriamaria1992@live.com', 'Glória Maria Amaral Silva'); // Cópia
	$mail->AddBCC('marcelo@djament.com.br', 'Djament Comunicação'); // Copia oculta
	//$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
	//$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
	//$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
	//Define o corpo do email
	$mail->MsgHTML('
		     	<p>Você recebeu uma mensagem via site</p>
		     	<p>Confira os dados a seguir:</p>
		     	<ul>
					<li><b>Contato: </b>' . $nome . '<br/>
					<li><b>Email: </b>' . $email . '<br/>
					<li><b>Telefone: </b>' . $telefone . '<br/>
					<li><b>Projetos de interesse:</b><br/>
						<ul>
							<li><b>Cenário: ' . $cenario . '</li><
							<li><b>Figurino: ' . $figurino . '</li>
							<li><b>Outros: ' . $outro . '</li>
						</ul>
					<li><b>Mensagem: </b>' . $mensagem . '<br/>
				</ul>
					<small>Mensagem enviada em: ' . $data . '<br/>
		     	');
	////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
	//$mail->MsgHTML(file_get_contents('arquivo.html'));
	$mail->Send();
	//echo "Mensagem enviada com sucesso</p>\n";
	//caso apresente algum erro é apresentado abaixo com essa exceção.
} catch (phpmailerException $e) {
	//echo //$e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}
?>
<?php include_once('header.php'); ?>
<main class="container-fluid">
	<section class="row topo" id="topo">
		<article class="col-12">
			<div class="topo-txt">
				<h1><strong>Obrigada<?php echo $nome; ?>!</h1>
				<h2>Entraremos em contato em breve</h2>
			</div>
		</article>
	</section>
</main>
<?php include_once('footer.php'); ?>