<?php namespace JoeCianflone\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class CheckForMaintenanceMode
{

    protected $request;
    protected $app;

    public function __construct(Application $app, Request $request)
    {
        $this->app = $app;
        $this->request = $request;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->app->isDownForMaintenance())
        {
            return response()->view('brb');
        }

        return $next($request);
    }
}
