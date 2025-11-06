 // Navigation handling
    document.addEventListener('DOMContentLoaded', function() {
      // Get all sidebar links
      const sidebarLinks = document.querySelectorAll('.sidebar .menu a');
      
      // Add click event to each link
      sidebarLinks.forEach(link => {
        link.addEventListener('click', function(e) {
          // Remove active class from all links
          sidebarLinks.forEach(l => l.classList.remove('active'));
          
          // Add active class to clicked link
          this.classList.add('active');
          
          // Allow default navigation to proceed
        });
      });
    });