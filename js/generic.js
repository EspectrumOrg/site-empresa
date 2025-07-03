// Menu Controller - Padrão Module
const menuController = (() => {
    const selectors = {
      sidebar: '.menu .sidebar',
      menuButton: '.menu-button',
      closeButton: '.menu-close'
    };
    
    const showSidebar = () => {
      const sidebar = document.querySelector(selectors.sidebar);
      sidebar.style.display = 'flex';
      requestAnimationFrame(() => {
        sidebar.style.right = '0';
      });
    };
    
    const hideSidebar = () => {
      const sidebar = document.querySelector(selectors.sidebar);
      sidebar.style.right = '-100%';
      setTimeout(() => {
        sidebar.style.display = 'none';
      }, 300);
    };
    
    const handleClickOutside = (event) => {
      const sidebar = document.querySelector(selectors.sidebar);
      const menuButton = document.querySelector(selectors.menuButton);
      
      if (sidebar.style.display === 'flex' && 
          !sidebar.contains(event.target) && 
          !menuButton.contains(event.target)) {
        hideSidebar();
      }
    };
    
    const init = () => {
      const menuButton = document.querySelector(selectors.menuButton);
      if (menuButton) {
        menuButton.addEventListener('click', showSidebar);
      }
      
      document.addEventListener('click', handleClickOutside);
      
      const closeButton = document.querySelector(selectors.closeButton);
      if (closeButton) {
        closeButton.addEventListener('click', hideSidebar);
      }
    };
    
    return { init };
  })();
  
  // Intersection Observer - Efeito Fade-in
  const fadeInObserver = (() => {
    const init = () => {
      const elementos = document.querySelectorAll('.fade-in');
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
          }
        });
      }, { threshold: 0.15 });
      
      elementos.forEach((elemento) => {
        observer.observe(elemento);
      });
    };
    
    return { init };
  })();
  
  // Carrossel Controller
  const carouselController = (() => {
    let currentIndex = 0;
    let intervalId = null;
    
    const showItem = (index) => {
      const items = document.querySelectorAll('.carousel-item');
      items.forEach(item => item.style.opacity = '0');
      items[index].style.opacity = '1';
    };
    
    const nextItem = () => {
      const items = document.querySelectorAll('.carousel-item');
      currentIndex = (currentIndex + 1) % items.length;
      showItem(currentIndex);
    };
    
    const startAutoRotation = () => {
      intervalId = setInterval(nextItem, 3000);
    };
    
    const stopAutoRotation = () => {
      if (intervalId) {
        clearInterval(intervalId);
      }
    };
    
    const init = () => {
      const items = document.querySelectorAll('.carousel-item');
      if (items.length > 0) {
        showItem(0);
        startAutoRotation();
        
        // Pausa quando o usuário interage
        const carousel = document.querySelector('.carrossel');
        if (carousel) {
          carousel.addEventListener('mouseenter', stopAutoRotation);
          carousel.addEventListener('mouseleave', startAutoRotation);
          carousel.addEventListener('touchstart', stopAutoRotation);
          carousel.addEventListener('touchend', startAutoRotation);
        }
      }
    };
    
    return { init };
  })();
  
  // Inicialização quando o DOM estiver pronto
  document.addEventListener('DOMContentLoaded', () => {
    menuController.init();
    fadeInObserver.init();
    carouselController.init();
  });