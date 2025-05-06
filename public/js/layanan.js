document.querySelectorAll('.thumbnail').forEach(thumb => {
    thumb.addEventListener('click', function () {
      const mainImage = document.querySelector('.main-image');
      mainImage.src = this.src;
    });
  });