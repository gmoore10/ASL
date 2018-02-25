<?php
// config/packages/framework.php
$container->loadFromExtension('framework', array(
    'session' => array(
        'handler_id' => 'session.handler.native_file',
        'save_path' => '%kernel.project_dir%/var/sessions/%kernel.environment%'
    ),
));
?>