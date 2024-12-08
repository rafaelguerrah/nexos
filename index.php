<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Primeira Pagina</title>
</head>

<body>
    <header>
        <div class="logo-container">
            <img src="img/nexo.logo.jpg" alt="Logo Nexo">
        </div>
        <ul class="social-links">
            <li><span>PERFIL E ATENDIMENTOS:</span></li>
            <li><a href="#"><img src="img/instragramheader.png" alt="instragram"></a></li>
            <li><a href="#"><img src="img/facebookheader.png" alt="facebook"></a></li>
            <li><a href="#"><img src="img/whatsappheader.png" alt="whatsapp"></a></li>
            <li><a href="#"><img src="img/youtubeheader.png" alt="youtube"></a></li>
        </ul>
    </header>
    <nav>
        <ul class="menu">
            <li><a href="#quem-somos">QUEM SOMOS</a></li>
            <li><a href="#">PRODUTOS</a></li>
            <li><a href="#">ORÇAMENTO</a></li>
            <li><a href="#">FALE CONOSCO</a></li>
        </ul>
    </nav>
    <main>
        <div class="div-geral">
            <div class="div-foto">
                <img src="img/pexels-pixabay-128872.jpg" alt="">
                <span class="foto-texto">Indoor</span>
            </div>
            <div class="div-foto">
                <img src="img/pexels-mi1kel-1259614.jpg" alt="">
                <span class="foto-texto">Outdor</span>
            </div>
            <div class="div-foto">
                <img src="img/pexels-akilmazumder-973590.jpg" alt="">
                <span class="foto-texto">Musical</span>
            </div>
            <div class="div-foto">
                <img src="img/pexels-rovenimages-com-344613-949592.jpg" alt="">
                <span class="foto-texto">Chá Revelação</span>
            </div>

        </div>
        <div class="div-info1" id="quem-somos">
            <h1>Quem Somos</h1>
            <section class="section-info">
                <article class="text-info">
                    <p>Nexos Pirotecnia é uma empresa que se destaca por transformar eventos em experiências
                        inesquecíveis
                        através de espetáculos de fogos de artifício. Fundada por especialistas apaixonados pela arte da
                        pirotecnia, a Nexos combina segurança, inovação e criatividade para proporcionar momentos de
                        pura
                        magia.</p>

                    <p>Desde o seu início, a Nexos tem se dedicado a criar apresentações que não apenas iluminam o céu,
                        mas
                        também tocam os corações do público. Cada projeto é abordado com um compromisso inabalável com a
                        excelência, desde pequenas celebrações privadas até grandes eventos públicos e corporativos.</p>
                </article>
            </section>
        </div>
        <div class="produto-mae">
            <div class="div-produtos">
                <h1>Produto</h1>
            </div>
        </div>

        <div class="orcamento-mae">
            <div class="div-orcamento">
                <h1>Orcamento</h1>
                <form action="email.php" method="POST">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" name="inNome" id="inNome">

                    <label for="email">Email:</label>
                    <input type="email" name="inEmail" id="inEmail">

                    <label for="data">Data de Nascimento:</label>
                    <input type="date" name="inData" id="in">

                    <label for="contato">Contato:</label>
                    <input type="tel" name="inContato" id="inContato">

                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" rows="10" cols="50"></textarea>

                    <button class="botao" onclick="enviar()">Enviar</button>

                </form>
            </div>
        </div>


    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-section about">
                <h2>Sobre Nós</h2>
                <p>Somos uma empresa dedicada a proporcionar a melhor experiência para nossos clientes. Entre em contato
                    e saiba mais sobre nossos serviços.</p>
            </div>
            <div class="footer-section links">
                <h2>Links Rápidos</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h2>Contato</h2>
                <ul>
                    <li><span>📞</span> (11) 1234-5678</li>
                    <li><span>✉️</span> contato@empresa.com</li>
                    <li><span>📍</span> Rua Exemplo, 123, São Paulo, SP</li>
                </ul>
            </div>
            <div class="footer-section social">
                <h2>Siga-nos</h2>
                <ul>
                    <li><a href="#"><img src="img/instragramheader.png" alt="instragram"></a></li>
                    <li><a href="#"><img src="img/facebookheader.png" alt="facebook"></a></li>
                    <li><a href="#"><img src="img/whatsappheader.png" alt="whatsapp"></a></li>
                    <li><a href="#"><img src="img/youtubeheader.png" alt="youtube"></a></li>
                </ul>
                </header>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Sua Empresa. Todos os direitos reservados.</p>
        </div>
    </footer>

   
</body>

</html>