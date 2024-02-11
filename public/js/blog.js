
/* Handling Blog view */
document.addEventListener('DOMContentLoaded', function () {
  var blogItems = document.querySelectorAll('.blog-item');

  blogItems.forEach(function (item) {
      if (item.querySelector('p').innerText.trim() !== '') {
          item.style.display = 'block';
      }
  });
});