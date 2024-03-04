<?php

declare(strict_types=1);

namespace Core\Utils\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Core\Utils\Helpers\Responses\Json\ForceRequestResponseToBeJson;

/**
 * Class `ForceJsonResponseMiddleware`
 *
 * This middleware class forces the response to be in `JSON` format for incoming requests.
 *
 * @package ***`\Core\Utils\Middleware`***
 */
class ForceJsonResponseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\JsonResponse)  $next
     */
    public function handle(Request $request, Closure $next): JsonResponse
    {
        $response = $next($request);

        // Force the response to be treated as JSON
        if ($request->headers->get('Content-Type') === 'application/json') {
            $response = ForceRequestResponseToBeJson::force($response, $response->getStatusCode(), array_merge($response->headers->all(), ['X-TRACE-ID' => $response->headers->get("X-TRACE-ID"), 'X-REQUEST-ID' => $response->headers->get("X-REQUEST-ID")]));
        }

        return $response;
    }
}
