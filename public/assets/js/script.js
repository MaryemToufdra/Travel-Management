document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.sidebar-menu a'); 
    const dynamicContent = document.getElementById('dynamic-content'); 
    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault(); 
            const url = this.getAttribute('href'); 
            if (url === '#') return; 
            fetchContent(url); 
        });
    });
    function fetchContent(url) {
        fetch(url)
            .then(response => {
                if (!response.ok) throw new Error('Erreur lors du chargement du contenu.');
                return response.text();
            })
            .then(html => {
                dynamicContent.innerHTML = html; 
                dynamicContent.classList.add('text-center'); 
            })
            .catch(error => {
                console.error(error);
                dynamicContent.innerHTML = '<p>Erreur lors du chargement du contenu.</p>';
            });
    }
    const loadTripsButton = document.querySelector('.sidebar-menu a[href="#"]'); 
    if (loadTripsButton) {
        loadTripsButton.addEventListener('click', function (e) {
            e.preventDefault(); 
            fetchTrips(); 
        });
    }
    function fetchTrips() {
        fetch('/voyages') 
            .then(response => {
                if (!response.ok) throw new Error('Erreur lors du chargement des voyages.');
                return response.text(); 
            })
            .then(html => {
                dynamicContent.innerHTML = html; 
                dynamicContent.classList.add('text-center');
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
const dynamicContent = document.getElementById('dynamic-content');

menuBar.addEventListener('click', function () {
    sidebar.classList.toggle('hide');

    if (sidebar.classList.contains('hide')) {
        dynamicContent.style.marginLeft = "0"; 
    } else {
        dynamicContent.style.marginLeft = "250px"; 
    }
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

        fetch("/contact/afficher")
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Une erreur s'est produite lors du chargement du contenu.");
                }
                return response.text();
            })
            .then((html) => {
                dynamicContent.innerHTML = html; 
                  pageTit.textContent = 'List Of Messages'
                  onglet.textContent='Messages'
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
    const account = document.getElementById("account"); 
    const dynamicContent = document.getElementById("dynamic-content");
    const pageTit = document.querySelector('.head-title .left h1'); 
    const onglet = document.querySelector('.nav-link');

    account.addEventListener("click", (event) => {
        event.preventDefault(); 
        fetch("/account")
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Une erreur s'est produite lors du chargement du contenu.");
                }
                return response.text();
            })
            .then((html) => {
                dynamicContent.innerHTML = html;  
                pageTit.textContent = 'List Of Accounts';  
                onglet.textContent = 'Accounts';  
            })
            .catch((error) => {
                console.error("Erreur:", error);
            });
    });
});
document.addEventListener("DOMContentLoaded", () => {
    const booking = document.getElementById("booking");
    const dynamicContent = document.getElementById("dynamic-content");
    const pageTit = document.querySelector('.head-title .left h1'); 
    const onglet = document.querySelector('.nav-link');

   booking.addEventListener("click", (event) => {
        event.preventDefault(); 
        fetch("/booking")
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Une erreur s'est produite lors du chargement du contenu.");
                }
                return response.text();
            })
            .then((html) => {
                dynamicContent.innerHTML = html;  
                pageTit.textContent = 'List Of Booking';  
                onglet.textContent = 'Booking';  
            })
            .catch((error) => {
                console.error("Erreur:", error);
            });
    });
});
//account:
function confirmDelete2(userId, element) {
    event.preventDefault();
    const row = element.closest('tr');
    if (confirm("Are you sure you want to delete this account?")) {
        fetch(`/account/delete/${userId}`, {
            method: 'GET',
        })
        .then(response => response.json())
        .then(data => {
            
            console.log(data);
            if (data.success) {
                alert(data.success);
                row.remove();
            } else {
                alert(data.error);
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("An error occurred. Please try again.");
        });
    }
}


function confirmdelet(event, element) {
    event.preventDefault(); 
    const id = element.getAttribute('data-id'); 
    if (!id) {
        console.error("ID not found. Check the data-id attribute.");
        return;
    }

    const row = element.closest('tr'); 

    if (confirm("Are you sure you want to delete this Account?")) {
        fetch(`/account/delete/${id}`, {
            method: 'DELETE', 
        })
        .then(response => response.json()) 
        .then(data => {
            if (data.success) {
                alert(data.success); 
                row.remove(); 
            } else {
                alert(data.error); 
            }
        })
        .catch(error => {
            console.error("Error during deletion:", error);
            alert("An error occurred. Please try again.");
        });
    }
}
function confirmDelete(event, element) {
    event.preventDefault(); 
    const tripId = element.getAttribute('data-id');
    const row = element.closest('tr'); 
        if (confirm("Are you sure you want to delete this trip?")) {
        fetch(`/trips/delete/${tripId}`, {
            method: 'GET',
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.success); 
                row.remove(); 
                
            } else {
                alert(data.error); 
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("An error occurred. Please try again."); 
        });
    }
}
function confirmDelete1(event, element) {
    event.preventDefault(); 
    const activityId = element.getAttribute('data-id'); 
    const row = element.closest('tr');
    if (confirm("Are you sure you want to delete this message?")) {
        fetch(`/activities/delete/${activityId}`, {
            method: 'GET', 
        })
        .then(response => response.json()) 
        .then(data => {
            if (data.success) {
                alert(data.success); 
                row.remove(); 
            } else {
                alert(data.error); 
            }
        })
        .catch(error => {
            console.error("Error:", error); 
            alert("An error occurred. Please try again."); 
        });
    }
}
function confirmationDelete(event, element) {
    event.preventDefault();
    const bookingId = element.getAttribute('data-id');
    const row = element.closest('tr');
    if (confirm("Are you sure you want to delete this booking?")) {
        fetch(`/booking/delete/${bookingId}`, {
            method: 'DELETE',
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.success);
                row.remove();
            } else {
                alert(data.error);
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("An error occurred. Please try again.");
        });
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const dashboard = document.getElementById("dashboard"); 
    const dynamicContent = document.getElementById("dynamic-content");
    const p = document.querySelector('.head-title .left h1'); 
    const o = document.querySelector('.nav-link');

  dashboard.addEventListener("click", (event) => {
        event.preventDefault(); 
        fetch("/dashboard")
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Une erreur s'est produite lors du chargement du contenu.");
                }
                return response.text();
            })
            .then((html) => {
                dynamicContent.innerHTML = html;  
                p.textContent = 'Dashboard';  
                o.textContent = 'Dashboard'; 
            })
            .catch((error) => {
                console.error("Erreur:", error);
            });
    });
});
document.getElementById('searchForm').addEventListener('input', function (event) {
    event.preventDefault(); 
    const searchQuery = document.getElementById('searchInput').value.trim().toLowerCase();
    const table = document.getElementById('dataTable');
    const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    Array.from(rows).forEach(row => {
        const cells = row.getElementsByTagName('td');
        Array.from(cells).forEach(cell => {
            if (!cell.querySelector('a') && !cell.querySelector('button')) {
                cell.innerHTML = cell.textContent; 
            }
            cell.style.backgroundColor = ""; 
        });
    });
    if (searchQuery === "") {
        return;
    }
        Array.from(rows).forEach(row => {
        const cells = row.getElementsByTagName('td');
        Array.from(cells).forEach(cell => {
            if (cell.querySelector('a') || cell.querySelector('button')) {
                return; 
            }

            if (cell.textContent.toLowerCase().includes(searchQuery)) {
                const regex = new RegExp(`(${searchQuery})`, 'gi');
                cell.innerHTML = cell.textContent.replace(regex, '<span style="background-color: yellow;">$1</span>');
            }
        });
    });
});

function confirmationDeleteBook(event, element) {
    event.preventDefault(); 
    const bookingId = element.getAttribute('data-id'); 
    const row = element.closest('tr'); 

    if (confirm("Are you sure you want to delete this booking?")) {
        fetch(`/book/delete/${bookingId}`, {
            method: 'DELETE', 
            headers: {
                'Content-Type': 'application/json', 
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.success);
                row.remove();
            } else {
                alert(data.error); 
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("An error occurred. Please try again.");
        });
    }
}

