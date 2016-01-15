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
				<div class="col-md-4"></div>
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
			var h = $('header').height();
			$("#about").css("margin-top",h*0.2);
			
			$(".active").removeClass("active");
			
			window.onresize = function(event) {
				var h = $('header').height();
				$("#about").css("margin-top",h*0.2);
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
