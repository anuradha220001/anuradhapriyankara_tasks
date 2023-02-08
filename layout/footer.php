<div class="row">
<footer style="background-color: rgb(65, 7, 109); color: white;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright <br>
  <?php
  $fname = basename($_SERVER["PHP_SELF"]);
  $last_modified = filemtime($fname);
  
  echo "Last modifited on  " . date("d F Y H:i" , $last_modified);

  ?>
  
  <!-- Copyright -->

</footer></div>
</div>