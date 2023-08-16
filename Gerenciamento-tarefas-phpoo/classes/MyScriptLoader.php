<?php
class ScriptLoader{
  public static function loadScriptsAndStyles(){
      $fileName = basename($_SERVER['PHP_SELF']);
      switch ($fileName) {
        case 'index.php':
            echo '<script src="js/index.js" defer></script>';
            echo '<link rel="stylesheet" href="./css/index.css">';
            echo '<link rel="stylesheet" href="./css/global/general.css">';
            break;
        case 'signin.php':
            echo '<script src="../signin.js" defer></script>';
            echo '<link rel="stylesheet" href="../css/signin.css">';
            echo '<link rel="stylesheet" href="../css/global/general.css">';
            break;
        case 'task.php':
            echo '<script src="../js/FetchAPI/getTaskFetchAPI.js" type="module" defer></script>';
            echo '<script src="../js/createTaskModal.js" defer></script>';
            echo '<script src="../js/descriptionModal.js" defer></script>';
            echo '<script src="../js/FetchApi/taskFormFetchApi.js" defer></script>';
            echo '<script src="../js/taskFormAuthenticationFront.js" defer></script>';
            echo '<link rel="stylesheet" href="../css/task.css">';
            echo '<link rel="stylesheet" href="../css/global/general.css">';
            break;
      }
  }
}
