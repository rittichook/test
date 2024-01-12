<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();
        
        View::composer('*', function ($view) {

            $view->with('login', [
                'username' => 'username',
                'password' => 'password',
            ]);

            $view->with('user', [
                'username' => 'username',
                'password' => 'password',
                'student_code' => 'student_code',
                'role' => 'role',
                'user_prefix_name' => 'user_prefix_name',
                'first_name' => 'first_name',
                'last_name' => 'last_name',
                'user_prefix_name_e' => 'user_prefix_name_e',
                'first_name_e' => 'first_name_e',
                'last_name_e' => 'last_name_e',
                'faculty_name' => 'faculty_name',
                'faculty_branch_name' => 'faculty_branch_name',
                'email' => 'email',
                'tel' => 'tel',
                'birthday' => 'birthday',
            ]);
        });
    }
}
