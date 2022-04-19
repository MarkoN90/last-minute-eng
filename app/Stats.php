<?php

namespace App;

use App\Models\Subscription;
use Illuminate\Support\Facades\DB;

class Stats
{
    /**
     * @return int
     */
    public static function subscriptionCount($dateRange = 'all'): int
    {
        switch ($dateRange) {
            case 'all':
                return count(Subscription::all());

            case 'last week':
                return DB::table('subscriptions')
                    ->whereRaw('created_at - INTERVAL 7 DAY < NOW()')
                    ->count('*');
        }
    }
}
