<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBpckdwu\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBpckdwu/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerBpckdwu.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerBpckdwu\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerBpckdwu\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Bpckdwu',
    'container.build_id' => 'cb6dade3',
    'container.build_time' => 1521812751,
));
