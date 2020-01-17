<?php 
    session_start();
    if ($_POST) {
        include ("includes/login.php");    
    }

    include ("includes/header.php");
?>
     <div>
        <main>
            <h3 class="p-3 mt-82 text-right">SHOP</h3>
                <div class="shop">
                    <div class=" d-flex flex-wrap justify-content-center">
                        <a href="#" class="p-3">
                            <img alt="" class="media__image" src="./img/PRODUTO/frente.jpg" width="350"height="auto"/>
                            <div class="d-flex justify-content-center mt-3">
                                <h4>TOP</h4>
                                
                                <h4>R$115,00</h4>
                            </div>
                        </a>
                        <a href="#" class="p-3">
                            <img alt="" class="media__image" src="./img/PRODUTO/lado.jpg" width="350"height="auto" />
                            <div class="d-flex justify-content-center mt-3">
                                <h4>BODY</h4>
                                
                                <h4>R$115,00</h4>
                            </div>
                        </a>
                        <a href="#" class="p-3">
                            <img alt="" class="media__image" src="./img/PRODUTO/tudo.jpg" width="350"height="auto" />
                            <div class="d-flex justify-content-center mt-3">
                                <h4>TESTE</h4>
                                
                                <h4>R$115,00</h4>
                            </div>
                        </a>
                        <a href="#" class="p-3">
                            <img alt="" class="media__image" src="./img/PRODUTO/costas.jpg" width="350"height="auto" />
                            <div class="d-flex justify-content-center mt-3">
                                <h4>TESTE</h4>
                                
                                <h4>R$115,00</h4>
                            </div>
                        </a>
                        <a href="#" class="p-3">
                            <img alt="" class="media__image" src="./img/PRODUTO/frente2.jpg" width="350"height="auto" />
                            <div class="d-flex justify-content-center mt-3">
                                <h4>TESTE</h4>
                                
                                <h4>R$115,00</h4>
                            </div>
                        </a>
                        <a href="#" class="p-3">
                            <img alt="" class="media__image" src="./img/PRODUTO/tudo2.jpg" width="350"height="auto" />
                            <div class="d-flex justify-content-center mt-3">
                                <h4>TESTE</h4>
                                
                                <h4>R$115,00</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </main>
        </div>
<?php 

include ("includes/footer.php");

?>