<?php 
    session_start();
    if ($_POST) {
        include ("includes/login.php");    
    }

    include ("includes/header.php");
?>
        <div>
            <main>
                <div class="row">
                    <div class="col embed-responsive-item embed-responsive-16by9 d-flex bd-highlight">
                        <div class="w-50 h-auto">
                            <img src="./img/LOOKBOOK/IMG_5449.jpg" alt="" class="img-fluid embed-responsive-item flex-fill bd-highlight">
                        </div>
                        <div class="w-50 h-auto">
                            <img src="./img/LOOKBOOK/IMG_5361.jpg" alt="" class="img-fluid embed-responsive-item flex-fill bd-highlight">
                        </div>
                    </div>
                </div>
            </main>
        </div>
<?php 

include ("includes/footer.php");

?>