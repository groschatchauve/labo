<!doctype html>
<html lang='fr'>

<head>
<title>Labo</title>
</head>

<style>
*{
	margin : 0;
	padding : 0;
}

body{
	background-image : url('colors.jpg');
	background-size : 100%;
	width : 400px;
	margin : auto;
	border-left : 1px solid black;
	border-right : 1px solid black;
}

header{
	background : dodgerblue;
	border-bottom : 1px dashed black;
}

header>nav{
	display : flex;
	justify-content: center;
}
header>nav>ul{
	display : flex;
	list-style : none;
}

header>nav>ul>li{
	flex : 1 1 100%;
	padding : 1em;
}

header>nav>ul>li>a{
	text-decoration : none;
	color : white;
}

section{
	background : grey;
}

section>figure{
	display : flex;
	flex-direction: column;
	justify-content: center;	
	border-bottom : 1px dashed black;
}

section>figure>img{
	margin: auto;
	align-self : center;
	margin : 0.5em;
	padding : 0.5em;
}

section>figure>figcaption{
	background : white;
	margin: auto;
	align-self : center;
	margin : 0.5em;
	padding : 0.5em;
}

footer{
	background : dodgerblue;
}

footer>em{
	display : flex;
	justify-content : center;
}

</style>

<body>

<header>
	<nav>
		<ul>
			<li><a href='.'>Verrerie</a></li>
			<li><a href='.'>Divers</a></li>
		</ul>
	</nav>
</header>

<section id='verrerie'>

<figure>
  <img src="becher.jpg" alt="" />
  <figcaption>Bécher</figcaption>
</figure>

<figure>
  <img src="erlenmeyer.jpg" alt="" />
  <figcaption>Erlen Meyer</figcaption>
</figure>

<figure>
  <img src="tubeaessai.jpg" alt="" />
  <figcaption>Tube à Essai</figcaption>
</figure>

<figure>
  <img src="fiole.jpg" alt="" />
  <figcaption>Fiole</figcaption>
</figure>

<figure>
  <img src="ampoule.jpg" alt="" />
  <figcaption>Ampoule</figcaption>
</figure>

<figure>
  <img src="balon.jpg" alt="" />
  <figcaption>Balon</figcaption>
</figure>

<figure>
  <img src="burette.jpg" alt="" />
  <figcaption>Burette</figcaption>
</figure>

<figure>
  <img src="entonnoir.jpg" alt="" />
  <figcaption>Entonnoir</figcaption>
</figure>

<figure>
  <img src="eprouvette.jpg" alt="" />
  <figcaption>Eprouvette</figcaption>
</figure>

<figure>
  <img src="flacon.jpg" alt="" />
  <figcaption>Flacon</figcaption>
</figure>

<figure>
  <img src="propipette.jpg" alt="" />
  <figcaption>Propipette</figcaption>
</figure>

<figure>
  <img src="pipettegraduee.jpg" alt="" />
  <figcaption>Pipette graduée</figcaption>
</figure>

<figure>
  <img src="pipettejaugee.jpg" alt="" />
  <figcaption>Pipette jaugée</figcaption>
</figure>

<figure>
  <img src="pisette.jpg" alt="" />
  <figcaption>Pisette</figcaption>
</figure>

<figure>
  <img src="verreapied.jpg" alt="" />
  <figcaption>Verre à Pied</figcaption>
</figure>

</section>

<section id = 'divers'>
<figure>
  <img src="verreapied.jpg" alt="" />
  <figcaption>Verre à Pied</figcaption>
</figure>
</section>

<footer>
<em>All rights reserved - Valentin Lesieur</em>
</footer>

</body>

</html>