<?php

namespace AccountManagement;

use Illuminate\Support\ServiceProvider;

class AccountManagementServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishConfig();
    }

    private function publishConfig()
    {
        $this->publishes([
            __DIR__.'/config' => base_path('config'),
        ]);
    }
}
