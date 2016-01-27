<!DOCTYPE html>
<html lang="en">
	
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Leitor de XML para documentos fiscais NFe CFe e NFCe">
		<meta name="keywords" content="XML,Leitor XML, XML NFe, XML SAT, leitorxml.com, XML Leitor, NFC-E, NFCe, CFe">
		<meta name="author" content="">
		<meta name="robots" content="index, nofollow">
		
		<title>Leitor de XML</title>
		
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="css/agency.css" rel="stylesheet">
		
		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css?ACC=123" rel="stylesheet" type="text/css">
		<link rel="icon" type="image/png" href="xml-logo-icone.png" />
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="jquery.uploadify.min.js" type="text/javascript"></script>
		<script src="dist/sweetalert.min.js"></script> 
		<link rel="stylesheet" type="text/css" href="uploadify.css">
		<link rel="stylesheet" type="text/css" href="tabela.css">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<body id="page-top" class="index">
			<!--<div style="display:inline-block;width:300px;height:600px; z-index:9999; margin-top:-680px; margin-left:20px; position: absolute">
				 Anuncio Lateral Esquerdo 
			</div>-->
			
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Navegação</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand page-scroll" href="#page-top">Leitor XML</a>
					</div>
					
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="hidden">
								<a href="#page-top"></a>
							</li>
							<li>
								<a class="page-scroll" href="#about">Sobre</a>
							</li>
							<li>
								<a class="page-scroll" href="#team">Time</a>
							</li>
							<li>
								<a class="page-scroll" href="#contact">Contato</a>
							</li>
							<li class="hidden">
								<a id="botao_tabela" href="#services"></a>
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>
			
			<!-- Header -->
			<header>
				<div class="container">
					<div class="intro-text">
						<div class="intro-lead-in">Bem vindo, este é o seu leitor de XML!</div>
						<!--<a id="1" href="#services" class="page-scroll btn btn-xl">Tell Me More</a>-->
						<form style="color:green" >
							<div id="queue"></div>
							<div>
								<input id="file_upload" class="page-scroll btn btn-xl" name="file_upload" type="file" multiple="true">
							</div>
							<BR>
							<div id="some_file_queue" class="display_none"></div>
						</form>
					</div>
				</div>
			</header>
			
			<!-- XML Section -->
			<section id="services" class="display_none">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2 class="section-heading">Resultado XML</h2>
						</div>
					</div>
					<div class="row text-center">
						<div class="col-md-12">
							<table id="resultado" class="table table-striped table-bordered table-hover"> 
								<thead class="fixedHeader">
									<tr>
										<th>Chave de Acesso</th>																	
										<th style="width: 11%;">N˚ Serie SAT</th>
										<th style="width: 10.85%;">N˚ Documento</th>
										<th style="width: 12.6%;">Data de Emissão</th>
										<th style="width: 11.5%;">Horário de Emissão</th>
										<th style="width: 10.6%;">Valor</th>
										<th style="width: 9.4%;">LOTE</th>
									</tr>
								</thead>
								<tbody class="scrollContent"></tbody>
							</table>
						</div>
						<div id="totaisAut" style="margin-left: 1.5%;width: 97.5%;">
							<table id="resultadoTotal" class="table table-striped table-bordered table-hover"> 								
								<tbody></tbody>
							</table>                    
						</div>
						<!-- Anuncio tabela -->

					</div>
				</div>
			</section>
			
			<!-- About Section -->
			<section id="about">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2 class="section-heading">Sobre</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<ul class="timeline">
								<li>
									<div class="timeline-image">
										<img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4>Dezembro - 2015</h4>
										</div>
										<div class="timeline-body">
											<p class="text-muted">A linguagem de transferência de informações mais utilizada pelas grandes empresas de software hoje, sem dúvidas e o XML. Afim de facilitar a leitura das informações contidas nesses arquivos criamos a ferramenta leitorxml.com, que possui uma grande utilidade para os usuários que desejam realizar a contabilidade de suas vendas de uma forma simples e prática.</p>
										</div>
									</div>
								</li>
								
								<li class="timeline-inverted">
									<div class="timeline-image">
										<img class="img-circle img-responsive" src="img/about/2.png" alt="">
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4>Janeiro - 2016</h4>
										</div>
										<div class="timeline-body">
											<p class="text-muted">Atualmente o leitorxml.com trabalha com arquivos XML do tipo NFe, CFe(SAT) e NFCe. Em breve estaremos ampliando nosso leque de documentos interpretados pelo leitorxml.com e incluindo novas ferramentas que facilitam o dia a dia de quem necessita de informações contidas nesses arquivos.</p>
										</div>
									</div>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</section>
			
			<!-- Team Section -->
			<section id="team" class="bg-light-gray">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2 class="section-heading">Time</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-sm-3">
							<div class="team-member">
								<img src="img/team/2.png" class="img-responsive img-circle" alt="">
								<h4>Matheus Ribeiro</h4>
								<p class="text-muted">Desenvolvedor e Design Web</p>
								<ul class="list-inline social-buttons">
									<li><a href="https://www.linkedin.com/in/matheus-ribeiro-06803189?trk=pub-pbmap"><i class="fa fa-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="team-member">
								<img src="img/team/3.png" class="img-responsive img-circle" alt="">
								<h4>Douglas Ribeiro</h4>
								<p class="text-muted">Desenvolvedor e Idealista</p>
								<ul class="list-inline social-buttons">
									<li><a href="https://www.linkedin.com/in/douglas-s-ribeiro-05376139?trk=hp-identity-photo"><i class="fa fa-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<!-- Contact Section -->
			<section id="contact">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2 class="section-heading">Entre em contato conosco</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<form id="formulario_email" onsubmit="enviar(); return false;">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Seu nome *" name="nome" id="name" required data-validation-required-message="Por favor insira seu nome.">
											<p class="help-block text-danger"></p>
										</div>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Seu e-mail *" name="email" id="email" required data-validation-required-message="Por favor insira seu e-mail.">
											<p class="help-block text-danger"></p>
										</div>
										<div class="form-group">
											<input type="tel" class="form-control" placeholder="Seu telefone"  name="phone" id="phone">
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<textarea class="form-control" placeholder="Dúvida, critica ou sugestão*" name="message" id="message" required data-validation-required-message="Por favor insira sua mensagem"></textarea>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="col-lg-12 text-center">
										<div id="success"></div>
										<button type="submit" class="btn btn-xl">Enviar mensagem</button>
									</div>
									<input type="Reset" value="Apagar tudo" class="display_none" id="apagar">
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<span class="copyright">Copyright &copy; www.leitorxml.com 2016</span>
						</div>
						<div class="col-md-4">
							<ul class="list-inline quicklinks">
								<li><a href="#" id="termos_uso">Termos de uso</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			
			<!-- jQuery -->
			<script src="js/jquery.js"></script>
			
			<!-- Bootstrap Core JavaScript -->
			<script src="js/bootstrap.min.js"></script>
			
			<!-- Plugin JavaScript -->
			<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
			<script src="js/classie.js"></script>
			<script src="js/cbpAnimatedHeader.js"></script>
			
			<!-- Contact Form JavaScript -->
			<script src="js/jqBootstrapValidation.js"></script>
			<script src="js/contact_me.js"></script>
			
			<!-- Custom Theme JavaScript -->
			<script src="js/agency.js"></script>
			
			<script type="text/javascript">
				$.noConflict();
				<?php $timestamp = time();?>
				
				function enviar()
				{
					$.ajax({
						type: "POST",
						url: "enviarEmail.php",
						data: $("#formulario_email").serialize(),
						success: function(data){
							swal("Obrigado!", "Seu email foi enviado com sucesso", "success")
							$("#name").val("");
							$("#email").val("");
							$("#phone").val("");
							$("#message").val("");					
						}
					});
				}
				
				$(function() 
				{	
					$( "#termos_uso" ).click(function()
					{
						swal("Aviso!", "O website leitorxml.com é um serviço interativo oferecido por meio de página eletrônica na internet que oferece a possibilidade de importar uma gama de informações através de arquivos XML. O acesso ao leitorxml.com representa a aceitação expressa e irrestrita dos termos de uso abaixo descritos. Se você não concorda com os termos, por favor, não acesse nem utilize este website. O visitante poderá usar este site apenas para finalidades lícitas. Este espaço não poderá ser utilizado para publicar, enviar, distribuir ou divulgar conteúdo ou informação de caráter difamatório, obsceno ou ilícito, inclusive informações de propriedade exclusiva pertencentes a outras pessoas ou empresas, bem como marcas registradas ou informações protegidas por direitos autorais, sem a expressa autorização do detentor desses direitos. Ainda, o visitante não poderá usar o site leitorxml.com para obter ou divulgar informações pessoais, inclusive endereços na Internet, sobre os usuários do site. Janeiro 2016.", "warning")
					});
					
					var h = $('header').height();
					$("#about").css("margin-top",h*1);
					
					$(".active").removeClass("active");
					
					window.onresize = function(event) 
					{
						var h = $('header').height();
						$("#about").css("margin-top",h*1);
					};
					
					$('#file_upload').uploadify(
					{
						'formData'     : {
							'timestamp' : '<?php echo $timestamp;?>',
							'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
						},
						'swf'      : 'uploadify.swf',
						'uploader' : 'uploadify.php',
						'fileTypeDesc' : 'XML',
						'fileTypeExts' : '*.xml',
						'successTimeout' : 2,
						'fileSizeLimit' : '1000KB',
						'buttonText' : 'SELECIONAR ARQUIVO...',
						'queueID'  : 'some_file_queue',
						'width': '300',
						'height': '50',
						'onUploadSuccess' : function(file, data, response) {
							$.ajax({
								url:   'lerXML.php',
								type:  'POST',
								cache: false,
								data:  {arquivo: file},
								error: function() {
									alert('Erro ao tentar ação!');
								},
								success: function( texto ) {
									$("#resultado tbody").append(texto);
								},
								beforeSend: function() {
								}
							});
							
						},
						'onDialogClose'  : function(queueData) {
							if(queueData.filesQueued > 0)
							$('#some_file_queue').show();
						},
						'onQueueComplete' : function(queueData) 
						{
							setTimeout(function()
							{
								$('#some_file_queue').hide();
								$('#services').show();
								var h = $('header').height();
								$("#about").css("margin-top",0);
								$("#services").css("margin-top",h*0.9);
								
								var total= itens = 0;
								$('.total_item').each(function ()
								{
									total += parseFloat($(this).val());									
								});
								
								$('.total_itens').each(function () 
								{
									itens += parseFloat($(this).val());
								});
								
								
								if($('#tabela_total')[0]){
									$("#itens_total").html("Total de itens " + itens);
									$("#total_total").html("R$ " + total);
								}else{
									var totalGeral = "<tr id='tabela_total'>";
									totalGeral +=	 "<td id='itens_total' style='font-weight:bold; font-style:italic; width: 34%'>Total de itens " + itens + "</td>";
									totalGeral +=	 "<td style='width: 11%;'></td>";
									totalGeral +=	 "<td style='width: 10.85%;'></td>";
									totalGeral +=	 "<td style='width: 12.6%;'></td>";
									totalGeral +=	 "<td style='width: 11.5%;'></td>";						 
									totalGeral +=	 "<td id='total_total' style='font-weight:bold; font-style:italic'>R$ " + total + "</td>";
									totalGeral +=	 "<td style='width: 9.4%;'></td>";
									totalGeral +=	 "</tr>";
									
									$("#resultadoTotal tbody").append(totalGeral);
								}
								
								
								
								window.onresize = function(event) {
									var h = $('header').height();
									$("#services").css("margin-top",h*0.9);
								};
								
								$('html, body').animate({
									scrollTop: $("#services").offset().top
								}, 100);
								
								
							}, 2000);
						}
					});
					
				});
				
			</script>
			
			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			
			ga('create', 'UA-72487250-1', 'auto');
			ga('send', 'pageview');
			
			</script>
			
			</body>
			
			</html>
						