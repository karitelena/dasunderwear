<?php 
$usuariosJson  = file_get_contents('./includes/usuarios.json');

        $usuariosArray = json_decode($usuariosJson,true);

        foreach ($usuariosArray as $usuario) {
            if($_POST['email'] == $usuario['email'] && password_verify($_POST['senha'], $usuario['senha'])) {
                $_SESSION['usuario'] = $usuario;
                return header('Location: index.php');
            } 
        } 
        $erro = 'Usuário e senha não coincidem';
?>