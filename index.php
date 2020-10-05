<?php  

require('./organizer.php');

$mainComposerFile = json_decode(file_get_contents('composer.lock', './'));
$dependencies = json_decode(json_encode($mainComposerFile), true)['packages'];

$underDependances = [];

foreach ($dependencies as $dependencie) {
  $packageParentName = $dependencie['name'];
  if (  $dependencie['require-dev']) {
    foreach ($dependencie['require-dev'] as $key => $underDependance) {
      if ( !isset($underDependance[$key])) {
        $underDependances[$key] = []; 
        $underDependances[$key][$packageParentName] =  $underDependance;
      } else {
        var_dump('ici');
        $underDependance[$key][$packageParentName] = $underDependance;
      };
    }
  }
};

var_dump(json_encode($underDependances, JSON_PRETTY_PRINT));
?>
