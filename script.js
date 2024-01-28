function toggleMenu() {
  const menu = document.querySelector(".menu-links");
  const icon = document.querySelector(".hamburger-icon");
  menu.classList.toggle("open");
  icon.classList.toggle("open");
}


document.getElementById('openBtn').addEventListener('click', function() {
  document.getElementById('popupForm').style.display = 'block';
});

document.querySelector('.close').addEventListener('click', function() {
  document.getElementById('popupForm').style.display = 'none';
});

window.addEventListener('click', function(event) {
  if (event.target == document.getElementById('popupForm')) {
    document.getElementById('popupForm').style.display = 'none';
  }
});
