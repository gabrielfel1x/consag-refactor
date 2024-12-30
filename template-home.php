<?php

/**
 * Template Name: Home
 * Description: Um modelo de página personalizada para o tema.
 */

// Impede o acesso direto ao arquivo
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header(); // Inclui o cabeçalho do tema
?>
<main id="main-content">
        <section class="container-fluid" id="bloco-01-home">
            <div class="siema" id="main-slider">
                <div class="slide">
                    <!-- Vídeo de fundo -->
                    <video autoplay muted loop playsinline class="background-video">
                        <source src="<?php echo get_template_directory_uri(); ?>/_assets/_video/bg.mov" type="video/mp4">
                        Seu navegador não suporta vídeos HTML5.
                    </video>
                    <!-- Camada preta com opacidade -->
                    <div class="overlay"></div>
                    <div class="grid-effect"></div>
                    <!-- Conteúdo sobreposto -->
                    <div class="content">
                        <div class="container-fluid">
                            <div class="container">
                                <div class="row row-80 middle-xs">

                                    <div class="col-xs-12 col-xs-12-substituicao-v2 col-lg-8 box-retangle-father col-xs-12 ">
                                        <div class="box-retangle box-retangle-text">
                                            <h1>O <span>futuro</span> se constrói agora</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-20 bottom-xs between-xs">
                                    <div class="col-xs-12 col-xs-12-substituicao-v2 col-lg-7 main-banner-div">
                                        <a href="#bloco-02-areas" class="slider-button a-1">Conheça nossos serviços<i class="fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-2 main-banner-div">
                                        <a href="#bloco-02-areas" class="slider-button type-2 center-xs end-lg explore">
                                            Explorar
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <div class="social-buttons">
            <ul>
                <li><a href="https://www.linkedin.com/company/andrade-gutierrez"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/eng_ag/"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/AndradeGutierrezSA"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/user/AndradeGutierrez"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    
        <section class="section-defaults container-fluid" id="bloco-02-areas">
            <div class="container first-info">
                <div class="row row-info">
                    <div class="col-xs-12 col-xs-12-substituicao col-lg-11 col-lg-offset-1 start-lg center-xs area-atuacao-div">
                        <h1 class="area-atuacao">áreas de <span>atuação</span></h1>
                    </div>
                </div>
                <div class="row row-info">
                    <div class="col-xs-12 col-xs-12-substituicao col-lg-2 col-lg-offset-1 start-lg center-xs slogan-area-atuacao-div">
                        <h4 style="width: 200px; margin-top: 0%;">o que fazemos</h4>
                    </div>
                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4 start-lg center-xs text-area-atuacao-div">
                        <p>A Consag Engenharia atua em diversos setores, proporcionando soluções inovadoras e entregas de qualidade. Conheça nossas principais áreas de atuação.</p>
                    </div>
                </div>
                <!-- Começo Links -->
                <div class="row ">
                    <div class="col-xs-12 col-xs-12-substituicao ">
                        <a href="<?= get_permalink(47); ?>" class="link-c-foto">
                            <div class="container-fluid">
                                <div class="row top-xs">
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                        <div class="title-image">
                                            <h2 class="title">Energias Renováveis</h2>
                                            <div class="hidden-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/_assets/_img/_atuacao_img/one.png);"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                        <div class="description">
                                            <p>A Consag Engenharia atua em projetos de energia solar, eólica e hidroelétricas, promovendo um futuro mais sustentável.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-3 col-lg-offset-1">
                                        <div class="button saibamais-button">saiba mais &nbsp;<div class="arrow">→</div></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xs-12 col-xs-12-substituicao ">
                        <a href="<?= get_permalink(629); ?>" class="link-c-foto">
                            <div class="container-fluid">
                                <div class="row top-xs">
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                        <div class="title-image">
                                            <h2 class="title">Linhas de Transmissão</h2>
                                            <div class="hidden-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/_assets/_img/_atuacao_img/two.png);"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                        <div class="description">
                                            <p>Construímos linhas de transmissão com eficiência, garantindo fornecimento seguro e confiável.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-3 col-lg-offset-1">
                                        <div class="button saibamais-button">saiba mais &nbsp;<div class="arrow">→</div></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xs-12 col-xs-12-substituicao ">
                        <a href="<?= get_permalink(632); ?>" class="link-c-foto">
                            <div class="container-fluid">
                                <div class="row top-xs">
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                        <div class="title-image">
                                            <h2 class="title">Óleo e Gás</h2>
                                            <div class="hidden-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/_assets/_img/_atuacao_img/three.png);"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                        <div class="description">
                                            <p>Oferecemos soluções completas para projetos de óleo e gás, com foco em inovação e eficiência operacional.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-3 col-lg-offset-1">
                                        <div class="button saibamais-button">saiba mais &nbsp;<div class="arrow">→</div></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
    
                <div class="row ">
                    <div class="col-xs-12 col-xs-12-substituicao ">
                        <a href="<?= get_permalink(69); ?>" class="link-c-foto">
                            <div class="container-fluid">
                                <div class="row top-xs">
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                        <div class="title-image">
                                            <h2 class="title">Termoelétrica e hidrogênio verde</h2>
                                            <div class="hidden-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/_assets/_img/_atuacao_img/four.png);"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                        <div class="description">
                                            <p>Construímos as maiores usinas termelétricas do Brasil, priorizando segurança e excelência.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-3 col-lg-offset-1">
                                        <div class="button saibamais-button">saiba mais &nbsp;<div class="arrow">→</div></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xs-12 col-xs-12-substituicao ">
                        <a href="<?= get_permalink(78); ?>" class="link-c-foto">
                            <div class="container-fluid">
                                <div class="row top-xs">
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                        <div class="title-image">
                                            <h2 class="title">Infraestrutura</h2>
                                            <div class="hidden-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/_assets/_img/_atuacao_img/five.png);"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                        <div class="description">
                                            <p>Referência em construção de infraestrutura, contribuindo para o desenvolvimento socioeconômico do país.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-3 col-lg-offset-1">
                                        <div class="button saibamais-button">saiba mais &nbsp;<div class="arrow">→</div></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xs-12 col-xs-12-substituicao ">
                        <a href="<?= get_permalink(82); ?>" class="link-c-foto">
                            <div class="container-fluid">
                                <div class="row top-xs">
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                        <div class="title-image">
                                            <h2 class="title">Mineração</h2>
                                            <div class="hidden-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/_assets/_img/_atuacao_img/six.png);"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                        <div class="description">
                                            <p>Construímos e operamos projetos de Mineração, garantindo segurança e alto performance.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-3 col-lg-offset-1">
                                    <div class="button saibamais-button">saiba mais &nbsp;<div class="arrow">→</div></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xs-12 col-xs-12-substituicao ">
                        <a href="<?= get_permalink(638); ?>" class="link-c-foto">
                            <div class="container-fluid">
                                <div class="row top-xs">
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                        <div class="title-image">
                                            <h2 class="title">industrial leve</h2>
                                            <div class="hidden-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/_assets/_img/_atuacao/industrial-leve.jpg)';"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                        <div class="description">
                                            <p>Joint Venture CONSAG e CA3M.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-xs-12-substituicao col-lg-3 col-lg-offset-1">
                                    <div class="button saibamais-button">saiba mais &nbsp;<div class="arrow">→</div></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Fim Links -->
                <div class="spacer-2"></div>
                <div class="row middle-xs middle-content">
                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4 men-image">
                        <div class="ilustracao shadow-270 detail-cross" style="background-image: url(<?php echo get_template_directory_uri(); ?>/_assets/_img/ilustracao-01.png); height: 490px; width: 360px;"></div>
                    </div>
                    <div class="col-xs-12 col-xs-12-substituicao-v3 col-lg-5 col-lg-offset-1 start-lg center-xs text-middle">
                        <h4>a consag engenharia</h4>
                        <h2>Com <span>tradição</span> e <span>excelência</span>, a <span>Consag</span> transforma o Brasil e o mundo com <span>soluções inovadoras</span> em engenharia de grande porte.</h2>
                        <a href="<?= get_permalink(16); ?>" class="button button-inverted button-saiba-mais">saiba mais →</a>
                    </div>
                </div>
                <div class="row middle-xs">
                    <img class="selo-video-middle" src="<?php echo get_template_directory_uri(); ?>/_assets/_img/selo-video.png" alt="">
                    <div class="col-xs-12 col-xs-12-substituicao col-lg-5 team">
                        <a class="team-invite">
                            <div class="team-avatars">
                                <img src="<?php echo get_template_directory_uri(); ?>/_assets/_img/avatar.png" alt="Colaborador 1" class="avatar">
                                <img src="<?php echo get_template_directory_uri(); ?>/_assets/_img/avatar.png" alt="Colaborador 2" class="avatar">
                                <img src="<?php echo get_template_directory_uri(); ?>/_assets/_img/avatar.png" alt="Colaborador 3" class="avatar">
                                <img src="<?php echo get_template_directory_uri(); ?>/_assets/_img/avatar.png" alt="Colaborador 4" class="avatar">
                            </div>
                            <div class="team-text">
                                <span>FAÇA PARTE<br>DO NOSSO TIME</span>
                            </div>
                            <div class="team-button">
                                <div href="<?= get_permalink(11); ?>" class="button-link">
                                    <span class="arrow">→</span>
                                </div>
                            </div>
                        </a>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="project-card">
                                    <h2 class="project-number" data-target="1000">+1000</h2>
                                    <div class="project-description">
                                        <span class="square-indicator"></span>
                                        <p>Projetos concluídos com excelência em diversas áreas de atuação.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="project-card">
                                    <h2 class="project-number" data-target="75">+75</h2>
                                    <div class="project-description">
                                        <span class="square-indicator"></span>
                                        <p>Anos de Experiência Desenvolvendo soluções inovadoras e sustentáveis desde 1948.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-lg-offset-1 div-banner-engenheiros">
                        <!-- <div class="ilustracao shadow-270" style="background-image: url(<?php echo get_template_directory_uri(); ?>/_assets/_img/_engenharia/mod3-sobre-2.jpg); min-height: 400px; min-width: 680px;"></div> -->
                        <div class="ilustracao shadow-270" style="background-image: url(<?php echo get_template_directory_uri(); ?>/_assets/_img/ilustracao-02.png); height: 340px;width: 600px"></div>
                    </div>
                </div>
            </div>
            <div class="details">
                <div class="detail detail-01" id="detail-01">
                    <img class="deatil-01-img" src="<?php echo get_template_directory_uri(); ?>/_assets/_img/_details/t-01.png" alt="">
                </div>
                <div class="detail" id="detail-02">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/_img/_details/t-02.png" alt="">
                </div>
                <div class="detail detail-03" id="detail-03">
                    <img class="detail-03-img" src="<?php echo get_template_directory_uri(); ?>/_assets/_img/_details/t-03.png" alt="">
                </div>
            </div>
        </section>
        <!-- <section class="section-defaults container-fluid" id="bloco-03-diferenciais">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                        <h1 class="inverted">Nossos <span>Diferenciais</span></h1>
                        <h4>como fazemos</h4>
                    </div>
                    <div class="col-xs-12 col-xs-12-substituicao col-lg-8">
                        <div class="diferenciais-itens">
                            <div class="row">
                                <div class="col-xs-12 col-xs-12-substituicao col-lg-6">
                                    <div class="diferenciais-item">
                                        <div class="diferenciais-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_assets/_img/_seguranca/seguranca.jpg');"></div>
                                        <div class="diferenciais-content">
                                            <h2 class="title">Segurança</h2>
                                            <p>
                                                Nossa prioridade é a segurança da nossa gente, adotando as melhores práticas e tecnologias para garantir ambientes de trabalho seguros.
                                            </p>
                                            <a href="<?= get_permalink(613); ?>" class="button-link">
                                                Saiba mais <span class="arrow">→</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-xs-12-substituicao col-lg-6">
                                    <div class="diferenciais-item">
                                        <div class="diferenciais-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_assets/_img/_seguranca/compliance.jpg');"></div>
                                        <div class="diferenciais-content">
                                            <h2 class="title">Compliance</h2>
                                            <p>
                                                Mantemos uma forte cultura de compliance, aderindo rigorosamente às normas e regulamentações para garantir transparência e integridade em todas as nossas operações.
                                            </p>
                                            <a href="<?= get_permalink(643); ?>" class="button-link">
                                                Saiba mais <span class="arrow">→</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-xs-12-substituicao col-lg-6">
                                    <div class="diferenciais-item">
                                        <div class="diferenciais-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_assets/_img/_seguranca/carreiras.jpg');"></div>
                                        <div class="diferenciais-content">
                                            <h2 class="title">Carreiras</h2>
                                            <p>
                                                Valorizamos e investimos no desenvolvimento contínuo dos nossos colaboradores, promovendo um ambiente de trabalho inclusivo e estimulante.
                                            </p>
                                            <a href="<?= get_permalink(515); ?>" class="button-link">
                                                Saiba mais <span class="arrow">→</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-xs-12-substituicao col-lg-6">
                                    <div class="diferenciais-item">
                                        <div class="diferenciais-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_assets/_img/_seguranca/inovacao.jpg');"></div>
                                        <div class="diferenciais-content">
                                            <h2 class="title">Inovação</h2>
                                            <p>
                                                Inovamos todos os dias na forma de pensar e fazer engenharia para solucionar grandes desafios.
                                            </p>
                                            <a href="<?= get_permalink(652); ?>" class="button-link">
                                                Saiba mais <span class="arrow">→</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-xs-12-substituicao col-lg-6">
                                    <div class="diferenciais-item">
                                        <div class="diferenciais-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_assets/_img/_seguranca/excelencia.jpg');"></div>
                                        <div class="diferenciais-content">
                                            <h2 class="title">Excelência Operacional</h2>
                                            <p>
                                                Buscamos constantemente a excelência operacional através de metodologias eficientes e práticas de gestão que asseguram a qualidade e o sucesso dos nossos projetos.
                                            </p>
                                            <a href="<?= get_permalink(649); ?>" class="button-link">
                                                Saiba mais <span class="arrow">→</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-xs-12-substituicao col-lg-6">
                                    <div class="diferenciais-item">
                                        <div class="diferenciais-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_assets/_img/_seguranca/engenharia.jpg');"></div>
                                        <div class="diferenciais-content">
                                            <h2 class="title">Engenharia</h2>
                                            <p>
                                                Oferecemos soluções de engenharia de alta qualidade, combinando experiência e inovação para entregar projetos que transformam a infraestrutura do país.
                                            </p>
                                            <a href="<?= get_permalink(646); ?>" class="button-link">
                                                Saiba mais <span class="arrow">→</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-xs-12-substituicao col-lg-6">
                                    <div class="diferenciais-item">
                                        <div class="diferenciais-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_assets/_img/_seguranca/bim.jpg');"></div>
                                        <div class="diferenciais-content">
                                            <h2 class="title">Metodologia BIM</h2>
                                            <p>
                                                Possuímos uma área dedicada ao BIM, utilizando a metodologia para aprimorar a gestão dos projetos, garantindo precisão e eficiência desde o planejamento até a execução.
                                            </p>
                                            <a href="<?= get_permalink(655); ?>" class="button-link">
                                                Saiba mais <span class="arrow">→</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-xs-12-substituicao col-lg-6">
                                    <div class="diferenciais-item">
                                        <div class="diferenciais-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_assets/_img/_seguranca/esg.jpg');"></div>
                                        <div class="diferenciais-content">
                                            <h2 class="title">ESG</h2>
                                            <p>
                                                Comprometidos com a responsabilidade social e ambiental, implementamos práticas de ESG que visam o desenvolvimento sustentável e o bem-estar das comunidades onde atuamos.
                                            </p>
                                            <a href="<?= get_permalink(658); ?>" class="button-link">
                                                Saiba mais <span class="arrow">→</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    
        <img class="gray-details-project" src="<?php echo get_template_directory_uri(); ?>/_assets/_img/_details/gray-details.png" alt="">
        <section class="section-defaults container-fluid" id="bloco-04-projetos">
        <div class="detail-cross-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/_assets/_img/_details/cross.png)"></div>
            <div class="container container-banner-initial">
                <div class="row row-title-projects">
                    <div class=" col-lg-6 center-xs start-lg">
                        <h1 style="width: 700px;">Projetos <span>Realizados</span></h1>
                        <div class="mini-desc" style="display: flex;">
                            <div class="row mini-desc-div">
                                <div class=" col-lg-4 center-xs start-lg" >
                                    <h4 style="width: 200px; font-size: 12px; margin-left: 10px;" style="margin-top: -12px; margin-right: 20%;">Nosso Portfólio</h4>
                                </div>
                                <div class=" col-lg-8 center-xs start-lg">
                                    <p style="width: 320px; font-size: 12px;">
                                        Realizamos mais de 1.000 projetos com excelência e qualidade em diversos segmentos. Nosso compromisso é conectar e transformar sociedades.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-xs-12 col-xs-12-substituicao-v3">
                        <div id="slider-projetos">
    
                            <div class="slide">
                                <div class="slide-content" style="background-image: url('/wp-content/uploads/2024/12/capa-linha-de-transmissao-oriximina-silves-1.jpg');">
                                    <div class="row end-lg">
                                        <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                            <div class="info-container start-lg">
                                                <div class="info-image" style="background-image: url('/wp-content/uploads/2024/12/capa-linha-de-transmissao-oriximina-silves-1.jpg');"></div>
                                                <div class="box-infos">
                                                    <div class="info-tag">Linhas de Transmissão</div>
                                                    <h3 class="info-title">Linha de Transmissão Alto do Paranaíba</h3>
                                                    <p class="info-location">Localização: Minas Gerais e São Paulo, Brasil</p>
                                                    <div id="projeto-button-popup1" class="button-link">
                                                        Leia mais <span class="arrow">→</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="slide">
                                <div class="slide-content" style="background-image: url('/wp-content/uploads/2024/12/capa-solar-parque-solar-janauba-sjan-2.jpg');">
                                    <div class="row end-lg">
                                        <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                            <div class="info-container start-lg">
                                                <div class="info-image" style="background-image: url('/wp-content/uploads/2024/12/capa-solar-parque-solar-janauba-sjan-2.jpg');"></div>
                                                <div class="box-infos">
                                                    <div class="info-tag">Linhas de Transmissão</div>
                                                    <h3 class="info-title">Lote 05 - Leilão de Transmissão 001/2024</h3>
                                                    <p class="info-location">Localização: Bahia, Alagoas, Ceará, Piauí e Pernambuco - Brasil</p>
                                                    <div id="projeto-button-popup2" class="button-link">
                                                        Leia mais <span class="arrow">→</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="slide">
                                <div class="slide-content" style="background-image: url('/wp-content/uploads/2024/12/capa-linha-de-transmissao-equatorial-2.jpg');">
                                    <div class="row end-lg">
                                        <div class="col-xs-12 col-xs-12-substituicao col-lg-4">
                                            <div class="info-container start-lg">
                                                <div class="info-image" style="background-image: url('/wp-content/uploads/2024/12/capa-linha-de-transmissao-equatorial-2.jpg');"></div>
                                                <div class="box-infos">
                                                    <div class="info-tag">Linhas de Transmissão</div>
                                                    <h3 class="info-title">Linhas de Transmissão Equatorial</h3>
                                                    <p class="info-location">Localização: Bahia, Minas Gerais, Pará E Piauí - Brasil</p>
                                                    <div id="projeto-button-popup3" class="button-link">
                                                        Leia mais <span class="arrow">→</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-projetos-controls">
                            <button id="slider-projetos-prev" class="slider-button">←</button>
                            <button id="slider-projetos-next" class="slider-button">→</button>
                        </div>
                    </div>
                </div>
            </div>
    
        </section>
        <section class="section-defaults container-fluid" id="bloco-05-noticias">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-xs-12-substituicao center-xs start-lg">
                        <h1>Notícias</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-xs-12-substituicao">
                        <div id="slider-noticias">
                            <div class="slide slide-noticias">
                                <div class="noticia-item">
                                    <h2>Totam sint fugiat odio</h2>
                                    <p>Consag Engenharia e Mitsubishi Power Americas assinam contrato EPC para a UTE Portocem, uma usina termelétrica de 1,6 GW no Brasil, prevista para 2026.</p>
                                    <a href="https://consagsa-staging.azurewebsites.net/totam-sint-fugiat-odio/" class="button-link">
                                        Ver Matéria <span class="arrow">→</span>
                                    </a>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="noticia-item">
                                    <h2>Totam sint fugiat odio</h2>
                                    <p>Consag Engenharia e Mitsubishi Power Americas assinam contrato EPC para a UTE Portocem, uma usina termelétrica de 1,6 GW no Brasil, prevista para 2026.</p>
                                    <a href="https://consagsa-staging.azurewebsites.net/totam-sint-fugiat-odio/" class="button-link">
                                        Ver Matéria <span class="arrow">→</span>
                                    </a>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="noticia-item">
                                    <h2>Totam sint fugiat odio</h2>
                                    <p>Consag Engenharia e Mitsubishi Power Americas assinam contrato EPC para a UTE Portocem, uma usina termelétrica de 1,6 GW no Brasil, prevista para 2026.</p>
                                    <a href="https://consagsa-staging.azurewebsites.net/totam-sint-fugiat-odio/" class="button-link">
                                        Ver Matéria <span class="arrow">→</span>
                                    </a>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="noticia-item">
                                    <h2>Totam sint fugiat odio</h2>
                                    <p>Consag Engenharia e Mitsubishi Power Americas assinam contrato EPC para a UTE Portocem, uma usina termelétrica de 1,6 GW no Brasil, prevista para 2026.</p>
                                    <a href="https://consagsa-staging.azurewebsites.net/totam-sint-fugiat-odio/" class="button-link">
                                        Ver Matéria <span class="arrow">→</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slider-noticias-controls">
                            <button id="slider-noticias-prev" class="slider-button">←</button>
                            <button id="slider-noticias-next" class="slider-button">→</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details">
    
                <div class="detail" id="detail-01">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/_img/_details/t-03.png" alt="">
                </div>
            </div>
        </section>
    </main>
    <div id="popup-atuacao1" class="popup-atuacao popup-overlay">
        <div class="popup-content">
            <button id="close-popup-atuacao" class="close-popup-button">✕</button>
            <section class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-xs-12-substituicao col-lg-6">
                        <div class="slider-projetos-home">
                            <div class="slide">
                                <div class="fotoprojeto" style="background-image: url('/wp-content/uploads/2024/12/capa-linha-de-transmissao-alto-do-paranaiba-1.jpg');"></div>
                            </div>
    
                        </div>
                        <div class="slider-controls">
                            <button class="prev " id="prev-projetos-pop">←</button>
                            <button class="next " id="next-projetos-pop">→</button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-xs-12-substituicao col-lg-6">
                        <div class="content">
                            <div class="info-tag">LINHA DE TRANSMISSÃO</div>
                            <h2><strong>Linha De Transmissão Oriximiná - Silves</strong></h2>
                            <div class="descricao">
                                <p><strong>Localização: </strong>Pará E Amazonas - Brasil</p>
    
                                <p><strong>Descrição do Projeto:</strong></p>
                                <p>Execução dos serviços de logística, obras civis, montagem de torres e lançamento de cabos condutores da LT 500 kV SE Oriximiná –Silves com 333 km de extensão, em circuito duplo.</p>
    
                                <p><strong>Destaques:</strong></p>
                                <ul>
                                    <li>595 torres, Torres com alturas entre 40 e 180,5 metros</li>
                                    <li>Empreendimento beneficiou em torno de 2 milhões de pessoas.</li>
                                    <li>Desafio logístico devido a implantação do projeto em região de selva amazônica.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div id="popup-atuacao2" class="popup-atuacao popup-overlay">
        <div class="popup-content">
            <button id="close-popup-atuacao" class="close-popup-button">✕</button>
            <section class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-xs-12-substituicao col-lg-6">
                        <div class="slider-projetos-home">
    
                            <div class="slide">
                                <div class="fotoprojeto" style="background-image: url('/wp-content/uploads/2024/12/capa-linha-de-transmissao-alto-do-paranaiba-1.jpg');"></div>
                            </div>
                        </div>
                        <div class="slider-controls">
                            <button class="prev " id="prev-projetos-pop">←</button>
                            <button class="next " id="next-projetos-pop">→</button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-xs-12-substituicao col-lg-6">
                        <div class="content">
                            <div class="info-tag">LINHA DE TRANSMISSÃO</div>
                            <h2><strong>Linha De Transmissão Oriximiná - Silves</strong></h2>
                            <div class="descricao">
                                <p><strong>Localização: </strong>Pará E Amazonas - Brasil</p>
    
                                <p><strong>Descrição do Projeto:</strong></p>
                                <p>Execução dos serviços de logística, obras civis, montagem de torres e lançamento de cabos condutores da LT 500 kV SE Oriximiná –Silves com 333 km de extensão, em circuito duplo.</p>
    
                                <p><strong>Destaques:</strong></p>
                                <ul>
                                    <li>595 torres, Torres com alturas entre 40 e 180,5 metros</li>
                                    <li>Empreendimento beneficiou em torno de 2 milhões de pessoas.</li>
                                    <li>Desafio logístico devido a implantação do projeto em região de selva amazônica.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php
get_footer(); // Inclui o rodapé do tema
