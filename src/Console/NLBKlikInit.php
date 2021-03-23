<?php

namespace NikolaStojkov\NLBKlik\Console;

use Illuminate\Console\Command;

class NLBKlikInit extends Command
{
    protected string $signature = "nlbklik:init";

    protected string $description = "Initialize NLBKlik API. This will check if you have the NLBCLI installed and if you're correctly logged in.";

    public function handle()
    {
        $this->info("TODO make this command work.");
    }
}

