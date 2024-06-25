<?php
function create_connection()
{
    $host = "91.134.244.97";
    $port = 5000;
    $timeout = 30;
    
    $sk = @fsockopen($host, $port, &$errnum, &$errstr, $timeout);
    if(!is_resource($sk))
    {
        exit("connection fail: ".$errnum." ".$errstr);
    }
    else
    {
        fputs($sk, "hello world - 1");
        $dati = "";
        while(!feof($sk))
        {
            $dati .= fgets($sk, 1024);
        }
    }
}
?>