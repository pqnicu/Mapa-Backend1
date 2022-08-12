<?php
	include("dados.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa Do Nicolas</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php?"><img class="logo" src="./images/logo.png" alt=""></a>
            <img class="mobile-menu" src="./images/mobile.png" alt="">
            <ul>
                <li><a href="index.php?">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Conheça a Dona Cleunice</a></li>
                <li><a href="">Contato</a></li>
            </ul>
        </nav>
    </header>
    <hr>
    <!--<section>
        <div class="topico">
            <img class="header-bg" src="./images/fundo.jpg" alt="">
            <h1>Venha para a casa da Dona Cleunice,<br> e escolha a sua marmita!!!.</h1>
            <h3>Impossível não voltar novamente.</h3>
            <button>Saiba mais</button>
        </div>
    </section>-->

        <div class="container container-1">
            <div class="container-header">
                <h1>Nosso prato especial</h1>
                <p>Veja mais detalhes desse prato abaixo.</p>
            </div>
            <?php
                $id = $_GET['id'];

			    foreach($marmitas as $key => $value){
                    if($value['id'] == $id){
                    
			?>
            <article class="principal">
				<a href="marmitas.php?id=<?=$value['id'];?>"><img class="img-selecionada" src=<?=$value['imagem'];?>></a>
				<h2><?=$value['prato'];?></h2><br>
                <p><?=$value['descricao'];?></p><br>
                <p><?=$value['preco'];?></p>
			</article>
        	<?php
                    }
				}
			?>

        </div>


        <div class="container">
            <div class="container-header container-2">
                <h1>Veja nossos outros pratos</h1>
            </div>
            <?php
                $id = $_GET['id'];

			    foreach($marmitas as $key => $value){
                    if($value['id'] != $id){
                    
			?>
            <article class="secundario">
				<a href="marmitas.php?id=<?=$value['id'];?>"><img class="img-secundaria" src=<?=$value['imagem'];?>></a>
				<h2><?=$value['prato'];?></h2>
                <button><a href="marmitas.php?id=<?=$value['id'];?>">Ver mais</a></button>
			</article>
        	<?php
                    }
				}
			?>

        </div>

        <hr>
    <footer>
        <h1>Quer saber mais?</h1>
        <div class="footer-nav">
            <h3>Nossas Páginas</h3>
            <nav>
                <ul>
                    <li><a href="">Facebook <img src="./images/face-logo.png"></a></li>
                    <li><a href="">Instagram <img src="./images/insta-logo.png"></a></li>
                    <li><a href="">TikTok <img src="./images/tiktok-logo.png"></a></li>
                    <li><a href="">Blog <img src="./images/blog-logo.png"></a></li>
                </ul>
            </nav>
        </div>
        <div class="footer-nav">
            <h3>Links Úteis</h3>
            <nav>
                <ul>
                    <li><a href="">Receitas da Dona Cleunice</a></li>
                    <li><a href="">Whatsapp <img src="./images/wp-logo.png"></a></li>
                    <li><a href="">Google Maps <img src="./images/maps-logo.png"></a></li>
                </ul>
            </nav>
        </div>
        <div class="footer-nav">
            <h3>Sobre o Projeto</h3>
            <nav>
                <ul>
                    <li><a href="">Projeto Dona Cleunice, Marmitas Gourmet a preço de banana</a></li>
                </ul>
            </nav>
        </div>
        <h4>Desenvolvido por <span class="">Nicolas Kresko</span></h4>
    </footer>

</body>
</html>