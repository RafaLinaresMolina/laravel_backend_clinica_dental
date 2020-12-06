<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
  public function handle(Request $request, Closure $next, ...$roles)
  {
    // User must be authenticated
    $user = Auth::user();

    //Check if roleId exist in desired roles of the middleware
    if(in_array($user->roleId, $roles))
      return $next($request);
    return response()->json(['error' => 'You do not have access to this resource'], 403);
  }
}
