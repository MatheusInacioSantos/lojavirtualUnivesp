<!doctype html>
<?php 
	require("include/config.php");
	require("include/crud.php");
	require("include/biblio.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>Projeto Integrador</title>
<link href="<?php echo URL_BASE?>css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo URL_BASE?>css/estilo.css" rel="stylesheet" type="text/css">
<link href="<?php echo URL_BASE?>css/estilo-m.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript" src="<?php echo URL_BASE?>js/jquery-1.11.2.min.js"></script>
<!--menu mobile-->  
<script>
	$(function(){
		$('.mobmenu').click (function(){
		$('.navmenu .conteudo').slideToggle();
		$(this).toggleClass('active');
			return false;
		});
	});
</script>


</head>

<body>

<?php include "cabecalho.php"?>
<div class="conteudo margin-topo">
	<!-- menu lateral-->
	<?php include"menu-lateral.php"?>
	
	<div class="lado-dir">
		<title class="migalha">Loja Virtual / Pesquisa</title>
		
		<div class="base-home cx-pesquisa">
			<p>Sua pesquisa por <span>“Nome da pesquisa”</span> gerou:</p>	
		<div class="cx-base-home">
			
				<div class="caixa-prod-home quatro-colunas">
					<div class="cx-img"><a href="index.php?link=2"><img src="produtos/produto02.png"></a></div>
						<h2><a href="index.php?link=2">HD Externo Samsumg 1 Tera Bytes</a></h2>
						<div class="prc-ant">De <small>R$1800,00</small> <font>Por</font></div>
							<h3>R$ 135,00</h3>
										
					<div class="cx-botoes">
						<a href="index.php?link=2" class="bot-comprar">Comprar</a>
						
					</div>
				</div>			
					
			</div>
		</div>
		
	</div>	
</div>	



<?php include"rodape.php"?>

</body>
</html>