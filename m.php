
<?php
if ($_FILES['file']['name']) {
  if (!$_FILES['file']['error']) {
    print_r($_FILES);

  }
}

?>