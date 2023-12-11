
/**
 * Rechercher des offres
 *
 * @author Emeline
 *
 * @return void
 */

function rechercherOffres() {
    // Ces variables récupèrent les éléments de recherche
    var nom = document.getElementById('nom').value;
    var domaine = document.getElementById('domaine').value;
    var mission = document.getElementById("mission").value;
    var nbEtudiant = document.getElementById('nbEtudiant').value;

    console.log("reussis");

    var apiUrl = '../Controller/ControllerRechercherOffre.php?' +
        'nom=' + nom +
        '&domaine=' + domaine +
        '&mission=' + mission +
        '&nbEtudiant=' + (nbEtudiant !== '' ? parseInt(nbEtudiant) : '');

    var xhr = new XMLHttpRequest();
    xhr.open('GET', apiUrl, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                console.log("Réponse du serveur : " + xhr.responseText);
                try {
                    var resultats = JSON.parse(xhr.responseText);

                    if (resultats.length > 0) {
                        var resultatsHTML = '<form id="ajoutEtudiantForm" action="../Controller/ControllerAjoutEtudiantOffre.php" method="post"><ul>';

                        resultats.forEach(function (offre) {
                            var offreHTML = '<li class="offre">';
                            offreHTML += 'Nom : ' + (offre.nom || '') + '<br>';
                            offreHTML += 'Domaine : ' + (offre.domaine || '') + '<br>';
                            offreHTML += 'Missions : ' + (offre.mission || '') + '<br>';
                            offreHTML += 'Nombre d\'étudiants recherchés : ' + (offre.nbetudiant || '') + '<br>';

                            offreHTML += '<input type="submit" value="Ajouter un étudiant à cette offre">' + '<br>';
                            offreHTML += '<input type="hidden" name="nomOffre" value="' + offre.nom + '">';

                            if (offre.offreEtudiants && offre.offreEtudiants.length > 0) {
                                offreHTML += '<label> Les étudiants qui ont déjà postulés :</label><br>';
                                offre.offreEtudiants.forEach(function (etudiant) {
                                    offreHTML += etudiant.nom + ' ' + etudiant.prenom + '<br>';
                                });
                            } else {
                                offreHTML += '<label>Aucun étudiant n\'a encore postulé à cette offre.</label>';
                            }

                            offreHTML += '</li>';

                            resultatsHTML += offreHTML;
                        });

                        resultatsHTML += '</ul></form>';

                        document.getElementById('resultatsOffre').innerHTML = resultatsHTML;

                        document.getElementById('ajoutEtudiantForm').addEventListener('submit', function () {
                            var selectedOffer = document.querySelector('input[name="BtAjoutEtudiant"]:checked');
                            if (selectedOffer) {
                                document.getElementById('selectedOffer').value = selectedOffer.previousSibling.value;
                            }
                        });
                    } else {
                        document.getElementById('resultatsOffre').innerHTML = "Aucun résultat trouvé.";
                    }
                } catch (e) {
                    console.error("Erreur d'analyse JSON : " + e);
                }
            } else {
                console.error("Erreur de la requête : " + xhr.status);
            }
        }
    };

    xhr.send();

}


/**
 * Affiche les zones de texte ou les checkbox lorsque la catégorie est cochée
 *
 * @author Emeline
 *
 * @return void
 */
function afficherChamps() {
    if (document.getElementById("nomCheckbox").checked) {
        document.getElementById("nomDiv").style.display = "block";
    } else {
        document.getElementById("nomDiv").style.display = "none";
    }

    if (document.getElementById("domaineCheckbox").checked) {
        document.getElementById("domaineDiv").style.display = "block";
    } else {
        document.getElementById("domaineDiv").style.display = "none";
    }

    if (document.getElementById("missionCheckbox").checked) {
        document.getElementById("missionDiv").style.display = "block";
    } else {
        document.getElementById("missionDiv").style.display = "none";
    }

    if (document.getElementById("nbEtudiantCheckbox").checked) {
        document.getElementById("nbEtudiantDiv").style.display = "block";
    } else {
        document.getElementById("nbEtudiantDiv").style.display = "none";
    }
}

document.getElementById("nomCheckbox").addEventListener("change", afficherChamps);
document.getElementById("domaineCheckbox").addEventListener("change", afficherChamps);
document.getElementById("missionCheckbox").addEventListener("change", afficherChamps);
document.getElementById("nbEtudiantCheckbox").addEventListener("change", afficherChamps);

afficherChamps();