<?php get_header(); ?>


<?php /**
 * Carrega a API do WordPress
 */
/* Este codigo faz um arquivo comum entrar no fluxo do wordpress
define('WP_USE_THEMES', false); // Não utiliza nenhum tema
require('../../../wp-load.php')*/
?> 


<header>
    <div class="topo-barra "> 
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <a href="<?php echo get_theme_mod('set_link_icone1');?>" target="_blank"><i class="<?php echo get_theme_mod('set_icone4');?>"></i></a>
                    <a href="<?php echo get_theme_mod('set_link_icone2');?>" target="_blank"><i class="<?php echo get_theme_mod('set_icone2');?>"></i></a>
                    <a href="<?php echo get_theme_mod('set_link_icone3');?>" target="_blank"><i class="<?php echo get_theme_mod('set_icone3');?>"></i></a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                    <?php echo get_theme_mod('set_telefone_topo'); ?>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h2 class="navbar-brand">Portfólio</h2>                   
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#sobre-mim">Sobre mim</a></li>
                        <li><a href="#portfolio">Portfólio</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
    </nav>
    
    <div class="owl-carousel">
			<img class="slide" src="<?php echo wp_get_attachment_url(get_theme_mod('set_slide1')); ?>"/>
			<img class="slide" src="<?php  echo wp_get_attachment_url(get_theme_mod('set_slide2')); ?>"/>
			<img class="slide" src="<?php echo wp_get_attachment_url(get_theme_mod('set_slide3')); ?>"/>
    </div>

    <div class="container" id="sobre-mim">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h1>Sobre mim</h1>
                <hr>
                <p><?= get_theme_mod('set_sobre_mim'); ?></p>
                <a href="<?= get_template_directory_uri(); ?><?= get_theme_mod('set_endereco_botao'); ?>"  target="_blank" class="curriculo text-center"><?= get_theme_mod('set_nome_botao'); ?></a>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">
                <img src="<?= wp_get_attachment_url(get_theme_mod('set_sobre_imagem'));?>" class="text-center img-responsive">
            </div>
        </div>
    </div>
<div class="portfolio text-center">
    <h1>Portfólio</h1>
    <hr>  
    <div class="container" id="portfolio">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 ">
                <div class="portfolio2">
                    <h2><?= get_theme_mod('set_portfolio_titulo1'); ?></h2>
                    <p><?= get_theme_mod('set_portfolio_descricao1');?></p>
                    <a href="<?= get_theme_mod('set_portfolio_endereco1');?>" target="_blank"><img src="<?= wp_get_attachment_url(get_theme_mod('set_portfolio_imagem1')); ?>" class="img-responsive"></a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 ">
                <div class="portfolio2">
                    <h2><?= get_theme_mod('set_portfolio_titulo2'); ?></h2>
                    <p><?= get_theme_mod('set_portfolio_descricao2');?></p>
                    <a href="<?= get_template_directory_uri();?><?= get_theme_mod('set_portfolio_endereco2');?>" target="_blank"> <img src="<?= wp_get_attachment_url(get_theme_mod('set_portfolio_imagem2')); ?>" class="img-responsive"></a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 ">
                <div class="portfolio2">
                    <h2><?= get_theme_mod('set_portfolio_titulo3'); ?></h2>
                    <p><?= get_theme_mod('set_portfolio_descricao3');?></p>
                    <a href="<?= get_template_directory_uri();?><?= get_theme_mod('set_portfolio_endereco3');?>" target="_blank"><img src="<?= wp_get_attachment_url(get_theme_mod('set_portfolio_imagem3')); ?>" class="img-responsive"></a>
                </div>
            </div>

             <div class=" col-md-4 col-sm-6 col-xs-12 ">
                 <div class="portfolio2">
                    <h2><?= get_theme_mod('set_portfolio_titulo4'); ?></h2>
                    <p><?= get_theme_mod('set_portfolio_descricao4');?></p>
                    <a href="<?= get_template_directory_uri();?><?= get_theme_mod('set_portfolio_endereco4');?>" target="_blank"> <img src="<?= wp_get_attachment_url(get_theme_mod('set_portfolio_imagem4')); ?>" class="img-responsive"></a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="portfolio2">
                    <h2><?= get_theme_mod('set_portfolio_titulo5'); ?></h2>
                    <p><?= get_theme_mod('set_portfolio_descricao5');?></p>
                    <a href="<?= get_theme_mod('set_portfolio_endereco5');?>" target="_blank"><img src="<?= wp_get_attachment_url(get_theme_mod('set_portfolio_imagem5')); ?>" class="img-responsive"></a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 ">
                <div class="portfolio2">
                    <h2><?= get_theme_mod('set_portfolio_titulo6'); ?></h2>
                    <p><?= get_theme_mod('set_portfolio_descricao6');?></p>
                    <a href="<?= get_theme_mod('set_portfolio_endereco6');?>" target="_black"><img src="<?= wp_get_attachment_url(get_theme_mod('set_portfolio_imagem6')); ?>" class="img-responsive"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contato">
    <h1>Contato</h1>
    <hr>
    <div class="container">
        <div class="row">
        <div class="col-md-5 page-contato">
                    <i class="<?php echo get_theme_mod('set_icone_1');?>"></i>&nbsp;<p><?= get_theme_mod('set_icone_info1');?></p><br>
                    <i class="<?php echo get_theme_mod('set_icone_2');?>"></i>&nbsp;<p><?= get_theme_mod('set_icone_info2');?></p><br>
                    <i class="<?php echo get_theme_mod('set_icone_3');?>"></i>&nbsp;<p><?= get_theme_mod('set_icone_info3');?></p><br>
                    <i class="<?php echo get_theme_mod('set_icone_4');?>"></i>&nbsp;<p><?= get_theme_mod('set_icone_info4');?></p><br>
                    <i class="<?php echo get_theme_mod('set_icone_5');?>"></i>&nbsp;<p><?= get_theme_mod('set_icone_info5');?></p><br>
                    <i class="<?php echo get_theme_mod('set_icone_6');?>"></i>&nbsp;<p><?= get_theme_mod('set_icone_info6');?></p><br>    
                </div>
                <!--
                <div class="col-md-6 col-sm-12 form">
                    <h3>Me envie uma mensagem!</h3>
                    <form name="sentMessage" id="contactForm" action="mail.php" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="nome" required>
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="email" required>
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="mensagem" required></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div id="success"></div>
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                </div>
                -->
            <div class="col-md-7 col-sm-12 form">
                <?=  do_shortcode('[contact-form-7 id="205" title="Formulário de contato 1"]'); ?> 
            </div>
        </div>
    </div>
</div>


                    
                     
                    
             




    <script src="<?= get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>    
    <script src="<?= get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop:true, //infinito
                autoHeight: false,
                items:1, //Quantidade de itens que vai aparecer
                autoplay:true, //deve rodar automaticamente 
                autoplayTimeout:7000, //tempo para trocar
                autoplayHoverPause:false, //Se colocar o mouse em cima da galeria ele vai parar
            });
        });
    </script>

<header>



<?php get_footer(); ?>
