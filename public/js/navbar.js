
  document.addEventListener("DOMContentLoaded", function () {
    // Function to toggle dropdown visibility
    function toggleDropdown(dropdownId) {
      const dropdown = document.getElementById(dropdownId);
      if (dropdown) {
        dropdown.classList.toggle("hidden");
      }
    }

    // Toggle Sidebar Mobile
    const toggleSidebarMobile = document.getElementById("toggleSidebarMobile");
    if (toggleSidebarMobile) {
      toggleSidebarMobile.addEventListener("click", function () {
        // Toggle the sidebar mobile view
        // You can add your logic here
      });
    }

    // Toggle Sidebar Mobile Search
    const toggleSidebarMobileSearch = document.getElementById("toggleSidebarMobileSearch");
    if (toggleSidebarMobileSearch) {
      toggleSidebarMobileSearch.addEventListener("click", function () {
        // Toggle the search in mobile view
        // You can add your logic here
      });
    }

    // Toggle Theme
    const themeToggle = document.getElementById("theme-toggle");
    if (themeToggle) {
      themeToggle.addEventListener("click", function () {
        // Toggle theme (light/dark)
        // You can add your logic here
      });
    }

    // Dropdowns
    const dropdownToggleButtons = document.querySelectorAll("[data-dropdown-toggle]");
    dropdownToggleButtons.forEach(function (button) {
      button.addEventListener("click", function () {
        const dropdownId = this.getAttribute("data-dropdown-toggle");
        toggleDropdown(dropdownId);
      });
    });

    // Collapse
    const collapseToggleButtons = document.querySelectorAll("[data-collapse-toggle]");
    collapseToggleButtons.forEach(function (button) {
      button.addEventListener("click", function () {
        const targetId = this.getAttribute("data-collapse-toggle");
        const target = document.getElementById(targetId);
        if (target) {
          target.classList.toggle("hidden");
        }
      });
    });
  });

