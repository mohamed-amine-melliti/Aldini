<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC5zT3ex\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC5zT3ex/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerC5zT3ex.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerC5zT3ex\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerC5zT3ex\App_KernelDevDebugContainer([
    'container.build_hash' => 'C5zT3ex',
    'container.build_id' => '3007d49d',
    'container.build_time' => 1650518995,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerC5zT3ex');
