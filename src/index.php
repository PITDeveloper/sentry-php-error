<?php

require_once( __DIR__ . "/vendor/autoload.php" );

\Sentry\init([
	'dsn' => 'REDACTED',
	'traces_sample_rate' => 1.0,
	'environment' => 'development',
]);

function run( $command, $server, $username, $password, $port = 22 ) {

	$connection = ssh2_connect( $server, $port );
	ssh2_auth_password( $connection, $username, $password );

	$stream = ssh2_exec( $connection, $command );

	stream_set_blocking( $stream, true );

	$streamOutput = ssh2_fetch_stream( $stream, SSH2_STREAM_STDIO );
	$result = stream_get_contents( $streamOutput );
	
	ssh2_disconnect( $connection );

	return $result;
}

run( "echo test", "REDACTED", "REDACTED", "REDACTED" );


throw new Error( "testError" );
