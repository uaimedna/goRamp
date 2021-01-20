<?php

use Illuminate\Database\Seeder;
use Silber\Bouncer\BouncerFacade as Bouncer;
use \App\Orders;

class BouncerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bouncer::allow('role-a')->to('viewAllWithTrash', Orders::class);
        Bouncer::allow('role-b')->to('viewAll', Orders::class);
        Bouncer::allow('role-c')->to('viewCurrentUser', Orders::class);
        Bouncer::allow('role-d')->to('viewTrash', Orders::class);
    }
}
