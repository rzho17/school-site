document.addEventListener("DOMContentLoaded", (e) => {
  const gallery = document.querySelector(".lightgallery");

  if (gallery) {
    lightGallery(gallery, {
      selector: "img",
      download: false,
      thumbnail: true,
    });
  }
});
