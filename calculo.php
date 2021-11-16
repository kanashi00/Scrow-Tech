<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ana Rodrigues - @ana.paulahah">
    <meta name="description" content="Embalagens de Papelão - Auxilio no desenvolvimento e os limites fisico das caixas">
    <meta name="keywords" content="calculadora,desenvolvimento,dimensionamento,embalagens,empilhamento,resistencia,compressao,caixas,papelao">
    <link rel="stylesheet" href="stylesheet_resp.css">
    <link rel="icon" type="image/ico" href="IMG/logo-icon.ico">
    <title>Cálculo de empilhamento - Scrow Tech</title>
</head>
    <body>
        <header id="cabeca">
            <a href="index.html" class="blue">
                <img src="IMG/logo-name.png" alt="Logo Scrow - Empresa de Tecnologia" class="logo-name"><p class="logo-desc">&#9679; Empresa de tecnologia</p>
            </a>
            <div>
                <a href="prov.html" class="blue">Sobre</a>
                <a href="prov.html" class="blue">Teoria</a>
                <a href="prov.html" class="blue">Contato</a>

            </div>
        </header>
        <main>
            <section id="titu">
                <img src="./IMG/logo-me.png" alt="Logo Scrow" class="logo">
                <h1>Cálculo do empilhamento máximo possivel para embalagens de papelão</h1>
            </section>
            <section class="box">
            <div class="emp-resp">
                <p class="txt">
                    <?php 
                    $res_rc = isset($_GET["rc"])?$_GET["rc"]:"Resultado do teste de compressão não foi especificado";
                    /*$rc = str_replace(",",".",$_GET["rc"]);*/
                    $m = isset($_GET["m"])?$_GET["m"]:"Resultado do teste de compressão não foi especificado";
                    //$m = str_replace(",",".",$m);
                    $umi = $_GET["umi"];
                    $estq = $_GET["estq"];
                    $manu = $_GET["manu"];
                    $prod = $_GET["prod"];
                    $empilha = $_GET["emp"];

                    //complementando minha respota - deixando bonitinha
                    if ($prod==1.3) {
                        $folga = "sem folga";
                    }
                    else {
                        $folga = "com folga";
                    }

                    if ($empilha==0.8) {
                        $empi = "cruzado";
                    }
                    else {
                        $empi = "colunar";
                    }

                    //logica-calculo
                    $irc = $umi*$estq*$manu*$prod*$empilha;
                    $camadas = ($res_rc*$irc)/$m;
                    //vai sair na tela
                    echo "Sua embalagem pode aguentar até <b> ".floor($camadas)/*aredondando para o menor valor*/." camadas</b> com empilhamento do tipo $empi e embalagens $folga interna";
                    ?> 
                    </p>
                <a href="index.html" class="link"><button class="bot">NOVO CALCULO</button></a>
                <a href="javascript:history.go(-1)" class="link"><button class="bot">VOLTAR</button></a>
            </div>
            </section>
            <p id="texto-embaixo">Quer aprender um pouco melhor sobre o Cálculo? Vá até a aba <a href="teoria.html">Teoria</a> para sanar suas dúvidas</p>
            <div id="anuncio">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4202708516404742"
                 crossorigin="anonymous"></script>
            <!-- anuncio-horizontal -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-4202708516404742"
                 data-ad-slot="7062619333"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
            <!-- teoria rapida -->
            <section class="text-embaixo" id="teoria">
            <h3><strong>Teoria Resumida:</strong></br></h3>
            <p>Existem vários fatores que podem prejudicar seus projetos, mas o mais comum é a caixa se deformar no empilhamento. Então para manter a segurança, a qualidade e custo, fazemos o dimensionamento e planejamento das embalagens e o quanto elas devem aguentar de peso.</p>

            <p><strong>Cálculo de Resistência a Compressão:</strong> O cálculo consiste em a partir do peso e esforço total que a embalagem irá sofrer, estipular, levando em consideração os fatores externos, de quanto deverá ser a resistencia da caixa para aguentar tais condições, evitando assim a compra de uma embalagem de resistência baixa para uso.</p>
            
            <p><strong>Cálculo de Empilhamento Maxímo Possível:</strong> O cálculo consiste em estipular o máximo de empilhamento possível de acordo com a resistencia a compressão e os fatores externos estipulados. Nesse programa, vamos testando continuamente o peso do empilhamento até atingir o maxímo de resistencia que a embalagem aguentaria, e partir disso descobrir o empilhamento que aquela embalagem aguenta</p>

            </br><p>
            Uma parte importante sobre a embalagens é o ambiente em que estão sendo usadas. De forma que alguns fatores podem afetar a qualidade do material.
                <ul>
                    <li>Umidade relativa do AR;</li>
                    <li>Tempo de estocagem;</li>
                    <li>Forma de empilhamento;</li>
                    <li>Tipo de manuseio/transporte;</li>
                    <li>Características do produto</li>
                </ul>
            <p>O IRC (Índice de Resistência a compressão) é o nosso fator de segurança. Com esse fator conseguimos ter a margem de erro e  perda de material da embalagem. Sendo assim, descobrimos o empilhamento máximo permitido ou qual deverá  ser a resistência do material para aguenta x camadas de empilhamento.
            Abaixo segue uma breve explicação sobre o fator de segurança estipulado pelos fatores externos, que danificam a materia prima.</p>
            </br><img src="IMG/Tabela.svg" alt="tabela explicativa" id="tab"></br>
            </br></p>
            <h3><strong>Algumas Explicações das Definições</strong></h3>
            <h4>Número de empilhamento</h4>
            <p>A imagem a segui detalha como é leado em consideração a contagem de camadas</p>
            <img src="IMG/CAMADAS.svg" alt="detalhe-camadas">
            <h4>Tipo de empilhamento</h4>
            <img src="IMG/EMP-COLUNAR.svg" alt="empilhamento-colunar"><br>
            <img src="IMG/EMP-CRUZADO.svg" alt="empilhamento-cruzado">
            <nav><!--anuncio-->
                <div>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4202708516404742"
                    crossorigin="anonymous"></script>
                        <!-- Anuncios-lateral -->
                    <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-4202708516404742"
                    data-ad-slot="1867801272"
                    data-ad-format="auto"
                    data-full-width-responsive="true"></ins>
                    <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                     </script>
                </div>
                <div>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4202708516404742"
                    crossorigin="anonymous"></script>
                    <!-- Anuncios-lateral -->
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-4202708516404742"
                        data-ad-slot="1867801272"
                        data-ad-format="auto"
                        data-full-width-responsive="true"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </nav>
            </section>
        </main>
        
    </body>
</html>
        </main>
        
    </body>
</html>