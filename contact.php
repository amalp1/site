<?php

if( isset($_POST["envoyer"]) )
{
	
	
	
	//DANS LE CAS OU TOUS LES CHAMPS SONT BIEN REMPLIS
$user = "root"; 
$passwd = ""; 
$db = "site_bdd";
 $cnx = new PDO("mysql:host=localhost;dbname=".$db,$user,$passwd); 
	 	$insertion = $cnx->prepare("INSERT INTO form(`nom`, `email`, `specialite`, `msg`) VALUES(?,?,?,?)");
		$insertion->execute(array($_POST["nom"],$_POST["email"],$_POST["specialite"],$_POST["msg"]));
		?>
		<script language="javascript">
alert("Message envoyé!");
</script>
		
<?php	 }
		

 
SortieSi:
?>


<!DOCTYPE HTML>
<!--
	ZeroFour 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>StageMa.com</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<body class="right-sidebar">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
							<header id="header">
									<div class="inner">
									
										<!-- Logo -->
											<h1><a href="#" id="logo">StageMa.Com</a></h1>
										
										<!-- Nav -->
											<nav id="nav">
												<ul>
													<li class="current_page_item"><a href="acceuil.html">Accueil</a></li>
													<li>
														<span></span>
														<li><a href="presentation.html">Présentation</a></li>
														<ul>
														
															<li><a href="#"></a></li>
															<li><a href="#"></a></li>
															<li>
																<span></span>
																<ul>
																	<li><a href="#"></a></li>
																	<li><a href="#"></a></li>
																	<li><a href="#"></a></li>
																	<li><a href="#"></a></li>
																</ul>
															</li>
															<li><a href="#"></a></li>
														</ul>
													</li>
													
													<li><a href="proposition.html">Nos propositions</a></li>
													<li><a href="#">Contact</a></li>
													<li><a href="acceuil.html"></a></li>
												</ul>
											</nav>
									
									</div>
								</header>

						</div>
					</div>
				</div>
			</div>
			






<center>

	<h1>Envoyer Nous un  Message:</h1>
	<form action="#" method="post">
		<fieldset>
		<table><tr><td>
			<label for="name"> Nom complet:</label></td>
		<td>	<input type="text"  name="nom" placeholder="Entrer votre nom complet" /><br></td></tr>
	<tr>	<td>	<label for="email"> Email:</label></td>
			<td><input type="text"  name="email" placeholder="Entrer votre adresse email" /><br></td></tr>
			
			<tr>	<td><label for="email"> Spécialité:</label></td>
			<td><input type="text" name="specialite" placeholder="Entrer votre specialité" /></td></tr>
			<tr>	<td><label for="message">Votre Message:</label></td>
		
<td><textarea name="msg" placeholder="votre message ici!!"></textarea></td></tr>
			<br>
<tr><td  colspan="2"><input type="Submit" name="envoyer" value="Envoyer"/></td></tr>
</table>
			</form>


<center>
</body>
</html>
		
		
</body>
</html>