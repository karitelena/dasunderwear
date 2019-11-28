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
                    <a href="index.html" title="DASUNDERWEAR"><img src="./img/das normal branco (1).png" width="300" height="auto" title="DASUNDERWEAR" alt="DASUNDERWEAR" data-no-retina /></a>
                </div>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ENTER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CART(0)</a>
                    </li>
                    <li>
                        <div id="mySidenav" class="sidenav nav-item">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a href="lookbook.html">LOOKBOOK</a>
                                <a href="#">ARQUIVOS</a>
                                <a href="sobre.html">SOBRE</a>
                                <a href="contato.html">CONTATO</a>
                                <a href="#">TERMOS DE USO</a>
                                <a href="#">NEWSLETTER</a>
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
            <div class="colunmMenu">
                <form class="search-container">
                    <input type="text" style="text-transform:uppercase" id="search-bar" placeholder="...SEARCH">
                    <a href="#"></a>
                </form>
            </div>
        </div>
        <div>
            <main class="enter" >
                <section class="row">
                    <form class="col" method="POST" enctype="multipart/form-data">
                        <h1 class="p-3 mt-82 ml-1000">LOGIN</h1>
                        <div class="form-group">
                            <label for="nome">NOME</label>
                            <input name="nome" type="text" class="form-control" id="nome" style="text-transform:uppercase" required>
                        
                        </div>
                        <div class="form-group">
                            <label for="email">EMAIL </label>
                            <input name="email" type="email" class="form-control" id="email" style="text-transform:uppercase" required>
                        </div>
                        <div class="form-group">
                            <label for="senha">SENHA</label>
                            <input name="senha" type="password" class="form-control" id="senha" required>
                            <a href="login.php" id="jaCadastrado" class="form-text text-muted">Já é cadastrado? Faça o login!</a>
                        </div>
                        
                            <button type="submit" class="btn btn-outline-light btn-block">ENTER</button>
                    </form>
                </section>
                <section class="row" >
                    <form class="col" method="POST" enctype="multipart/form-data">
                        <h1 class="p-3 mt-82 ml-1000">CADASTRE-SE</h1>
                        <div class="form-group">
                            <label for="nome">NOME</label>
                            <input name="nome" type="text" class="form-control" id="nome" style="text-transform:uppercase" required>
                        
                        </div>
                        <div class="form-group">
                            <label for="email">EMAIL </label>
                            <input name="email" type="email" class="form-control" id="email" style="text-transform:uppercase" required>
                        </div>
                        <div class="form-group">
                            <label for="senha">SENHA</label>
                            <input name="senha" type="password" class="form-control" id="senha" required>
                            <a href="login.php" id="jaCadastrado" class="form-text text-muted">Já é cadastrado? Faça o login!</a>
                        </div>
                        
                            <button type="submit" class="btn btn-outline-light btn-block">ENTER</button>
                    </form>
                </section>
            </main>
        </div>
        <div>
            <footer>
                <div>
                    <nav class="nav d-flex justify-content-between">
                        <a class="nav-link" href="http://dasunderwear.com">@ 2019 DAS UNDERWEAR</a>
                    </nav>
                </div>    
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>