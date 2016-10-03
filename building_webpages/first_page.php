<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>First Page</title>
  </head>
  <body>

  <?php $link_name = "Second Page!"; ?>
  <?php $id = 2; ?>
  <?php $company = "Saunders & Mollenhauer"; ?>

  <a href="second_page.php?id=<?php echo $id; ?>&company=<?php echo urlencode($company); ?>"><?php echo $link_name; ?></a>

  </body>
</html>
