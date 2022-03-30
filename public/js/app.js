const target = document.getElementById("nav__menu");
target.addEventListener('click', () => {
  target.classList.toggle('open');
  const nav = document.getElementById("hnav");
  nav.classList.toggle('in');
});