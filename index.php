<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Leitor de XML para documentos fiscais NFe SAT">
	<meta name="keywords" content="XML,Leitor XML, XML NFe, XML SAT, xmlreader, XML Leitor">
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<body id="page-top" class="index">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Anuncio 1 -->
	<ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-1471809324712777" data-ad-slot="4831912843"></ins>
	<script type="text/javascript">	
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>

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
							<thead>
								<tr>
									<th>ID</th>
									<th>cNF</th>
									<th>nserieSAT</th>
									<th>nCFe</th>
									<th>dEmi</th>
									<th>hEmi</th>
									<th>vCFe</th>
									<th>LOTE</th>
								</tr>
							</thead>
						<tbody></tbody>
					</table>
                </div>
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
                                    <h4>2015-2016</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">A linguagem de transferência de informações mais utilizada pelas grandes empresas de software hoje, sem dúvidas e o XML. Afim de facilitar a leitura das informações contidas nesses arquivos criamos a ferramenta XML Reader que possui uma grande utilidade para os usuários que desejam realizar a contabilidade de suas vendas de uma forma simples e pratica.</p>
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
                    <h2 class="section-heading">Equipe</h2>
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
                    <h2 class="section-heading">Nos contacte</h2>
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
                                    <textarea class="form-control" placeholder="Sua mensagem *" name="message" id="message" required data-validation-required-message="Por favor insira sua mensagem"></textarea>
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
		
		function enviar(){
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
		
		$(function() {	
			$( "#termos_uso" ).click(function() {
			  swal("Aviso!", "O website leitorxml.com é um serviço interativo oferecido em por meio de página eletrônica na internet que oferece a possibilidade de importar uma gama de informações através de arquivos XML. O acesso ao leitorxml.com representa a aceitação expressa e irrestrita dos termos de uso abaixo descritos. Se você não concorda com os termos, por favor, não acesse nem utilize este website. O visitante poderá usar este site apenas para finalidades lícitas. Este espaço não poderá ser utilizado para publicar, enviar, distribuir ou divulgar conteúdo ou informação de caráter difamatório, obsceno ou ilícito, inclusive informações de propriedade exclusiva pertencentes a outras pessoas ou empresas, bem como marcas registradas ou informações protegidas por direitos autorais, sem a expressa autorização do detentor desses direitos. Ainda, o visitante não poderá usar o site leitorxml.com para obter ou divulgar informações pessoais, inclusive endereços na Internet, sobre os usuários do site. O leitorxml.com empenha-se em manter a qualidade, atualidade e autenticidade das informações do site, mas seus criadores e colaboradores não se responsabilizam por eventuais falhas nos serviços ou inexatidão das informações oferecidas. O usuário não deve ter como pressuposto que tais serviços e informações são isentos de erros ou serão adequados aos seus objetivos particulares. Os criadores e colaboradores tampouco assumem o compromisso de atualizar as informações, e reservam-se o direito de alterar as condições de uso ou preços dos serviços e produtos oferecidos no site a qualquer momento. O acesso ao site leitorxml.com é gratuito. O leitorxml.com poderá criar áreas de acesso exclusivo aos seus clientes ou para terceiros especialmente autorizados. Os criadores e colaboradores do leitorxml.com poderão a seu exclusivo critério e em qualquer tempo, modificar ou desativar o site, bem como limitar, cancelar ou suspender seu uso ou o acesso. Também estes Termos de Uso poderão ser alterados a qualquer tempo. Visite regularmente esta página e consulte os Termos então vigentes. Algumas disposições destes Termos podem ser substituídas por termos ou avisos legais expressos localizados em determinadas páginas deste site. Erros e falhas Os documentos, informações, imagens e gráficos publicados neste site podem conter imprecisões técnicas ou erros tipográficos. Em nenhuma hipótese o leitorxml.com e/ou seus respectivos fornecedores serão responsáveis por qualquer dano direto ou indireto decorrente da impossibilidade de uso, perda de dados ou lucros, resultante do acesso e desempenho do site, dos serviços oferecidos ou de informações disponíveis neste site. O acesso aos serviços, materiais, informações e facilidades contidas neste website não garante a sua qualidade. Limitação da responsabilidade Os materiais são fornecidos neste website sem nenhuma garantia explícita ou implícita de comercialização ou adequação a qualquer objetivo específico. Em nenhum caso o leitorxml.com ou os seus colaboradores serão responsabilizados por quaisquer danos, incluindo lucros cessantes, interrupção de negócio, ou perda de informação que resultem do uso ou da incapacidade de usar os materiais. O leitorxml.com não garante a precisão ou integridade das informações, textos, gráficos, links e outros itens dos materiais. O leitorxml.com não se responsabiliza pelo conteúdo dos artigos e informações aqui publicadas, uma vez que os textos são de autoria de terceiros e não traduzem, necessariamente, a opinião do website. O leitorxml.com tampouco é responsável pela violação de direitos autorais decorrente de informações, documentos e materiais publicados neste website, comprometendo-se a retirá-los do ar assim que notificado da infração. Informações enviadas pelos usuários e colaboradores Qualquer material, informação, artigos ou outras comunicações que forem transmitidas, enviadas  ou publicadas neste site serão considerados informação não confidencial, e qualquer violação aos direitos dos seus criadores não será de responsabilidade do leitorxml.com. É terminantemente proibido transmitir, trocar ou publicar, através deste website, qualquer material de cunho obsceno, difamatório ou ilegal, bem como textos ou criações de terceiros sem a autorização do autor. O leitorxml.com reserva-se o direito de restringir o acesso às informações enviadas por terceiros aos seus usuários. O leitorxml.com poderá, mas não é obrigado, a monitorar, revistar e restringir o acesso a qualquer área no site onde usuários transmitem e trocam informações entre si, incluindo, mas não limitado a salas de chat, centro de mensagens ou outros fóruns de debates, podendo retirar do ar ou retirar o acesso a qualquer destas informações ou comunicações.  Porém, o leitorxml.com não é responsável pelo conteúdo de qualquer uma das informações trocadas entre os usuários, sejam elas lícitas ou ilícitas. Direitos autorais e propriedade intelectual Os documentos, conteúdos e criações contidos neste website pertencem aos seus criadores e colaboradores. A autoria dos conteúdo, material e imagens exibidos no leitorxml.com é protegida por leis nacionais e internacionais. Não podem ser copiados, reproduzidos, modificados, publicados, atualizados, postados, transmitidos ou distribuídos de qualquer maneira sem autorização prévia e por escrito do leitorxml.com. As imagens contidas neste website são aqui incorporadas apenas para fins de visualização, e, salvo autorização expressa por escrito, não podem ser gravadas ou baixadas via download. A reprodução ou armazenamento de materiais recuperados a partir deste serviço sujeitará os infratores às penas da lei. O nome do site ( leitorxml.com) , seu logotipo, o nome de domínio para acesso na Internet, bem como todos os elementos característicos da tecnologia desenvolvida e aqui apresentada, sob a forma da articulação de bases de dados, constituem marcas registradas e propriedades intelectuais privadas e todos os direitos decorrentes de seu registro são assegurados por lei. Alguns direitos de uso podem ser cedidos por leitorxml.com em contrato ou licença especial, que pode ser cancelada a qualquer momento se não cumpridos os seus termos.As marcas registradas do leitorxml.com só podem ser usadas publicamente com autorização expressa. O uso destas marcas registradas em publicidade e promoção de produtos deve ser adequadamente informado. Reclamações sobre violação de direitos autorais O leitorxml.com respeita a propriedade intelectual de outras pessoas ou empresas e solicitamos aos nossos membros que façam o mesmo. Toda e qualquer violação de direitos autorais deverá ser notificada ao leitorxml.com e acompanhada dos documentos e informações que confirmam a autoria. A notificação poderá ser enviada pelos e-mails constantes do site ou via postal para o seguinte endereço contato@leitorxml.com. Leis aplicáveis Este site é controlado e operado pelo seus desenvolvedores a partir de seu escritório na cidade de Campinas estado de SP e não garante que o conteúdo ou materiais estejam disponíveis para uso em outras localidades. Seu acesso é proibido em territórios onde o conteúdo seja considerado ilegal. Aqueles que optarem por acessar este site a partir de outras localidades o farão por iniciativa própria e serão responsáveis pelo cumprimento das leis locais aplicáveis. Os materiais não deverão ser usados ou exportados em descumprimento das leis brasileiras sobre exportação. Qualquer pendência com relação aos materiais será dirimida pelas leis brasileiras. O acesso ao leitorxml.com representa a aceitação expressa e irrestrita dos termos de uso acima descritos. Janeiro, 2016", "warning")
			});
		
			var h = $('header').height();
			$("#about").css("margin-top",h*0.3);
			
			$(".active").removeClass("active");
			
			window.onresize = function(event) {
				var h = $('header').height();
				$("#about").css("margin-top",h*0.3);
			};
			
			$('#file_upload').uploadify({
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
							$("#resultado2 tbody").append(texto2);
					   },
					   beforeSend: function() {
					   }
					});
					
				},
				'onDialogClose'  : function(queueData) {
					if(queueData.filesQueued > 0)
						$('#some_file_queue').show();
				},
				'onQueueComplete' : function(queueData) {
					setTimeout(function() {
						$('#some_file_queue').hide();
						$('#services').show();
						var h = $('header').height();
						$("#about").css("margin-top",0);
						$("#services").css("margin-top",h*0.3);
						
						window.onresize = function(event) {
							var h = $('header').height();
							$("#services").css("margin-top",h*0.3);
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
