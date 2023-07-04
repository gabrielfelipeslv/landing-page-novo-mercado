<?php

session_start();

if(!isset($_SESSION['USUARIO_CADASTRADO'])){
    header('Location: https://quizenem.com/extras/projeto-o-novo-mercado');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sua vaga está confirmada! | O Novo Mercado</title>
    <meta name="description" content="Parabéns, você acaba de confirmar sua vaga!">

    <!--    <link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon.png">-->
    <!--    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">-->
    <!--    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">-->

    <meta name="msapplication-TileColor" content="#0070DF">
    <meta name="theme-color" content="#0070DF">

    <link rel="preload" href="src/fonts/Paralucent/Paralucent-Thin.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="src/fonts/Paralucent/Paralucent-Light.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="src/fonts/Paralucent/Paralucent-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="src/fonts/Paralucent/Paralucent-Medium.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="src/fonts/Paralucent/Paralucent-DemiBold.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="stylesheet" href="src/css/style.css">
</head>
<body class="obrigado">
<div class="container-bussola-background">
    <img src="src/img/bussola-background.png" alt="Bússula ilustrativa no topo da página" id="bussola-landing">
</div>
<div class="container-bussola-background bussola-esquerda">
    <img src="src/img/obrigado/bussola-esquerda.png" alt="Bússula ilustrativa no lado esquerdo da página" id="bussola-lateral">
</div>
<header>
    <img src="src/img/header/logo-empresa.png" alt="Logo da empresa: O Novo Mercado" title="Empresa: O Novo Mercado">
    <img src="src/img/header/logo-curso.png" alt="Logo do curso: Gestor de Marketing Digital" title="Curso: Gestor de Marketing Digital">
</header>
<main>
    <section id="introducao">
        <h1>
            <?=$_SESSION['USUARIO_CADASTRADO']?>,<br>
            SUA VAGA ESTÁ GARANTIDA!
        </h1>
        <p>
            Parabéns por ter dado o passo mais decisivo do seu futuro no mercado digital.
            <br>
            Os seus dados de acesso à formação foram enviados por email.
        </p>
        <p class="texto-pre-video">
            Agora, assista ao vídeo abaixo:
        </p>
        <div id="video-placeholder">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/g1CAlRlchco" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </section>
    <section id="apresentacao">
        <h2>
            SEJA MUITO BEM-VINDO(A) À PRIMEIRA E ÚNICA <b>FORMAÇÃO EM GESTOR DE MARKETING DIGITAL</b> DO BRASIL.
        </h2>
        <p>
            Agora você vai dominar habilidades que poucos têm, conquistar os melhores clientes e obter os maiores resultados.
            <br>
            <b>O mercado está esperando por você!</b>
        </p>
    </section>
    <section id="manual-aluno">
        <img src="src/img/obrigado/notebook.png">
        <div>
            <h2>
                FAÇA O DOWNLOAD DO <b>MANUAL DO ALUNO</b> ABAIXO E VEJA COMO ACESSAR A PLATAFORMA DE ENSINO.
            </h2>
            <p>
                O passo a passo para você começar a estudar todo o conteúdo da Formação em Gestor de Marketing e entrar na comunidade exclusiva de alunos imediatamente.
            </p>
            <a target="_blank" href="#" title="Baixar Manual do Aluno">
                BAIXAR O MANUAL DE ACESSO
                <svg viewBox="0 0 33 33" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.9561 16.9541V22.7874C24.9561 23.2295 24.7805 23.6534 24.4679 23.9659C24.1553 24.2785 23.7314 24.4541 23.2894 24.4541H6.62272C6.18069 24.4541 5.75677 24.2785 5.44421 23.9659C5.13165 23.6534 4.95605 23.2295 4.95605 22.7874V16.9541C4.95605 16.7331 5.04385 16.5211 5.20013 16.3648C5.35641 16.2086 5.56837 16.1208 5.78939 16.1208C6.0104 16.1208 6.22236 16.2086 6.37864 16.3648C6.53492 16.5211 6.62272 16.7331 6.62272 16.9541V22.7874H23.2894V16.9541C23.2894 16.7331 23.3772 16.5211 23.5335 16.3648C23.6897 16.2086 23.9017 16.1208 24.1227 16.1208C24.3437 16.1208 24.5557 16.2086 24.712 16.3648C24.8683 16.5211 24.9561 16.7331 24.9561 16.9541ZM14.3665 17.5437C14.4439 17.6212 14.5358 17.6826 14.6369 17.7246C14.7381 17.7665 14.8465 17.7881 14.9561 17.7881C15.0656 17.7881 15.174 17.7665 15.2752 17.7246C15.3763 17.6826 15.4682 17.6212 15.5456 17.5437L19.7123 13.377C19.7897 13.2996 19.8511 13.2077 19.893 13.1065C19.935 13.0054 19.9565 12.8969 19.9565 12.7874C19.9565 12.6779 19.935 12.5695 19.893 12.4684C19.8511 12.3672 19.7897 12.2753 19.7123 12.1979C19.6349 12.1204 19.543 12.059 19.4418 12.0171C19.3406 11.9752 19.2322 11.9536 19.1227 11.9536C19.0132 11.9536 18.9048 11.9752 18.8036 12.0171C18.7025 12.059 18.6106 12.1204 18.5331 12.1979L15.7894 14.9426V5.28743C15.7894 5.06642 15.7016 4.85446 15.5453 4.69818C15.389 4.5419 15.1771 4.4541 14.9561 4.4541C14.735 4.4541 14.5231 4.5419 14.3668 4.69818C14.2105 4.85446 14.1227 5.06642 14.1227 5.28743V14.9426L11.379 12.1979C11.2226 12.0415 11.0105 11.9536 10.7894 11.9536C10.5683 11.9536 10.3562 12.0415 10.1998 12.1979C10.0434 12.3542 9.95559 12.5663 9.95559 12.7874C9.95559 13.0086 10.0434 13.2207 10.1998 13.377L14.3665 17.5437Z"/>
                </svg>
            </a>
        </div>
    </section>
</main>
<footer>
    <section id="texto-contatos">
        <p>
            ALGUMA DÚVIDA SOBRE O SEU ACESSO?
        </p>
        <p>
            Se você tiver qualquer dúvida, qualquer uma mesmo, nós temos uma equipe inteira de suporte para resolver o seu problema. Eles vão te responder o mais rápido possível dentro do horário comercial.
        </p>
    </section>
    <div id="flex-contatos">
        <div class="instrucoes-contato">
            <img src="src/img/footer/icone-whatsapp.png" alt="Ícone do WhatsApp" title="Fale com nossa equipe pelo WhatsApp">
            <div class="complemento-contato">
                <p>Atendimento por WhatsApp</p>
                <p>
                    Envie uma mensagem para
                    <br>
                    +55 (13) 99660-8684
                </p>
                <a href="https://wa.me/5513996608684" target="_blank" title="Abrir conversa no WhatsApp com nossa equipe de atendimento" class="link-whatsapp">
                    Clique aqui para acessar
                </a>
            </div>
        </div>
        <div class="instrucoes-contato">
            <img src="src/img/footer/icone-gmail.png" alt="Ícone do Gmail" title="Fale com nossa equipe por email">
            <div class="complemento-contato">
                <p>ATENDIMENTO POR EMAIL</p>
                <p>
                    Envie um e-mail para
                    <br>
                    suporte@onovomercado.com.br
                </p>
                <a href="mailto:suporte@onovomercado.com.br" target="_blank" title="Enviar email para nossa equipe" class="link-email">
                    Clique aqui para enviar
                </a>
            </div>
        </div>
    </div>
    <!--    <script src="src/js/script.js"></script>-->
</footer>
</body>
</html>