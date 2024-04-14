<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'name'=> 'interview',
            'date'=> '2024-07-13 00:00:00',
            'from'=> '15:17:00',
            'to'=> '14:00:00',
            'description'=> 'meeting',
            'user_id'=> 18,
            'status_id'=> 1,
        ]);
        Event::create([
            'name'=> 'interview',
            'date'=> '2024-07-13 00:00:00',
            'from'=> '15:18:00',
            'to'=> '16:00:00',
            'description'=> 'meeting',
            'user_id'=> 18,
            'status_id'=> 1,
        ]);
        Event::create([
            'name'=> 'interview',
            'date'=> '2024-07-13 00:00:00',
            'from'=> '15:17:00',
            'to'=> '14:00:00',
            'description'=> 'meeting',
            'user_id'=> 18,
            'status_id'=> 1,
        ]);
        Event::create([
            'name'=> 'interview',
            'date'=> '2024-07-13 00:00:00',
            'from'=> '15:18:00',
            'to'=> '16:00:00',
            'description'=> 'meeting',
            'user_id'=> 18,
            'status_id'=> 1,
        ]);
        Event::create([
            'name'=> 'interview',
            'date'=> '2024-07-13 00:00:00',
            'from'=> '15:19:00',
            'to'=> '14:00:00',
            'description'=> 'meeting',
            'user_id'=> 18,
            'status_id'=> 2,
        ]);

        Event::create([
            'name'=> 'interview',
            'date'=> '2024-07-13 00:00:00',
            'from'=> '15:19:00',
            'to'=> '14:00:00',
            'description'=> 'meeting',
            'user_id'=> 18,
            'status_id'=> 2,
        ]);

        

        Event::create([
            'name'=> 'interview',
            'date'=> '2024-07-13 00:00:00',
            'from'=> '15:19:00',
            'to'=> '14:00:00',
            'description'=> 'meeting',
            'user_id'=> 18,
            'status_id'=> 2,
        ]);

        

        Event::create([
            'name'=> 'interview',
            'date'=> '2024-07-13 00:00:00',
            'from'=> '15:19:00',
            'to'=> '14:00:00',
            'description'=> 'meeting',
            'user_id'=> 18,
            'status_id'=> 2,
        ]);

        

        Event::create([
            'name'=> 'interview',
            'date'=> '2024-07-13 00:00:00',
            'from'=> '15:19:00',
            'to'=> '14:00:00',
            'description'=> 'meeting',
            'user_id'=> 18,
            'status_id'=> 2,
        ]);

        


    }
}
