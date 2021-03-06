<?php
require_once('Git.php');
$repo = Git::open('/var/www/app');
$repo->pull();
