    <div id="footer">
      Copyright 20xx, Test Corp
    </div>
  </body>
</html>
<?php
  // 5. Close connection to database
  if (isset($connection)) {
      mysqli_close($connection);
  }
?>
