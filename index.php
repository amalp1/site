<?php 
if (isset($_POST["me_connecter"])){
if (($_POST["loginEmail"]=="amalch11@gmail.com")&&($_POST["password"]=="123456")){

header("location:acceuil.html");

}
else ?>
<script language="javascript">
alert("Mot de passe ou email erroné");
</script>
<?php
}
 ?>
<style type="text/css">
li {
  font-family: Verdana, Arial, Helvetica, Geneva, sans-serif;
  font-size: 100%;
  color: black;
  display: list-item;
  list-style-image: url(puce.png);
}
</style>

       <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Connexion</title>
        
        <!-- Our CSS stylesheet file -->
     <!--  <link rel="stylesheet" href="assets/css/styles.css" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		
    </head>
    
    <body bgcolor="black">
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<center>
	<form action="#" method="post">
<table border="0">

<tr>
<td bgcolor="white"><span class="plop"><font face="comic sans ms"><b>Login</b></font><font color="red"> * </font></span></td>
<td><input type="text" id="login" name="loginEmail"/></td></tr>
<tr>
<td  bgcolor="white"><span class="plop"><font face="comic sans ms"><b>Votre mot de passe:</b></font><font color="red"> * </font></span></td>
<td><input type="password" id="password" name="password"/></td></tr>
<tr><td colspan="2" align="center">
<input type="submit" name="me_connecter"  value="Go"/>
</td>
</tr>
</table>
</form> 

</fieldset>	
</center>

        <footer>
	        <h2><i>StageMa.Com</i> Votre site de stage marocain de la faculté polydisciplinaire de Tétouan.</h2>
            <a class="tzine" href="http://tutorialzine.com/2012/02/apple-like-login-form/"> <i><b></b></i> </a>
        </footer>
        
        <!-- JavaScript includes -->
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="assets/js/script.js"></script>

        <!-- BSA AdPacks code. Please ignore and remove.--> 
        <script src="http://cdn.tutorialzine.com/misc/adPacks/v1.js" async></script>
    
    </body>
</html>

