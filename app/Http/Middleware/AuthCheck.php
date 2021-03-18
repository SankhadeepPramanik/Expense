<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // if(!session()->has('udata') && ($request->path()!='ulogin' && $request->path()!='createuser'))
        // {
        //     return redirect('ulogin')->with('fail','you must logged in');

        // }
        // if(session()->has('udata') && ($request->path()!='ulogin' || $request->path()!='createuser'))
        // {
        //     return back();
            //echo "hi from";
            $path=$request->path();
            if( ($path=='ulogin' || $path=='createuser') && Session::get('udata') ){
                return redirect('home');
            }
            elseif( ($path=='ulogin' || $path=='createuser') && Session::get('adata') ){
              return redirect('admindashbord');
          }
            else if( ($path!='ulogin' && !Session::get('udata') ) && ($path!='createuser' && !Session::get('udata')) && ($path!='ulogin' && !Session::get('adata') ) && ($path!='createuser' && !Session::get('adata')))
          {
            return redirect('ulogin');

          }

            return $next($request);



        }



    }

