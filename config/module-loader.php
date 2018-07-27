<?php

return [

    /*
     * Scan and autoload your modules at runtime.
     */
    'runtime_autoloading' => false,

    /*
     * An array of paths to scan for modules.
     */
    'paths' => [

        'modules',

    ],

    /*
     * Eloquent factories should only be registered in local development
     * environments. You can add your production environment to enable
     * them there too.
     */
    'development_environments' => [
        'local',
        'dev',
        'development',
        'testing',
    ],

];
