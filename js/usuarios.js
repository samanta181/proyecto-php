
// JavaScript para manejar el cambio de pestañas activas
const tabs = document.querySelectorAll('.nav-link');
    const tabContent = document.querySelector('.tab-content');
    
    tabs.forEach(tab => {
      tab.addEventListener('click', function (e) {
        e.preventDefault();
        tabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');
        const targetId = this.getAttribute('href').replace('#', '');
        const tabPanes = tabContent.querySelectorAll('.tab-pane');
        tabPanes.forEach(pane => {
          pane.classList.remove('show', 'active');
        });
        const targetPane = document.getElementById(targetId);
        targetPane.classList.add('show', 'active');
        
        // Guardar el estado de la pestaña activa en localStorage
        localStorage.setItem('activeTab', targetId);
      });
    });
    
    // Restaurar el estado de la pestaña activa al cargar la página
    window.addEventListener('load', function () {
      const activeTab = localStorage.getItem('activeTab');
      if (activeTab) {
        const tabToActivate = document.querySelector(`a[href="#${activeTab}"]`);
        if (tabToActivate) {
          tabToActivate.click();
        }
      }
    });