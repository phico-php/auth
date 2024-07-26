<?php

declare(strict_types=1);

namespace Phico\Auth;

use Phico\Http\Request;
use Phico\Middleware\MiddlewareInterface;


class AuthMiddleware implements MiddlewareInterface
{
    function handle(Request $request, callable $next)
    {
        $session = $request->attrs->get('session');
        $user = $session->get('user');

        if (isset($user->id) and !empty($user->id)) {
            return $next($request);
        }

        return response()->redirect('/sign-in');
    }
}
