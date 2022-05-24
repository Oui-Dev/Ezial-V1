// Au chargement de la page
window.addEventListener('load', function () {
	// Ouverture du formulaire de contact, si un cookie "openContactForm" existe, le supprime par la suite
	if (document.cookie.split(';').some((item) => item.trim().startsWith('openContactForm='))) {
		document.cookie = 'openContactForm=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC';
		document.querySelector("#contactMeDiv > button").click();
	}

	// Affichage d'un message d'erreur si un cookie "erreur" existe, le supprime par la suite
	if (document.cookie.split(';').some((item) => item.trim().startsWith('erreur='))) {
		let erreur = decodeURIComponent(document.cookie.split('; ').find(row => row.startsWith('erreur=')).split('=')[1]);
		document.cookie = 'erreur=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC';
		
		// Scinde la chaine en 2 et supprime les caractères inutiles
		let i = erreur.indexOf(' : ');
		erreur = [erreur.slice(3,i), erreur.slice(i+3)];

		setErrorFor(document.getElementById(erreur[0]), decodeURI(erreur[1]));
	}
	
	// Affichage d'une snackbar si un cookie "success" existe, le supprime par la suite
	if (document.cookie.split(';').some((item) => item.trim().startsWith('success='))) {
		let successMSG = decodeURIComponent(document.cookie.split('; ').find(row => row.startsWith('success=')).split('=')[1]);
		document.cookie = 'success=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC';

		showSnackbar(successMSG);
	}

	// Récupération et ajout d'événement sur tous les formulaires présents sur la page
	const arrForm = document.querySelectorAll('form');
	arrForm.forEach(elt => {
		const input = elt.querySelectorAll('.form-control > input, .form-control > textarea');

		elt.addEventListener('submit', e => {
			for (let i = 0; i < input.length; i++) {
				if(checkInputs(input[i]) == false) {
					e.preventDefault();
				}
			}
		});
	});
});


// Fonction chargée d'afficher la snackbar avec le message passé en paramètre
function showSnackbar(msg) {
	Snackbar.show({
		text: msg,
		actionText: '✕',
		duration: 4000,
		actionTextColor: '#0084ff',
		pos: 'bottom-center',
	});
}


// Fonction chargée de vérifier tous les inputs d'un formulaire
function checkInputs(elt) {
	const eltValue = elt.value.trim();
	const exception = [];
	const emailArray = ['email'];

	if(eltValue === '' && exception.includes(elt.getAttribute("id")) === false) {
		setErrorFor(elt);
        return false;
	} else if (emailArray.includes(elt.getAttribute("id")) === true && !isEmail(eltValue)) {
		setErrorFor(elt);
        return false;
	} else {
		setSuccessFor(elt);
        return true;
	}
}


// Fonction chargée d'ajouter' un message d'erreur sur un élément donné
function setErrorFor(input, message) {
	const formControl = input.parentElement;
	formControl.className = 'form-control error';

	if(message !== undefined) {
		const small = formControl.querySelector('small');
		small.innerText = message;
	}
}
// Fonction chargée de supprimer un message d'erreur sur un élément donné
function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control';
}
// Fonction chargée de supprimer tous les messages d'erreurs
function reset(inputArray) {
	for (let i = 0; i < inputArray.length; i++) {
		const formControl = inputArray[i].parentElement;
		formControl.className = 'form-control';
	}
}
// Fonction chargée de vérifier qu'il s'agit d'un mail conforme
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}