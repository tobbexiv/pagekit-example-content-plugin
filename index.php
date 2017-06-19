<?php

return [
    
    'name' => 'tobbe/example-content-plugin',
    
    'type' => 'extension',
    
    'main' => function ($app) {
        $app->subscribe(new Tobbe\ExampleContentPlugin\Plugin\ExampleContentPlugin()); // Subscribe the plugin class.
    },
    
    'autoload' => [
        'Tobbe\\ExampleContentPlugin\\' => 'src'
    ]
    
];

?>