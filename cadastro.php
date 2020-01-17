<?php 
    session_start();
    if ($_POST) {
        include ("includes/login.php");    
    }

    include ("includes/header.php");
?>
    <div>
        <main>
            <div class="cadastro">
                <section>
                    <form method="POST" enctype="multipart/form-data">
                        <h3 class="p-3 mt-82 text-right">CADASTRE-SE</h3>
                        <div class="form-group">
                            <label for="nome">NOME</label>
                            <input name="nome" type="text" class="form-control" id="nome" style="text-transform:uppercase"> 
                        </div>
                        <div class="form-group">
                            <label for="email">EMAIL </label>
                            <input name="email" type="email" class="form-control" id="email" style="text-transform:uppercase">
                        </div>
                        <div class="form-group">
                            <label for="senha">SENHA</label>
                            <input name="senha" type="password" class="form-control" id="senha">  
                        </div>
                        <button type="submit" class="btn btn-block">ENTER</button>
                    </form>
                </section>
            </div>
        </main>
    </div>
<?php 

include ("includes/footer.php");

?>