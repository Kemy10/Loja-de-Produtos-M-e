<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Produtos de Limpeza</title>
</head>
<body>

    <section>
        <header>
            <img src="icones/logo.png" alt="logo" class="logo">
            <div class="tudo">
                <div class="icones">
                    <a href="./ajuda/ajuda.php"><img class="fotos" src="./icones/ajuda.png" alt="carrinho"> </a>
                    <p class="letra">Ajuda</p>
                </div>

                <div class="icones">
                    <a href="./conta/conta.php"><img class="fotos" src="./icones/usuario.png" alt="carrinho">
                    </a>
                    <p class="letra">Conta</p>
                </div>

                <div class="icones">
                    <a href="favorito"> <img class="fotos" src="./icones/favorito.png" alt="carrinho"></a>
                    <p class="letra">Favorito</p>
                </div>

                <div class="icones">
                    <a href="carrinho"><img class="fotos" src="./icones/carinho.png" alt="carrinho"></a>
                    <p class="letra">Carrinho</p>
                </div>
            </div>
        </header>
    </section>


    <section class="slider">

        <div class="slider-content">
            <input type="radio" name="btn-radio" id="radio1">
            <input type="radio" name="btn-radio" id="radio2">
            <input type="radio" name="btn-radio" id="radio3">


            <div class="slide-box primeiro">

                <img src="./slaides/slaide1.png" alt="slide 1">
            </div>

            <div class="slide-box">
                <img src="./slaides/slaide2.png" alt="slide 2">
            </div>

            <div class="slide-box">
                <img src="./slaides/slaide3.png" alt="slide3">
            </div>

            <div class="slide-box">
                <img src="./slaides/slaide4.png" alt="slide3">
            </div>

            <div class="nav-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>

            <div class="nav-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>
        </div>

    </section>

    <section>
        <header>
            <div class="tipos">
                <a href="roupas/roupas.php"> <img src="tipos/roupas.webp" alt="" class="produtos"></a>
                <a href=""> <img src="tipos/limpeza-pesada.webp" alt="" class="produtos"></a>
                <a href=""> <img src="tipos/limpadores.webp" alt="" class="produtos"> </a>
                <a href=""> <img src="tipos/cozinha.webp" alt="" class="produtos"></a>
                <a href=""> <img src="tipos/banheiro.webp" alt="" class="produtos"></a>
            </div>
        </header>
    </section>


</body>
<script src="./javaScript/Script.java"></script>

</html>