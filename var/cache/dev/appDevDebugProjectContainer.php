<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKdskffx\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKdskffx/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerKdskffx.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerKdskffx\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerKdskffx\appDevDebugProjectContainer([
    'container.build_hash' => 'Kdskffx',
    'container.build_id' => 'ee700e72',
    'container.build_time' => 1574609032,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKdskffx');
