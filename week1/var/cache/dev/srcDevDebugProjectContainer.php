<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW0eeXAS\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW0eeXAS/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerW0eeXAS.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerW0eeXAS\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerW0eeXAS\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'W0eeXAS',
    'container.build_id' => '5528fcdd',
    'container.build_time' => 1517964724,
));
