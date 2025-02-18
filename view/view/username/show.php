<?php

require_once("c://xampp/htdocs/Proyect Db/view/view/Head/head.php");
require_once("c://xampp/htdocs/Proyect Db/controller/usernameController.php");

$obj = new usernamecontroller();
print_r($obj -> show($_GET["id"]));



?>





<?php

require_once("c://xampp/htdocs/Proyect Db/view/view/Head/footer.php");

?>