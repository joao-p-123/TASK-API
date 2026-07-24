<?php
spl_autoload_register(function ($class) {
    $directories = ["config/", "controllers/", "models/", "repositories/", "services/", "helpers/"];

    foreach ($directories as $directory) {

        $file = __DIR__ . "/" . $directory . $class . ".php";


        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
    
});

