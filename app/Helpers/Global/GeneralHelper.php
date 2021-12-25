<?php

use Carbon\Carbon;
use phpDocumentor\Reflection\Types\Boolean;

if (! function_exists('appSistema')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function appSistema()
    {
        return config('app.Sistema', 'Guzanet');
    }
}

if (! function_exists('appName')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function appName()
    {
        return config('app.name', 'Laravel Boilerplate');
    }
}

if (! function_exists('carbon')) {
    /**
     * Create a new Carbon instance from a time.
     *
     * @param $time
     * @return Carbon
     *
     * @throws Exception
     */
    function carbon($time)
    {
        return new Carbon($time);
    }
}

if (! function_exists('homeRoute')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function homeRoute()
    {
        if (auth()->check()) {
            if (auth()->user()->isAdmin()) {
                return 'admin.dashboard';
            }

            if (auth()->user()->isUser()) {
                return 'frontend.user.dashboard';
            }
        }
        return 'frontend.index';
    }
}

if (! function_exists('viewDashboard')) {
    /**
     * Return if view Dashboard.
     *
     * @return Boolean
     */
    function viewDashboard()
    {
        if (auth()->check()) {
            // if (auth()->user()->isAdmin()) {
            //     return true;
            // }

            // if (auth()->user()->isUser()) {
            return true;
            // }
        }
        return false;
    }
}
