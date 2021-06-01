<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
    <?php 
        $command = escapeshellcmd('python ./scripts/main.py');
        $output = shell_exec($command);
        echo $output;
    ?> 
 </body>
</html>