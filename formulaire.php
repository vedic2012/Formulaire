<?php
if{
(server["REQUEST_METHODE"]=="POST")
nom = htmlspecialchars(_POST['nom']);
prenom = htmlspecialchars(_POST['prenom']);
number = htmlspecialchars(_POST['number']);
mois = htmlspecialchars(_POST['mois']);
année = htmlspecialchars(_POST['année']);
nationalitée = htmlspecialchars(_POST('nationalitée'));
residence = htmlspecialchars(_POST['residence']);
email = htmlspecialchars(_POST['email']);
numero = htmlspecialchars(_POST['numero']);
echo "Bienvenu MR".nom. "<br>"
}
?>