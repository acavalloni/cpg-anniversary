<?php require('header.php'); 

	$question = $_GET['question'];
	echo "<p class='haut'>Question n°$question</p>";
	
	switch ($question){
    case 1:
	echo "
		<p class='question'>
		Etes vous un pro des internets ? <br /> Question de mega geek, un Kilo-octet contient :
		</p>
		<form id='question' name='reponse' action='reponse' method='post'>
					<li>
					  <input id='1' name='reponse' value='1' type='radio'>
					  <label for='1'>1000 octets</label>
					</li>
					<li>
					  <input id='2' name='reponse' value='2' type='radio'>
					  <label for='2'>1024 octets</label>
					</li>
					<li>
					  <input id='3' name='reponse' value='3' type='radio'>
					  <label for='3'>10^3 octets</label>
					</li>
				</ol>
				<input type='hidden' name='question' value='$question'>
				<input type='submit' value='Valider ma réponse'>
		</form>
		";
        break;
	case 2:
	echo "
		<p class='question'>
		Salut, ça va ?
		</p>
		<form id='question' name='reponse' action='reponse' method='post'>
					<li>
					  <input id='1' name='reponse' value='1' type='radio'>
					  <label for='1'>Oui !</label>
					</li>
					<li>
					  <input id='2' name='reponse' value='2' type='radio'>
					  <label for='2'>Non...</label>
					</li>
					<li>
					  <input id='3' name='reponse' value='3' type='radio'>
					  <label for='3'>Peut-être ?</label>
					</li>
				</ol>
				<input type='hidden' name='question' value='$question'>
				<input type='submit' value='Valider ma réponse'>
		</form>
		";
        break;
    case 3:
	echo "
		<p class='question'>
		Qu’est-ce que le chemin critique d’un projet ?
		</p>
		<form id='question' name='reponse' action='reponse' method='post'>
					<li>
					  <input id='1' name='reponse' value='1' type='radio'>
					  <label for='1'>Là où il faut marcher pour ne pas tomber sur la mère de Benjamin</label>
					</li>
					<li>
					  <input id='2' name='reponse' value='2' type='radio'>
					  <label for='2'>L’ensemble des tâches d’un projet qui, si elles sont impactées, décalent la date de fin du projet</label>
					</li>
					<li>
					  <input id='3' name='reponse' value='3' type='radio'>
					  <label for='3'>L’illumination universelle du projet informatique, telle qu’enseignée par Obi-wan Orselnobi en réunion hebdomadaire</label>
					</li>
				</ol>
				<input type='hidden' name='question' value='$question'>
				<input type='submit' value='Valider ma réponse'>
		</form>
		";
        break;
	case 4:
	echo "
		<p class='question'>
		Brocelia c'est :
		</p>
		<form id='question' name='reponse' action='reponse' method='post'>
					<li>
					  <input id='1' name='reponse' value='1' type='radio'>
					  <label for='1'>La forêt dans Merlin</label>
					</li>
					<li>
					  <input id='2' name='reponse' value='2' type='radio'>
					  <label for='2'>Une marque de lave linge</label>
					</li>
					<li>
					  <input id='3' name='reponse' value='3' type='radio'>
					  <label for='3'>Une web agency</label>
					</li>
				</ol>
				<input type='hidden' name='question' value='$question'>
				<input type='submit' value='Valider ma réponse'>
		</form>
		";
        break;
    case 5:
	echo "
		<p class='question'>
		Qu'elle est l'expression preferée de Benjamin, notre Monsieur Reseaux sociaux ?
		</p>
		<form id='question' name='reponse' action='reponse' method='post'>
					<li>
					  <input id='1' name='reponse' value='1' type='radio'>
					  <label for='1'>Oh, zut alors !</label>
					</li>
					<li>
					  <input id='2' name='reponse' value='2' type='radio'>
					  <label for='2'>Putain de sa mère !</label>
					</li>
					<li>
					  <input id='3' name='reponse' value='3' type='radio'>
					  <label for='3'>Celui qui est prêt à sacrifier un peu de sa liberté pour plus de sécurité ne mérite ni l'une ni l'autre, et finit par perdre les deux.</label>
					</li>
				</ol>
				<input type='hidden' name='question' value='$question'>
				<input type='submit' value='Valider ma réponse'>
		</form>
		";
        break;
    case 6:
	echo "
		<p class='question'>
		Qu'est-ce que fait Benjamin la majorité du temps ?
		</p>
		<form id='question' name='reponse' action='reponse' method='post'>
					<li>
					  <input id='1' name='reponse' value='1' type='radio'>
					  <label for='1'>Rien</label>
					</li>
					<li>
					  <input id='2' name='reponse' value='2' type='radio'>
					  <label for='2'>Il tweet</label>
					</li>
					<li>
					  <input id='3' name='reponse' value='3' type='radio'>
					  <label for='3'>Il téléphone</label>
					</li>
				</ol>
				<input type='hidden' name='question' value='$question'>
				<input type='submit' value='Valider ma réponse'>
		</form>
		";
        break;
	case 7:
	echo "
		<p class='question'>
		L'activité préférée de Kristel est :
		</p>
		<form id='question' name='reponse' action='reponse' method='post'>
					<li>
					  <input id='1' name='reponse' value='1' type='radio'>
					  <label for='1'>Partir en fumer</label>
					</li>
					<li>
					  <input id='2' name='reponse' value='2' type='radio'>
					  <label for='2'>Fumer Anthony</label>
					</li>
					<li>
					  <input id='3' name='reponse' value='3' type='radio'>
					  <label for='3'>Fumer un café</label>
					</li>
				</ol>
				<input type='hidden' name='question' value='$question'>
				<input type='submit' value='Valider ma réponse'>
		</form>
		";
        break;
    case 8:
	echo "
		<p class='question'>
		Etre ou ne pas être ?
		</p>
		<form id='question' name='reponse' action='reponse' method='post'>
					<li>
					  <input id='1' name='reponse' value='1' type='radio'>
					  <label for='1'>0</label>
					</li>
					<li>
					  <input id='2' name='reponse' value='2' type='radio'>
					  <label for='2'>1</label>
					</li>
					<li>
					  <input id='3' name='reponse' value='3' type='radio'>
					  <label for='3'>#valeur</label>
					</li>
				</ol>
				<input type='hidden' name='question' value='$question'>
				<input type='submit' value='Valider ma réponse'>
		</form>
		";
        break;
    case 9:
	echo "
		<p class='question'>
		Que sont Tigerlily et Hootsuite ? 
		</p>
		<form id='question' name='reponse' action='reponse' method='post'>
					<li>
					  <input id='1' name='reponse' value='1' type='radio'>
					  <label for='1'>Des Pokémon</label>
					</li>
					<li>
					  <input id='2' name='reponse' value='2' type='radio'>
					  <label for='2'>Les noms des nouveaux enfants adoptés par le couple Brangelina</label>
					</li>
					<li>
					  <input id='3' name='reponse' value='3' type='radio'>
					  <label for='3'>Des outils de gestion de réseaux sociaux</label>
					</li>
				</ol>
				<input type='hidden' name='question' value='$question'>
				<input type='submit' value='Valider ma réponse'>
		</form>
		";
        break;
    case 10:
	echo "
		<p class='question'>
		Qui est Pixel Cheval Tamer de l’Internet, 1er du nom ?
		</p>
		<form id='question' name='reponse' action='reponse' method='post'>
					<li>
					  <input id='1' name='reponse' value='1' type='radio'>
					  <label for='1'>Ta mère</label>
					</li>
					<li>
					  <input id='2' name='reponse' value='2' type='radio'>
					  <label for='2'>Un Hippocampe</label>
					</li>
					<li>
					  <input id='3' name='reponse' value='3' type='radio'>
					  <label for='3'>Un Poisson</label>
					</li>
					<li>
					  <input id='4' name='reponse' value='4' type='radio'>
					  <label for='4'>Je donne ma langue au Chat</label>
					</li>
				</ol>
				<input type='hidden' name='question' value='$question'>
				<input type='submit' value='Valider ma réponse'>
		</form>
		";
        break;		
	default:
       echo "<p>Ce n'est pas bien d'essayer de tricher :)</p>";
}

require('footer.php'); ?>