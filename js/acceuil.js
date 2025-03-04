const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Fermer le menu quand on clique à l'extérieur (mobile)
        document.addEventListener('click', (e) => {
            if (!hamburger.contains(e.target) && !navLinks.contains(e.target)) {
                navLinks.classList.remove('active');
            }
        });

        // Animation smooth scroll pour les liens
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        function toggleDropdown() {
            var dropdown = document.getElementById("dropdown");
            var dropdownMenu = document.getElementById("dropdownMenu");
            
            if (dropdownMenu.style.display === "block") {
                dropdownMenu.style.display = "none";
                dropdown.classList.remove("active");
            } else {
                dropdownMenu.style.display = "block";
                dropdown.classList.add("active");
            }
        }
        
    
        const image =[
            
        ];
        function changeImage(){

        }
        const images = [
            "image5.jpeg",
            "image2.jpg",
            "image3.jpg",
            
            //"image1.jpeg",
            // "image4.jpg",
        ];

let acceuil = 0;
const imageElement = document.getElementById("changement");

function changeImage() {
    acceuil = (acceuil+ 1) % images.length;
    imageElement.src = '../image/'+images[acceuil];
}

// Changer l'image toutes les 3 secondes
setInterval(changeImage, 3000);

