<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookedResourcesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            `title` => 'Jones Sculture Project ',
            `start_date` => '2021-11-09 08:00:00',
            `end_date` => '2021-11-12 15:00:00',
            `background_color` => 'blue',
            `text_color` => 'white',
            `user_name` => 'Bob Maholic',
            `resource_title` => 'Welding Unit 01',
            `location` => 'Boulder',
            `executed` => 0,
            `cancelled` => 0,
            `billable` => 0,
            `cancellation_rule` => 0,
            `created_at` => NULL,
            `updated_at` => now(),
VALUES
	'Jones Sculture Project ', 
    '2021-11-09 08:00:00', 
    '2021-11-12 15:00:00', 
    'blue', 
    'white', 
    'Bob Maholic', 
    'Welding Unit 01', 
    'Boulder', 
    0, 
    0, 
    0, 
    0, 
    NULL, 
    '2021-11-12 23:15:10'

	'Davidson Gate Repair', 
    '2021-11-03 08:00:00', 
    '2021-11-06 10:00:00', 
    'red', 'black', 
    'Dave Wilks', 
    'Welding Unit 02', 
    'Boulder', 
    0, 
    0, 
    0, 
    0, 
    NULL, 
    '2021-11-12 21:33:42'

    
	(3, 'Sculpture Clean Up', '2021-11-08 12:00:00', '2021-11-10 19:00:00', 'yellow', 'black', 'Mike Jones', 'Sandblasting Unit 01', 'Superior', 0, 0, 0, 0, NULL, '2021-11-12 23:15:12'),
	(4, 'Powder Coating Parts', '2021-11-20 10:00:00', '2021-11-21 08:00:00', 'orange', 'black', 'Donna Ecke', 'Powder Coating Oven', 'Superior', 0, 0, 0, 0, NULL, '2021-11-12 20:01:16'),
	(5, 'Bisque Firing Cups', '2021-11-15 12:00:00', '2021-11-19 19:00:00', 'black', 'white', 'Sharon White', 'Small Electric Kiln', 'Boulder', 0, 0, 0, 0, NULL, '2021-11-12 22:03:35'),
	(6, 'Glaze Firing (pre-sale)', '2021-11-23 13:00:00', '2021-11-25 09:00:00', 'purple', 'yellow', 'Dave Thomas', 'Fiber Gas Kiln', 'Boulder', 0, 0, 0, 0, NULL, '2021-11-12 21:33:51'),
	(7, 'Glaze firing (Class work)', '2021-11-25 08:00:00', '2021-11-27 12:00:00', 'green', 'black', 'Karen Smith', 'Brick Gas Kiln', 'Boulder', 0, 0, 0, 0, NULL, NULL),
	(8, 'Test', '2021-12-01 00:00:00', '2021-12-08 00:00:00', 'red', 'black', 'Bob108', 'Test Resource', 'Here', 0, 0, 0, NULL, '2021-12-08 01:30:36', '2021-12-08 03:24:35'),
	(9, 'Sand Blasting Sign', '2021-12-14 00:00:00', '2021-12-16 00:00:00', 'yellow', 'black', 'Carol', 'Sandblasting unit 02', 'Seattle', 0, 0, 0, NULL, '2021-12-08 03:09:06', '2021-12-09 22:29:16'),
	(10, 'Class Bisque Firing', '2021-12-21 00:00:00', '2021-12-23 00:00:00', 'orange', 'black', 'Scott', 'Large Electric Kiln', 'Seattle', 0, 0, 0, NULL, '2021-12-08 03:24:14', '2021-12-08 03:24:23');

            //
        ];
    }
}
