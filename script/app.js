

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