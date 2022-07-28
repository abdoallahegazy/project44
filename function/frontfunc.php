<?php

function asset(string $path){


    return "/public/assets/adminlte/$path";




}



function layouts(string $path){


    return  ROOT . "/public/admin/layouts/$path";




}



function weblayouts(string $path){


    return  ROOT . "/public/site/layouts/$path";




}



function assetsite(string $path){


    return "/public/assets/site/$path";




}
