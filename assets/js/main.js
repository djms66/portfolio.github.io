document.addEventListener("DOMContentLoaded", () => {
    gsap.from(".navbar a", {
        opacity: 0,
        y: -50,
        duration: 1,
        stagger: 0.2
    });

    gsap.from("h1", {
        opacity: 0,
        y: 20,
        duration: 1
    });
});