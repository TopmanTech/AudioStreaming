<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TidyLibraryCommand extends Command
{
    protected $signature = 'AudioStreaming:tidy';
    protected $hidden = true;

    public function handle(): int
    {
        $this->warn('AudioStreaming:tidy has been renamed. Use AudioStreaming:prune instead.');

        return self::SUCCESS;
    }
}
