<?php

	$content=file_get_contents("php://input");

	$socket = stream_socket_client('tcp://localhost:12345');
	fputs($socket, $content . "\n");
	$res=fgets($socket);
	fclose($socket);
	echo $res;

?>
