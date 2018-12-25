<?php

namespace app\http\middleware;

class Auth
{
    public function handle($request, \Closure $next)
    {
		
		if (!$request->param('name')) {
			
			//return json(111);die;
			
            return redirect('hello');
        }

        return $next($request);
		
    }
}
