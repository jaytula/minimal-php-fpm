<?php

echo phpinfo();

// $arr = array('aaa' => 'bbb');
// error_log(var_export($arr, true));
openlog('heya', LOG_NDELAY | LOG_PERROR, LOG_LOCAL0);
syslog(LOG_ERR, 'whatever');