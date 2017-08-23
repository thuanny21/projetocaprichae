<?php 
  $email = $_POST['email'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
  $connect = mysql_connect('localhost','email','senha');
  $db = mysql_select_db('caprichae');
    if (isset($entrar)) {
            
      $verifica = mysql_query("SELECT * FROM cliente inner join profissional WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('email e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("email",$email);
          header("Location:index.php");
        }
    }
?>


<?php 
$conexao = mysql_connect("localhost", "email", "senha") or print (mysql_error()); 
print "Conexão OK!"; 
mysql_close($conexao); 
?>