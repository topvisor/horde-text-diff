<?php

declare(strict_types=1);

namespace Topvisor\Horde\Text\Diff;

/**
 * Interface for Diff Engines
 */
interface DiffEngineInterface
{
    /**
     * Create a list of differences
     * 
     * @return OperationList
     */
    public function diff(): OperationList;
}
