<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espectrum</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Linking Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Responsive navbar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Icon navbar -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" />
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.ico">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!----------- Navbar -------------------------------------------------------->
    <header class="navbar">
        <div class="container-navbar">
            <div class="logo">
                <a href="#home"><img src="images/logo/l-n-r-semfundo.png"></a>
            </div>
            <ul class="links">
                <li><a href="#servicos" id="link-nav-blue">Serviços</a></li>
                <li><a href="#fundador" id="link-nav-green">Equipe</a></li>
                <li><a href="#sobre-nos" id="link-nav-yellow">Sobre</a></li>
                <li><a href="#portfolio" id="link-nav-red">Portfólio</a></li>
                <li><a href="#parceiros" id="link-nav-purple">Parceiros</a></li>
            </ul>
            <a href="#contato" class="action_btn">Contate-nos</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="#servicos">Serviços</a></li>
            <li><a href="#fundador">Equipe</a></li>
            <li><a href="#sobre-nos">Sobre</a></li>
            <li><a href="#portfolio">Portfólio</a></li>
            <li><a href="#parceiros">Parceiros</a></li>
            <li><a href="#contato" class="action_btn">Contate-nos</a></li>
        </div>
    </header>

    <!---------------------- Home ------------------------------------------------->
    <section id="home" class="home fade-in">
        <div class="slider-container">
            <!-- Slider List Items-->
            <div class="slider-wrapper swiper-wrapper">
                <div class="slider-item swiper-slide"> <!-- Slide 01 -->
                    <div class="slider-content">
                        <h3 class="slide-subtitle">Espectrum</h3>
                        <h2 class="slide-title">Tornando Vísivel o Invísivel</h2>
                        <p class="slide-description">A Espectrum é especializada na criação de soluções em sistemas web e aplicativos para empresas de pequeno e médio porte.</p>
                        <a href="#sobre-nos" id="home-button-red" class="slide-button"><span>Sobre Nós</span></a>
                    </div>
                </div>
                <div class="slider-item swiper-slide"> <!-- Slide 02 -->
                    <div class="slider-content">
                        <h3 class="slide-subtitle">Intea</h3>
                        <h2 class="slide-title">Intea - Nada de Nós Sem Nós</h2>
                        <p class="slide-description">Acesse um app inteiramente voltado à comunidade autista, possibilitando chats privados com psicólogos e profissionais na área.</p>
                        <a href="#" id="home-button-blue" class="slide-button"><span>Baixar App</span></a>
                    </div>
                </div>
                <div class="slider-item swiper-slide"> <!-- Slide 03 -->
                    <div class="slider-content">
                        <h3 class="slide-subtitle">Multicolor</h3>
                        <h2 class="slide-title">Acessibilidade e Inclusão</h2>
                        <p class="slide-description">Acreditamos que para uma ferramenta ser verdadeiramente útil para alguém, ela deve antes ser acessivel para o todo.</p>
                        <a href="#servicos" id="home-button-yellow" class="slide-button"><span>Saiba Mais</span></a>
                    </div>
                </div>
            </div>

            <!-- Slider Pagination-->
            <div class="slider-controls">
                <ul class="slider-pagination">
                    <div class="slider-indicator">

                    </div>
                    <li class="slider-tab">Conheça a Espectrum</li>
                    <li class="slider-tab">Intea - O lugar seguro para você</li>
                    <li class="slider-tab">Aqui todos são bem vindos</li>
                </ul>
            </div>

            <!-- Slider Navigation (Prev/Next)-->
            <div class="slider-navigations">
                <button id="slide-prev" class="material-symbols-rounded">arrow_left_alt</button>
                <button id="slide-next" class="material-symbols-rounded">arrow_right_alt</button>
            </div>
        </div>
    </section>


    <!-- Serviços ------------------------------------------------------->
    <section id="servicos" class="servicos fade-in">
        <div class="sobre-nos-carousel-container">
            <h2>Nossos Serviços</h2>
            <div class="sobre-nos-carousel-conteudo swiper">
                <div class="wrapper">
                    <div class="card-list swiper-wrapper">
                        
                        <div class="card swiper-slide">
                            <div class="card-image">
                                <img src="images/Sobre/imagem1.png" alt="Elaboração de Sites">
                                <p class="card-tag">Elaboração de Sites e Plataformas</p>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Elaboração de Sites e Plataformas</h3>
                                <p class="card-text">Desenvolvemos sites, redes sociais e plataformas para iniciativas sociais.</p>
                            </div>
                        </div>

                       
                        <div class="card swiper-slide">
                            <div class="card-image">
                                <img src="images/Sobre/imagem2.jpg" alt="Consultoria em Tecnologia Social">
                                <p class="card-tag">Consultoria em Tecnologia Social</p>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Consultoria em Tecnologia Social</h3>
                                <p class="card-text">Oferecemos consultoria especializada para organizações sociais.</p>
                            </div>
                        </div>

                        
                        <div class="card swiper-slide">
                            <div class="card-image">
                                <img src="images/Sobre/imagem3.png" alt="Desenvolvimento de Aplicativos">
                                <p class="card-tag">Desenvolvimento de Aplicativos</p>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Desenvolvimento de Aplicativos</h3>
                                <p class="card-text">Criamos aplicativos móveis personalizados para projetos sociais.</p>
                            </div>
                        </div>

                   
                        <div class="card swiper-slide">
                            <div class="card-image">
                                <img src="images/Sobre/imagem4.jpg" alt="Teste e Qualidade">
                                <p class="card-tag">Teste e Qualidade De Softwares</p>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Teste e Qualidade De Softwares</h3>
                                <p class="card-text">Oferecemos testagem para da qualidade dos softwares para empresas.</p>
                            </div>
                        </div>
                    </div> 
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>


    <!------------------------- Equipe ---------------------------------------------------------->
    <section id="fundador" class="fade-in">
        <div class="container">
            <h2>Equipe</h2>
            <div class="fundador">
                <?php include 'includes/carlos.php' ?>
                <?php include 'includes/eduardo.php' ?>
                <?php include 'includes/felipe.php' ?>
                <?php include 'includes/guilherme.php' ?>
                <?php include 'includes/gustavo.php' ?>
                <?php include 'includes/kaue.php' ?>
                <?php include 'includes/leonardo.php' ?>
                <?php include 'includes/lucas.php' ?>
                <?php include 'includes/matheus.php' ?>
                <?php include 'includes/nicolas.php' ?>
            </div>
        </div>
    </section>

    <!-- Sobre Nós --------------------------------------------------------->
    <section id="sobre-nos" class="sobre-nos fade-in">
        <div class="container">
            <h2>Sobre Nós</h2>
            <div class="conteudo">

                <div class="texto">
                    <p>A Espectrum é uma empresa de tecnologia fundada em 25/02/2025 por alunos do 3° ano de Desenvolvimento de Sistemas da Etec de Guaianazes, com a missão de criar projetos de
                        impacto
                        social, promovendo inclusão, inovação e igualdade por meio da tecnologia.</p>
                    <p>Valorizamos soluções empáticas, contando com membros que vivenciam diretamente as realidades que
                        abordamos. Convidamos parceiros a se juntarem a nós para transformar realidades e tornar visível
                        o
                        invisível.</p>
                </div>

                <div class="imagem">
                    <img src="images/Sobre/etec-img01.jpg" alt="Equipe Espectrum">
                    <p>Foto tirada em 2006, no interior da Escola Técnica Estadual de Guaianazes</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Potifólio ---------------------------------------------------------->
    <section id="portfolio" class="portifolio fade-in">
        <div class="sobre-nos-carousel-container">
            <h2>Portfólio</h2>
            <div class="sobre-nos-carousel-conteudo swiper">

                <div class="wrapper">
                    <div class="card-list swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="card-image">
                                <img src="images/Portfólio/site-spider.png" alt="Spider">
                                <p class="card-tag">Spider-Man</p>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Site do Homem Aranha</h3>
                                <p class="card-text">Desenvolvido com o intuito de apresentar o personagem que é tido como o maior héroi do mundo, além de um breve resumo de suas obras de maior relevância no mercado atual.</p>
                                <div class="card-footer">
                                    <div class="card-profile">
                                        <img src="images/time/Guilherme.jpg" alt="Guilherme">
                                        <div class="card-profile-info">
                                            <span class="card-profile-name">Guilherme Fermino</span>
                                            <span class="card-profile-role">Full-Stack</span>
                                        </div>
                                    </div>
                                    <a href="#fundador" class="card-button">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="card-image">
                                <img src="images/Portfólio/furia.png" alt="Furia">
                                <p class="card-tag">Furia</p>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">PanteraBot - O Chatbot Oficial da FURIA Esports</h3>
                                <p class="card-text">O PanteraBot é o assistente virtual definitivo para fãs da FURIA Esports. Desenvolvido com tecnologia web moderna, oferece informações em tempo real sobre o time de CS2, jogadores, calendário de partidas e muito mais.</p>
                                <div class="card-footer">
                                    <div class="card-profile">
                                        <img src="images/time/Matheus.jpg" alt="Matheus">
                                        <div class="card-profile-info">
                                            <span class="card-profile-name">Matheus Maceu</span>
                                            <span class="card-profile-role">Full-Stack</span>
                                        </div>
                                    </div>
                                    <a href="#fundador" class="card-button">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="card-image">
                                <img src="images/Portfólio/site-noticias.png" alt="News Etec">
                                <p class="card-tag">News Etec</p>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Portal de Notícias</h3>
                                <p class="card-text">Site desenvolvido com a cooperação de vários programadores, visando reportar notícias e eventos relacionados a Etec de Guaianases.</p>
                                <div class="card-footer">
                                    <div class="card-profile">
                                        <img src="images/time/Gustavo.jpg" alt="Gustavo">
                                        <div class="card-profile-info">
                                            <span class="card-profile-name">Gustavo Fermino</span>
                                            <span class="card-profile-role">Front-End</span>
                                        </div>
                                    </div>
                                    <a href="#fundador" class="card-button">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="card-image">
                                <img src="images/Portfólio/JOGOS.jpeg" alt="Jogos">
                                <p class="card-tag">Video Games</p>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">LDJ</h3>
                                <p class="card-text">Loja de jogos online produzida por membros da Espectrum utilizando Laravel como principal ferramenta de Desenvolvimento.</p>
                                <div class="card-footer">
                                    <div class="card-profile">
                                        <img src="images/time/Felipe.jpg" alt="Felipe">
                                        <div class="card-profile-info">
                                            <span class="card-profile-name">Felipe Farias</span>
                                            <span class="card-profile-role">DBA</span>
                                        </div>
                                    </div>
                                    <a href="#fundador" class="card-button">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="card-image">
                                <img src="images/Portfólio/etec.jpeg" alt="news">
                                <p class="card-tag">Site Notícias</p>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Site Notícias</h3>
                                <p class="card-text">Site de noticías da Etec de Guaianazes, visando uma melhor comunicação com os alunos e funcionários da estalação.</p>
                                <div class="card-footer">
                                    <div class="card-profile">
                                        <img src="images/time/Carlos.jpg" alt="Carlos">
                                        <div class="card-profile-info">
                                            <span class="card-profile-name">Carlos Alexandre</span>
                                            <span class="card-profile-role">Designer</span>
                                        </div>
                                    </div>
                                    <a href="#fundador" class="card-button">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-pagination"></div>


                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
        </div>
    </section>



   <!-- Parceiros ---------------------------------------------------------->
    <section id="parceiros" class="parceiros fade-in">
        <h2 id="parceiros-titulo">Parceiros</h2>
        <div class="parceiros-content">
                <div class="parceiros-card">
                    <h2 id="empresa-01">Harpion</h2>
                    <img class="img-parceiro" src="images/parceiros/harpion.jpeg" alt="Harpion Logo">
                </div>
                <div class="parceiros-card">
                    <h2 id="empresa-02">Split</h2>
                    <img class="img-parceiro" src="images/parceiros/split.jpeg" alt="Split Logo">
                </div>    
                <div class="parceiros-card">
                    <h2 id="empresa-03">Umond</h2>
                    <img class="img-parceiro" src="images/parceiros/umond.jpeg" alt="Umond Logo">
                </div>
        </div>
    </section>
    

    <!-- Contato ------------------------------------------------------------>
    <section id="contato" class="contato fade-in">
        <div class="container">
            <h2>Entre em Contato</h2>
            <div class="contato-content">
                <!-- Img -->
                <div class="imagem fade-in">
                    <img src="images/contate-nos/Mention-bro.svg" alt="Contato">
                </div>
                <!-- Formulário -->
                <div class="formulario">
                    <form action="../site-espectrum/contato/contatoEnviar.php" method="post">
                        <h3>Contato</h3>
                        <p>Preencha para entrar em contato conosco via e-mail</p>
                        <fieldset>
                            <legend>Nome</legend>
                            <input type="text" id="nome" name="nome" required>
                        </fieldset>

                        <fieldset>
                            <legend>E-mail</legend>
                            <input type="email" id="email" name="email" required>
                        </fieldset>

                        <fieldset>
                            <legend>Mensagem</legend>
                            <textarea id="mensagem" name="mensagem" rows="1" required></textarea>
                        </fieldset>
                        <div class="botao-enviar">
                            <input type="submit" name="Enviar" value="Enviar Mensagem">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer ----------------------------------------------------------------->
    <footer>
        <div id="footer_content" class="container">
            <div id="footer_contacts">
                <h1>Espectrum</h1>
                <p>Viajando pelo mundo das ideias</p>

                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <ul class="footer-list">
                <li>
                    <h3>Serviços</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Site</a>
                </li>
                <li>
                    <a href="#" class="footer-link">App</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Sobre</h3>
                </li>
                <li>
                    <a href="https://www.cps.sp.gov.br/" class="footer-link" target="blank">Centro Paula Souza</a>
                </li>
                <li>
                    <a href="https://www.cps.sp.gov.br/etecs/etec-de-guaianazes-guaianazes/" class="footer-link" target="blank">Etec Guaianases</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Contato</h3>
                <p>Notifique-nos caso encontre algum problema</p>
            </div>
        </div>

        <div id="footer_copyright">
            &#169
            2025 Todos os direitos reservados
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> <!-- Linking Swiper JS -->
    <script src="js/generic.js"></script>
    <script src="js/navbar/script.js"></script> <!-- Responsive Navbar JS -->
    <script src="js/navbar/scroll.js"></script> <!-- Scroll Navbar JS -->
    <script src="js/home/script.js"></script> <!-- Linking Swiper JS Caroussel Home -->
    <script src="js/carousel-sobre/swiper.js"></script> <!-- Linking Swiper JS Cards Portfólio -->
</body>

</html>