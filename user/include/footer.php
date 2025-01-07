<!-- JQuery File -->
<script type="text/javascript" src="../jquery/jquery.js"></script>

<!-- Bootstrap JS File -->
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>

<!-- Fontawesome Icon JS -->
<script defer src="../fontawesome/js/all.js"></script>

</body>
</html>

<script>
  $(document).ready(function () {
    // Function to handle sidebar collapse based on window size
    function handleSidebarResize() {
      if ($(window).width() > 768) {
        $('#sidebar-collapse').collapse('show');
      } else {
        $('#sidebar-collapse').collapse('hide');
      }
    }

    // Run on initial load
    handleSidebarResize();

    // Attach to the window resize event
    $(window).on('resize', handleSidebarResize);
  });
</script>
