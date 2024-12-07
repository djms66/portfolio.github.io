document.addEventListener("DOMContentLoaded", () => {
    const gallery = document.querySelector(".gallery-grid");
    const contactForm = document.getElementById("contact-form");
    let page = 1;

    // Load images dynamically
    const loadImages = () => {
        fetch(`https://api.unsplash.com/photos?page=${page}&per_page=6&client_id=A_eu0DBwsnUjeYpHTQsQmDEjlYLIMdfzhsA7V5JEn7M`)
            .then(response => response.json())
            .then(data => {
                data.forEach(photo => {
                    const img = document.createElement('img');
                    img.src = photo.urls.small;
                    img.alt = photo.alt_description || "Graphic Design Work";
                    img.addEventListener("click", () => {
                        window.open(photo.links.html, "_blank");
                    });
                    gallery.appendChild(img);
                });
                page++;
            })
            .catch(error => console.error("Failed to load images:", error));
    };

    // Handle form submission
    contactForm.addEventListener("submit", (event) => {
        event.preventDefault();

        const formData = new FormData(contactForm);
        const data = {};
        formData.forEach((value, key) => {
            data[key] = value;
        });

        console.log("Form data submitted:", data);
        alert("Merci pour votre message ! Je vous répondrai dès que possible.");
        contactForm.reset();
    });

    // Infinite scroll for gallery
    window.addEventListener('scroll', () => {
        if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 100) {
            loadImages();
        }
    });

    // Load initial images
    loadImages();
});