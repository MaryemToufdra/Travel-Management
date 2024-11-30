document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.sidebar-menu a'); // Tous les liens des onglets
    const dynamicContent = document.getElementById('dynamic-content'); // La section où charger le contenu

    // Cette fonction permet de charger le contenu lorsque l'utilisateur clique sur un lien de l'onglet
    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault(); // Empêcher la redirection par défaut

            const url = this.getAttribute('href'); // Récupérer l'URL de l'onglet
            if (url === '#') return; // Si l'onglet ne contient pas d'URL (par exemple pour l'onglet Trips), ne rien faire
            fetchContent(url); // Charger le contenu dynamiquement
        });
    });

    // Fonction pour charger dynamiquement le contenu
    function fetchContent(url) {
        fetch(url)
            .then(response => {
                if (!response.ok) throw new Error('Erreur lors du chargement du contenu.');
                return response.text();
            })
            .then(html => {
                dynamicContent.innerHTML = html; // Mettre à jour le conteneur
                dynamicContent.classList.add('text-center'); // Centrer le contenu
            })
            .catch(error => {
                console.error(error);
                dynamicContent.innerHTML = '<p>Erreur lors du chargement du contenu.</p>';
            });
    }

    // Gestion du clic sur l'onglet "Trips"
    const loadTripsButton = document.querySelector('.sidebar-menu a[href="#"]'); // Trouver l'onglet "Trips"
    if (loadTripsButton) {
        loadTripsButton.addEventListener('click', function (e) {
            e.preventDefault(); // Empêcher la redirection par défaut
            fetchTrips(); // Charger les voyages
        });
    }

    // Fonction pour charger dynamiquement les voyages
    function fetchTrips() {
        fetch('/voyages') // Route qui récupère les voyages
            .then(response => {
                if (!response.ok) throw new Error('Erreur lors du chargement des voyages.');
                return response.text(); // Récupérer le contenu HTML
            })
            .then(html => {
                dynamicContent.innerHTML = html; // Mettre à jour le conteneur avec les voyages
                dynamicContent.classList.add('text-center'); // Centrer le contenu
            })
            .catch(error => {
                console.error(error);
                dynamicContent.innerHTML = '<p>Erreur lors du chargement des voyages.</p>';
            });
    }
});
const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
});
const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})
function toggleDropdown() {
    const dropdown = document.querySelector('.profile-dropdown');
    dropdown.classList.toggle('show');
}
document.addEventListener("DOMContentLoaded", () => {
    const activitiesLink = document.getElementById("activities-link");
    const dynamicContent = document.getElementById("dynamic-content");
    const pageTit = document.querySelector('.head-title .left h1'); 
    const onglet=document.querySelector('.nav-link');
    activitiesLink.addEventListener("click", (event) => {
        event.preventDefault(); 

        fetch("/activity")
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Une erreur s'est produite lors du chargement du contenu.");
                }
                return response.text();
            })
            .then((html) => {
                dynamicContent.innerHTML = html; 
                  pageTit.textContent = 'List Of Activities'
                  onglet.textContent='Activities'
            })
          
            .catch((error) => {
                console.error("Erreur:", error);
            });
    });

    
});
document.addEventListener('DOMContentLoaded', function () {
    const tripsLink = document.querySelector('#trips-link');
    const pageTitle = document.querySelector('.head-title .left h1'); 
    const onglet=document.querySelector('.nav-link');
    if (tripsLink) {
        tripsLink.addEventListener('click', function (e) {
            e.preventDefault();
            fetch('/voyages')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Erreur lors du chargement des voyages.');
                    }
                    return response.text();
                })
                .then(html => {
                    const dynamicContent = document.querySelector('#dynamic-content');
                    if (dynamicContent) {
                        dynamicContent.innerHTML = html;
                    }
                    pageTitle.textContent = 'List Of Trips';
                       onglet.textContent='Trips';
                })
                .catch(error => {
                    console.error('Erreur :', error);
                });
        });
    }
});
document.addEventListener("DOMContentLoaded", () => {
    const account = document.getElementById("account"); // Corrigez ici
    const dynamicContent = document.getElementById("dynamic-content");
    const pageTit = document.querySelector('.head-title .left h1'); 
    const onglet = document.querySelector('.nav-link');

    account.addEventListener("click", (event) => {
        event.preventDefault(); // Empêche la redirection par défaut du lien
        fetch("/account")
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Une erreur s'est produite lors du chargement du contenu.");
                }
                return response.text();
            })
            .then((html) => {
                dynamicContent.innerHTML = html;  // Charge le contenu dans dynamic-content
                pageTit.textContent = 'List Of Accounts';  // Met à jour le titre de la page
                onglet.textContent = 'Accounts';  // Met à jour l'onglet
            })
            .catch((error) => {
                console.error("Erreur:", error);
            });
    });
});
