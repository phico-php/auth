<?php

declare(strict_types=1);

namespace Phico\Auth;

use Phico\Http\Request;
use Phico\Middleware\MiddlewareInterface;


class AuthMiddleware implements MiddlewareInterface
{
    function handle(Request $request, callable $next)
    {
        // @TODO accept config of allowed routes
        $session = $request->attrs->get('session');
        $user = $session->get('user');

        if (is_null($user) or !isset($user->id)) {
            // @TODO pass this url by config
            return response()->redirect('/sign-in');
        }

        return $next($request);
    }
}
