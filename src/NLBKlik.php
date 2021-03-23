<?php 

namespace NikolaStojkov\NLBKlik;

// use NLBKlik\Services\NLBAuth;

/**
 * Main package class.
 */
class NLBKlik
{
    /**
     * Currently supports only logging in by env files.
     * TODO: Implement logging in by API.
     */
    public function __construct(
        private string $username = "",
        private string $password = ""
    )
    {
    }
}

