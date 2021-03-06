<?php

declare(strict_types=1);

namespace VendorName\Skeleton\Commands;

use Spiral\Console\Command;

class SkeletonCommand extends Command
{
    protected const SIGNATURE = 'skeleton {argument : Argument description} {--o|option : Option description}';
    protected const DESCRIPTION = 'My command';
    protected const ARGUMENTS = [];

    public function perform(): int
    {
        return self::SUCCESS;
    }
}
