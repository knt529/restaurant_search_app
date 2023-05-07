function scrollToFirstShop() {
  const firstShop = document.querySelector('#number');
  firstShop.scrollIntoView({ behavior: 'smooth' });
}

const scrollButton = document.querySelector('#scrollButton');

scrollButton.addEventListener('click', scrollToFirstShop);