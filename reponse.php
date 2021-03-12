<?php require('header.php'); 
	
	$question = $_POST['question'];
	$reponse = $_POST['reponse'];
	
	echo "<p class='haut'>Réponse à la question n°$question</p>";
	
	echo "<p class='question'>";
	switch ($question){
    case 1:
		switch ($reponse){
		case 1:
		echo "C'était presque ça ! Mais non en fait, internet serait mort depuis longtemps si on vous écoutait.";
			$resultat="0";
			break;	
		case 2:
		echo "Tout à fait car 2^10= 1024 octets adressables, même pour des raisons pratiques on dit que 1024 octets = 1 Ko, au lieu de 1.024 Ko ";
			$resultat="1";
			break;	
		case 3:
		echo "Vous et les mathématiques, c'est pas trop ça hein ?";
			$resultat="0";
			break;	
		default:
		echo "<p> Vous connaissez le dicton ? Pas de réponse, mauvaise réponse !</p>";
			$resultat="0";
		}
        break;
    case 2:
		switch ($reponse){
		case 1:
		echo "Bonne réponse, nous on aime bien la bonne humeur !";
			$resultat="1";
			break;	
		case 2:
		echo "Hum, il est tard vous feriez mieux de rentrer...";
			$resultat="0";
			break;	
		case 3:
		echo "Joker ? Bon aller, bonne réponse, parce que c'est vous !";
			$resultat="1";
			break;	
		default:
		echo "<p> Vous connaissez le dicton ? Pas de réponse, mauvaise réponse !</p>";
			$resultat="0";
		}
		break;
    case 3:
		switch ($reponse){
		case 1:
		echo "Nous sommes tous à la rechercher de la mère de Benjamin, rien de critique donc !";
			$resultat="0";
			break;	
		case 2:
		echo "C'est la vrai bonne réponse. Génial, mais pas super fun.";
			$resultat="1";
			break;	
		case 3:
		echo "Bonne cette réponse considérée peut être, car Orselnobi tort n'a jamais.";
			$resultat="1";
			break;
		default:
		echo "<p> Vous connaissez le dicton ? Pas de réponse, mauvaise réponse !</p>";
			$resultat="0";			
		}
        break;
    case 4:
		switch ($reponse){
		case 1:
		echo "L'abus de TV peut vraiment nuire à la santé visiblement.";
			$resultat="0";
			break;	
		case 2:
		echo "D'ailleurs, nous travaillons aussi avec Whirlpool... Non mais.";
			$resultat="0";
			break;	
		case 3:
		echo "Oui ! Ce sont nos meilleurs amis dans la terrible jungle du web...";
			$resultat="1";
			break;	
		default:
		echo "<p> Vous connaissez le dicton ? Pas de réponse, mauvaise réponse !</p>";
			$resultat="0";
		}
		break;
    case 5:
		switch ($reponse){
		case 1:
		echo "Vous connaissez le personnage ? Non, et ça se voit !";
			$resultat="0";
			break;	
		case 2:
		echo "Oui... et... voilà, ça se passe de commentaire.";
			$resultat="1";
			break;	
		case 3:
		echo "Ce n'est pas le bon benjamin, mais au moins vous avez de la culture...";
			$resultat="0";
			break;
		default:
		echo "<p> Vous connaissez le dicton ? Pas de réponse, mauvaise réponse !</p>";
			$resultat="0";			
		}
        break;
    case 6:
		switch ($reponse){
		case 1:
		echo "Très bonne réponse, inventer des blagues 'Ta mère elle...' n'est pas consideré comme une activité.";
			$resultat="1";
			break;	
		case 2:
		echo "Cela revient en quelque sorte à ne rien faire, mais c'est une bonne excuse pour lui.";
			$resultat="1";
			break;	
		case 3:
		echo "Cela reviendrait à dire qu'il travail pour de vrai, mauvaise réponse donc.";
			$resultat="0";
			break;	
		default:
		echo "<p> Vous connaissez le dicton ? Pas de réponse, mauvaise réponse !</p>";
			$resultat="0";
		}
		break;
    case 7:
		switch ($reponse){
		case 1:
		echo "Mobistep, partenaire de votre depression au quotidien depuis 2008";
			$resultat="1";
			break;	
		case 2:
		echo "Cela fait parti de ses petits péchés mignons, mais Anthony aime souffrir donc ce n'est pas vraiment un problème.";
			$resultat="1";
			break;	
		case 3:
		echo "Tout à fait, fumer un café, elle adore ça, et elle ne s'en cache pas.";
			$resultat="1";
			break;	
		default:
		echo "<p> Vous connaissez le dicton ? Pas de réponse, mauvaise réponse !</p>";
			$resultat="0";
		}
        break;
    case 8:
		switch ($reponse){
		case 1:
		echo "False. Fatal error";
			$resultat="0";
			break;	
		case 2:
		echo "True. Succes";
			$resultat="1";
			break;	
		case 3:
		echo "if(#valeur == 1){true}else{false}; <br /> Compris ?";
			$resultat="0";
			break;	
		default:
		echo "<p> Vous connaissez le dicton ? Pas de réponse, mauvaise réponse !</p>";
			$resultat="0";
		}
		break;
    case 9:
		switch ($reponse){
		case 1:
		echo "On aurait pu le croire, mais non en fait, rien à voir.";
			$resultat="0";
			break;	
		case 2:
		echo "Même en étant extravagant, vous appelleriez vraiment vos enfants comme ça vous ?";
			$resultat="0";
			break;	
		case 3:
		echo "Ringo ! Heu, Bingo !";
			$resultat="1";
			break;
		default:
		echo "<p> Vous connaissez le dicton ? Pas de réponse, mauvaise réponse !</p>";
			$resultat="0";			
		}
        break;
    case 10:
		switch ($reponse){
		case 1:
		echo "Sincèrement désolés :(";
			$resultat="1";
			break;	
		case 2:
		echo "Cheval… Hippocampe… tout ça tout ça… <br />Tu fais un concours de blagues pourrites avec Anthony ?";
			$resultat="0";
			break;	
		case 3:
		echo "Victoire !";
			$resultat="1";
			break;
		case 4:
		echo "Au chat qui mange le poisson ?";
			$resultat="0";
			break;
		default:
		echo "<p> Vous connaissez le dicton ? Pas de réponse, mauvaise réponse !</p>";
			$resultat="0";			
		}
        break;
	default:
		echo "<p>Ce n'est pas bien d'essayer de tricher :)</p>";
	}
	
	echo "</p>";
	$reponse_aleatoire = rand(1,5);
		
	if($resultat == '1'){
		echo "<p class='winner'>";
		switch ($reponse_aleatoire) {
			case 1:
				echo "Allez donc trinquer à votre connaissance des internets !";
				break;
			case 2:
				echo "Allez chercher un petit bout de saucisson, pour la gloire.";
				break;
			case 3:
				echo "Le service Marketing va vous offrir de beaux goodies !";
				break;
			case 4:
				echo "Moi, Kristel Rio, je m'avoue vaincue par votre savoir sans borne.";
				break;
			case 5:
				echo "Vous avez votre ticket d'entrée pour la cellule des internets !";
				break;
		}
		echo "<img src='images/winner-$reponse_aleatoire.jpg' alt='Winner !!'/>";
	}else{
		echo "<p class='loser'>";
		switch ($reponse_aleatoire) {
			case 1:
				echo "Samuel offre des calins, ça fait du bien un peu de réconfort.";
				break;
			case 2:
				echo "Vous pouvez toujours réessayer, on ne sait jamais.";
				break;
			case 3:
				echo "Dommage, pas de champagne pour vous !";
				break;
			case 4:
				echo "Merci de venir réclamer votre bonnet d'âne...";
				break;
			case 5:
				echo "Vous avez merité votre place sur notre mur des lamentables !";
				break;
		}
		echo "<img src='images/loser-$reponse_aleatoire.jpg' alt='Loser !!'/>";
		echo "</p>";
	}
	echo "<form id='question' name='reponse' action='recommencer' method='post'><input type='submit' value='Encore une question !'></form>";

require('footer.php'); ?>