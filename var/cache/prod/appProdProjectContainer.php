<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVtnczic\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVtnczic/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerVtnczic.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerVtnczic\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerVtnczic\appProdProjectContainer(array(
    'container.build_hash' => 'Vtnczic',
    'container.build_id' => '76859420',
    'container.build_time' => 1519124386,
));