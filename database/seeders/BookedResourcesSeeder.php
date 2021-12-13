<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookedResource;

class BookedResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $booked = [
        [
            'title' => 'Jones Sculture Project ',
            'start_date' => '2021-12-09 08:00:00',
            'end_date' => '2021-12-12 15:00:00',
            'background_color' => 'blue',
            'text_color' => 'white',
            'user_name' => 'Bob Maholic',
            'resource_title' => 'Welding Unit 01',
            'location' => 'Boulder',
            'executed' => 0,
            'cancelled' => 0,
            'billable' => 0,
            'cancellation_rule' => 0,
            'created_at' => NULL,
            'updated_at' => now(),
        ],
        [
            'title' => 'Davidson Gate Repair',
            'start_date' => '2021-12-03 08:00:00',
            'end_date' => '2021-12-06 15:00:00',
            'background_color' => 'red',
            'text_color' => 'black',
            'user_name' => 'David Wilks',
            'resource_title' => 'Welding Unit 02',
            'location' => 'Superior',
            'executed' => 0,
            'cancelled' => 0,
            'billable' => 0,
            'cancellation_rule' => 0,
            'created_at' => NULL,
            'updated_at' => now(),
        ],
        [
            'title' => 'Powder Coating Parts',
            'start_date' => '2021-12-20 08:00:00',
            'end_date' => '2021-12-21 15:00:00',
            'background_color' => 'yellow',
            'text_color' => 'black',
            'user_name' => 'Don Smith',
            'resource_title' => 'Sandblasting Unit 01',
            'location' => 'Golden',
            'executed' => 0,
            'cancelled' => 0,
            'billable' => 0,
            'cancellation_rule' => 0,
            'created_at' => NULL,
            'updated_at' => now(),
        ]
        ];

        BookedResource::insert($booked);
    }
}
