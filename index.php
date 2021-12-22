<!doctype html>
<html>

	<head>
		<title>Projecto 05</title>
		<meta charset="utf-8" />
		<meta name="keywords" content="palavras,com, virgulas" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<meta name="author" content="Kevin GlobalCorp" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<header>
			<div class="container">
				<div class="logo">
				</div><!--logo-->
				<nav class="desktop">
					<ul>
						<li><a style="color: #EB2D2D" href="home">home</a></li>
						<li><a href="vendas">venda</a></li>
						<li><a href="veiculo-teste">galeria</a></li>
						<li><a href="#">eventos</a></li>
						<li><a href="sobre">sobre nós</a></li>
						<li><a href="#contato">contacto</a></li>
					</ul>
                </nav><!--desktop-->

				<nav class="mobile">
					<ul id="menu">
						<li><a style="color: #EB2D2D" href="home">home</a></li>
						<li><a href="vendas">venda</a></li>
						<li><a href="veiculo-teste">galeria</a></li>
						<li><a href="#">eventos</a></li>
						<li><a href="sobre">sobre nós</a></li>
						<li><a href="#">contacto</a></li>
					</ul>
				</nav><!--mobile-->
				<div class="clear"></div>
			</div><!--container-->
		</header>


                <?php
					session_start();
                    

                    if(isset($_GET['url'])){
                        if(file_exists($_GET['url'].'.html')){
                            include($_GET['url'].'.html');
                        }else{
                            include('404.html');
                        }
                    }else{
                        include('home.html');
                    }

                
                ?>

            <footer>
				<div class="container">
					<nav class="desktop">
					<ul>
						<li><a style="color: #EB2D2D" href="home">home</a></li>
						<li><a href="vendas">venda</a></li>
						<li><a href="veiculo-teste">galeria</a></li>
						<li><a href="#">eventos</a></li>
						<li><a href="sobre">sobre nós</a></li>
						<li><a href="#contato">contacto</a></li>
					</ul>
				</nav><!--desktop-->

				<p>Todos os direitos reservados</p>
				</div><!--container-->
				<div class="clear"></div>
			</footer>
	
	

		<script src="js/jquery.js"></script>
		<script src="js/function.js"></script>
		
		<script>
			
			$(document).ready(function(){
				
			
				$('nav a:last-child').click(function(){
					var distContato = $('#contato').offset().top;			
					$('html,body').animate({'scrollTop': distContato})
				});
			})
			
			
			
			
		</script>
	</body>
</html>
