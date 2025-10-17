// js/aos-init.js
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 800, // Animation duration in milliseconds
        easing: 'ease-in-out', // Easing function
        once: true, // Animation happens only once
        offset: 120 // Offset (in pixels) from the original trigger point
    });
});