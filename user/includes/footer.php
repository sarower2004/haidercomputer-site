

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/script.js"></script>

<script>
  function toggleDropdown(id) {
      // Close all other dropdowns
      let menus = document.getElementsByClassName("dropdown-content");
      for (let i = 0; i < menus.length; i++) {
        if (menus[i].id !== id) {
          menus[i].classList.remove("show");
        }
      }
      // Toggle current dropdown
      document.getElementById(id).classList.toggle("show");
    }

    // Close dropdown if clicked outside
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        let dropdowns = document.getElementsByClassName("dropdown-content");
        for (let i = 0; i < dropdowns.length; i++) {
          dropdowns[i].classList.remove("show");
        }
      }
    }
</script>
</body>
</html>
