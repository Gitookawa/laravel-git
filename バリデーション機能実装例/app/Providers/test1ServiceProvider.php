<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class test1ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
	    View::composer(
		    'test1.index',function($view){
			    $view->with('view_message','composer message!');
			    $view->with('message3','THE MESSAGE!');//追加する!!

		    }
	    );
	     
         /*  View::composer(
                    'test1.index',function($view){
                            $view->with('message3',' THE MESSAGE!');
                    }
	    );*/

    }

}
