function verif_mail() {

    //Récupération du champ mail dans le formulaire inscription
    var mail = document.getElementById("mail").value;

    //création d'un nouvelle objet
    const req = new XMLHttpRequest();

    req.open("POST", "tri2.php");

    req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    req.onreadystatechange = () => {

        if (req.readyState === XMLHttpRequest.DONE) {

            const status = req.status;

            if (status === 0 || (status >= 200 && status < 400)) {
                // affichage du message sur la page inscription.php
                document.getElementById('result').innerHTML = req.responseText;
            } else {
                console.error('Error:', req.status, req.statusText);
            }
        }
    };
    let donnees = 'mail=' + encodeURIComponent(mail);
    req.send(donnees);
}



//ajout d'un ecouteur d'evenement sur le bouton pour lancer la fonction verif_mail()
let bouton = document.getElementById("boutton");
bouton.addEventListener('click',verif_mail);






