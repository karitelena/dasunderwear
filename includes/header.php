<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DAS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container p-5 w-100 h-auto">
        <div id="header">
            <div class="mainMenu">
                <div class="logo">
                    <a href="index.php" title="DASUNDERWEAR"><img src="./img/LOGO OFICIAL PRETO.png" width="300" height="auto" title="DASUNDERWEAR" alt="DASUNDERWEAR" data-no-retina /></a>
                </div>
                <div class="navMenu">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">SHOP</a>
                        </li>
                        <li class="nav-item">
                            <div id="myEnternav" class="enternav nav-item">
                                <form action="POST">
                                    <a href="javascript:void(0)" class="closebtnEnter" onclick="closeEnternav()">&times;</a>
                                        <h3 class="text-left p-2" >LOGIN</h3>
                                        <div class="form-group">
                                            <label for="email">EMAIL </label>
                                            <input name="email" type="email" class="form-control text-dark" id="email" style="text-transform:uppercase" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="senha">SENHA</label>
                                            <input name="senha" type="password" class="form-control text-dark" id="senha" required>
                                            <a href="cadastro.php" id="naoCadastrado" class="form-text p-2">AINDA NÃO É CADASTRADO?</a>
                                         </div>
                                        <button type="submit" style="height: 400px" class="btn btn-block text-left">ENTER ;)</button>
                                </form>
                            </div>
                            <span class="nav-link enternavSpan" style="font-size:13px;cursor:pointer" onclick="openEnternav()">ENTER</span>
                            <script>
                                function openEnternav() {
                                    document.getElementById("myEnternav").style.width = "350px";
                                }
                                
                                function closeEnternav() {
                                    document.getElementById("myEnternav").style.width = "0";
                                }
                            </script> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CART(0)</a>
                        </li>
                        <li>
                            <div id="mySidenav" class="sidenav nav-item">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                    <a href="sobre.php">SOBRE</a>
                                    <a href="arquivos.php">ARQUIVOS</a>
                                    <a href="#">TERMOS DE USO</a>
                                    <a href="contato.php">CONTATO</a>
                                    <a href="https://www.instagram.com/das_underwear/" target="_blank">INSTAGRAM</a>
                            </div>
                            <span class="nav-link sidenavSpan" style="font-size:13px;cursor:pointer" onclick="openNav()">MENU</span>
                            <script>
                                    function openNav() {
                                      document.getElementById("mySidenav").style.width = "350px";
                                    }
                                    
                                    function closeNav() {
                                      document.getElementById("mySidenav").style.width = "0";
                                    }
                            </script>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="colunmMenu">
                <form class="search-container">
                    <input type="text" style="text-transform:uppercase" id="search-bar" placeholder="...SEARCH">
                    <a href="#"></a>
                </form>
            </div>
        </div>
