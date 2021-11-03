<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    $rcphp = isset($_GET["rc"])?$_GET["rc"]:"Resultado do teste de compressão não foi especificado";
                    /*$rc = str_replace(",",".",$_GET["rc"]);*/
                    $m = isset($_GET["m"])?$_GET["m"]:"Resultado do teste de compressão não foi especificado";
                    //$m = str_replace(",",".",$m);
                    $umi = $_GET["umi"];
                    $estq = $_GET["estq"];
                    $manu = $_GET["manu"];
                    $prod = $_GET["prod"];
                    $emp = $_GET["emp"];

                    //complementando minha respota - deixando bonitinha
                    if ($prod==1.3) {
                        $folga = "sem folga";
                    }
                    else {
                        $folga = "com folga";
                    }

                    if ($emp==0.8) {
                        $empi = "cruzado";
                    }
                    else {
                        $empi = "colunar";
                    }

                    //logica-calculo
                    $irc = $umi*$estq*$manu*$prod*$emp;
                    $res=0;
                    $n=0;

                    while ($rcphp>=$res) {
                        $res = ($n*$m)/$irc;
                        $n++;
                    }

                    //vai sair na tela
                    echo "Sua embalagem pode aguentar até <b>$n camadas</b> com empilhamento do tipo $empi e embalagens $folga interna";
                    ?> 
                    </p>
                <button><a href="index.html">NOVO CALCULO</a></button>
                <button><a href="javascript:history.go(-1)">VOLTAR</a></button>
            </div>
            </section>
            <p id="texto-embaixo">Quer aprender um pouco melhor sobre o Cálculo? Vá até a aba <a href="teoria.html">Teoria</a> para sanar suas dúvidas</p>
        </main>
        
    </body>
</html>