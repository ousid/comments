<?php

namespace Coderflex\Comments\Commands;

use Illuminate\Console\Command;

class CommentsCommand extends Command
{
    public $signature = 'comments';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
