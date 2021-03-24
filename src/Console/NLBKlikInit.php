<?php

namespace NikolaStojkov\NLBKlik\Console;

use Illuminate\Console\Command;

class NLBKlikInit extends Command
{
    protected $signature = "nlbklik:init";

    protected $description = "Initialize NLBKlik API. This will check if you have the NLBCLI installed and if you're correctly logged in.";

    public function __construct()
    {
        parent::__construct();
    }
    
    public function handle()
    {
        $this->info("TODO make this command work.");
    }
}

