<?php

namespace App\Models\Passport;

use Laravel\Passport\Client as BaseClient;

class Client extends BaseClient
{
    /**
     *
     * Override no método skipsAuthorization() do BaseClient
     *
     * @return bool
     */
    public function skipsAuthorization(): bool
    {
        return true;
    }
}
