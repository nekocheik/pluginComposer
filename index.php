<?php

require('./organizer.php');

$mainComposerFile = json_decode(file_get_contents('composer.lock', './'));
$dependencies = json_decode(json_encode($mainComposerFile), true)['packages'];

$underDependances = [];

foreach ($dependencies as $dependencie) {
    $packageParentName = $dependencie['name'];
    $packageParentVersion = $dependencie['version'];
    if ($dependencie['require-dev']) {
        foreach ($dependencie['require-dev'] as $key => $underDependance) {
            if (!isset($underDependance[$key])) {
                $underDependances[$key] = [];
                $underDependances[$key][$underDependance] = [$packageParentName => '0'];
            } else {
                var_dump('ici');
                $underDependance[$key][$underDependance] = [$packageParentName => '0'];
            };
        }
    }
};

var_dump(json_encode($underDependances, JSON_PRETTY_PRINT));
