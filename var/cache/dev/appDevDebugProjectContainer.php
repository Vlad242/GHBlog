<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCtx2jb9\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCtx2jb9/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerCtx2jb9.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerCtx2jb9\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerCtx2jb9\appDevDebugProjectContainer();
