<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerT1y2wqS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerT1y2wqS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerT1y2wqS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerT1y2wqS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerT1y2wqS\App_KernelDevDebugContainer([
    'container.build_hash' => 'T1y2wqS',
    'container.build_id' => 'fb7e5614',
    'container.build_time' => 1721376353,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerT1y2wqS');