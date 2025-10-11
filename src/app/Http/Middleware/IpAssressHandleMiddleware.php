<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IpAssressHandleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ipAddressList = $this->getIpAddressList();
        $accessedIpAddress = request()->ip();

        if (!($ipAddressList->contains($accessedIpAddress))){
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        return $next($request);
    }

    private function getIpAddressList()
    {
        $ipAdressStringLine = config('custom.IP_ADDRESS_STRING_ARRAY');
        
        return explode(' ', $ipAdressStringLine);
    }
}
