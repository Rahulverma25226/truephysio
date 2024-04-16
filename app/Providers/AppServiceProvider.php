<?php

namespace App\Providers;

use App\Http\Controllers\VariableController;
use App\Models\VariableModel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $object= new VariableController();
        $data =$object->variable();


        $comp_name = $data->comp_name;
        $comp_phone =  $data->comp_phone;
        $comp_email1 =  $data->comp_email1;
        $comp_email2 =  $data->comp_email2;
        $comp_branch1 =  $data->comp_branch1;
        $comp_branch2 =  $data->comp_branch2;
        $comp_branch3 =  $data->comp_branch3;
        $comp_branch4 =  $data->comp_branch4;
        $comp_branch5 =  $data->comp_branch5;
        $comp_branch6 =  $data->comp_branch6;
        $comp_branch7 =  $data->comp_branch7;

        View::share('comp_name', $comp_name);
        View::share('comp_phone', $comp_phone);
        View::share('comp_email1', $comp_email1);
        View::share('comp_email2', $comp_email2);
        View::share('comp_branch1', $comp_branch1);
        View::share('comp_branch2', $comp_branch2);
        View::share('comp_branch3', $comp_branch3);
        View::share('comp_branch4', $comp_branch4);
        View::share('comp_branch5', $comp_branch5);
        View::share('comp_branch6', $comp_branch6);
        View::share('comp_branch7', $comp_branch7);
    }
}
