<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForwardSubdomainRequests
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $domain = trim(str_replace(['https://', 'http://'], [], config('app.url')), '/');
        $slug = str_replace($domain, '', $request->getHttpHost());

        if (! empty($slug)) {
            // Drop the trailing .
            $slug = substr($slug, 0, -1);

            // Replace remaining . with / (to allow for aws.account.consoles.dev
            // forwarding to consoles.dev/aws/account)
            $slug = str_replace('.', '/', $slug);

            return redirect(config('app.url').'/'.$slug);
        }

        return $next($request);
    }
}
