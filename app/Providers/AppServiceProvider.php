<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

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
        // Получаем текущую дату
        $currentDate = date('Y-m-d');

        // Общее количество заказов за сегодня
        $countToday = DB::table('orders')
            ->whereDate('created_at', $currentDate)
            ->count();

        // Общее количество заказов за текущий месяц
        $countMonth = DB::table('orders')
            ->whereYear('created_at', '=', date('Y'))
            ->whereMonth('created_at', '=', date('m'))
            ->count();

        // Общее количество заказов за текущий год
        $countYear = DB::table('orders')
            ->whereYear('created_at', '=', date('Y'))
            ->count();

        View::share('countToday', $countToday);
        View::share('countMonth', $countMonth);
        View::share('countYear', $countYear);
    }
}
