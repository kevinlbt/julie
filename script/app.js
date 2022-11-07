
document.addEventListener('DOMContentLoaded', function () {

  AOS.init();


const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const square = entry.target.querySelector('.zone_texte');
  
      if (entry.isIntersecting) {
        square.classList.add('zone_texte_animation');
        return; // if we added the class, exit the function
      }
  
      // We're not intersecting, so remove the class!
      square.classList.remove('zone_texte_animation');
    });
  });
  
  observer.observe(document.querySelector('.zone_texte_wrapper'));

});


// arrow contact 

let arrow = document.getElementById('arrow');
let arrowup = document.getElementById('arrowup');
let contact = document.getElementById('contact');

arrow.addEventListener('click', function () {

    contact.style.display = 'block';
    contact.classList.remove('contactDown-animation');
    contact.classList.add('contact-animation');
    arrow.style.display = 'none';
    arrowup.style.display = 'block';


})

arrowup.addEventListener('click', function () {

  setTimeout(() => {
    contact.style.display = 'none';
  },1000);
  contact.classList.remove('contact-animation');
  contact.classList.add('contactDown-animation');
  arrowup.style.display = 'none';
  arrow.style.display = 'block';

})

