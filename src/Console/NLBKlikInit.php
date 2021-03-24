<?php

namespace NikolaStojkov\NLBKlik\Console;

use Illuminate\Console\Command;

class NLBKlikInit extends Command
{
    protected $signature = "nlbklik:dev:init";

    protected $description = "Initialize NLBKlik API. This will check if you have the NLBCLI installed and if you're correctly logged in.";

    public function handle()
    {
        $this->info("Welcome to the NLBKlik Laravel package. Please sign in to use this project for local development.");

        $this->info("Please refer to https://github.com/whoeverest/nlbcli if you need more information about the logging/sessions logic.");

        if ($this->confirm("Do you have NLBCLI installed on your system?", true))
        {
            $this->askForLogin();
        }
        else
        {
            if ($this->confirm("Would you like us to automatically install NLBCLI for you?", true))
            {
               $this->info("TODO: Automatically install NLBCLI. Do checks like is git/python/pip installed etc.");
            }
            else
            {
                $this->info("Run this command again when you have NLBCLI installed!");
            }
        }
    }

    private function askForLogin()
    {
        if ($this->confirm("Do you want to save your login credentials locally?", true))
        {
            $nlbcliOutput = [];

            //exec("nlbcli login", $nlbcliOutput);

            // TODO: Wait for NLBCLI issue #13 to finish this command with logging in etc.
        }
        else
        {
            // TODO: Find a way to fix.
            $this->info("Using this package without locally stored credentials is currently not supported. Watch issue # for updates!");
        }
    }
}

