<?php

require('./organizer.php');

$mainComposerFile = json_decode(file_get_contents('composer.lock', './'));
$dependencies = json_decode(json_encode($mainComposerFile), true)['packages'];

foreach ($dependencies as $dependencie) {
}
$underDependances = [];


function formatDependence($dependencies)
{
    foreach ($dependencies as $dependencie) {
        $packageParentName = $dependencie['name'];
        $packageParentVersion = $dependencie['version'];
        $dependencie['require-dev'];
    };
};

function getUnderDependence($dependencie, $packageParentName, $packageParentVersion)
{
    $result = [];
    foreach ($dependencie as $key => $dependencie) {
        if (!isset($underDependance[$key])) {
            $result[$key] = [];
            $result[$key][$underDependance] = [$packageParentName => $packageParentVersion];
        } else {
            $result[$key][$underDependance] = [$packageParentName => $packageParentVersion];
        };
    }
}

var_dump(json_encode($dependencies, JSON_PRETTY_PRINT));
