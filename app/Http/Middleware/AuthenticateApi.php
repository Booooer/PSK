<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateApi extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function authenticate($request, array $guards)
    {
        $token = $request->query('api_token') || $request->input('api_token');

        if (empty($token)) {
            $token = $request->bearerToken();
        }

        if (empty($token)) {
            $token = $request->header('Authorization');
        }

        if ($token === config('api_tokens')[0]) {
            return;
        }

        die("Unauthorized");
    }
}
