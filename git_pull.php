<?php
echo "starting...\n";
try
{
  $payload = json_decode($_REQUEST['payload']);
}
catch(Exception $e)
{
  exit(0);
}

//log the request
file_put_contents('logs/github.txt', print_r($payload, TRUE), FILE_APPEND);


if ($payload->ref === 'refs/heads/master')
{
  echo "pulling from master...\n";
  // path to your site deployment script
  system('git pull', $retval);
  echo "exit code ".$retval."\n";
}

echo "finished.\n";
