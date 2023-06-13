<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if ($request->is('api/*')) {
                header('Content-Type: application/json');
                header('HTTP/1.1 401 Unauthorized');
                echo json_encode(['success' => false, 'message' => 'Unauthorized']);
                exit;
            }
            return redirect()->route('login');
        }
        return response()->json(['message' => 'Unauthorized'], 401);
    }
}
