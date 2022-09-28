<?php
/**
 * @Created by          : Waris Agung Widodo (ido.alit@gmail.com)
 * @Date                : 2019-01-29 22:16
 * @File name           : login_template.inc.php
 */

if (isset($_GET['p']) && $_GET['p'] == 'visitor') {
  include SB . "template/default/classic.php";
  include SB . "template/default/parts/header.php";
  echo $main_content;
  include SB . "template/default/assets/js/vegas.js.php";
  echo '</body></html>';
} else {
  //include "index_template.inc.php";
}