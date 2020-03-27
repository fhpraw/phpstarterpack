<?php
/* database settings */
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','');

/* base folder */
define ('BASE','/playground');
define ('SITE_ROOT',$_SERVER['DOCUMENT_ROOT'].BASE);

define ('PHP',SITE_ROOT.'/php');
define ('AJAX',PHP.'/ajax');

define ('HTML',SITE_ROOT.'/html');
define ('BODY',HTML.'/body');
define ('NAV',HTML.'/nav');
define ('VENDOR',HTML.'/vendor');
define ('FORM',HTML.'/form');

/* site url */
define ('SITE_URL','http://'.$_SERVER['HTTP_HOST'].BASE);

/* date time */
date_default_timezone_set ('Asia/Jakarta');
define ('DATETIME_FORMAT','Y-m-d H:i:s');
