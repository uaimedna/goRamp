<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderLetters = ['A', 'B', 'C', 'D', 'E', 'F'];

        foreach ($orderLetters as $index => $letter) {
            for ($i = 0; $i < 3; $i++) {
                DB::table('orders')->insert([
                    'name' => 'Order ' . $letter . ($i + 1),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'deleted_at' => (rand(0, 100) > 20) ? null : date('Y-m-d H:i:s'),
                    'user_id' => $index + 1
                ]);
            }
        }
    }
}
