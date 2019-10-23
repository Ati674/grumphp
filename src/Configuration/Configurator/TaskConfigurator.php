<?php

declare(strict_types=1);

namespace GrumPHP\Configuration\Configurator;

use GrumPHP\Task\Config\TaskConfig;
use GrumPHP\Task\TaskInterface;

class TaskConfigurator
{
    public function __invoke(TaskInterface $task, TaskConfig $config): TaskInterface
    {
        return $task->withConfig($config);
    }
}
