<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Label;
use App\Show;

class ShowSeeder extends Seeder
{

    public function run()
    {
        Show::create([
            'name' => 'show2',
            'description' => 'lorem ipsum',
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now(),
            'label_id' => 1,
        ]);

        Show::create([
            'name' => 'show2',
            'description' => 'lorem ipsum',
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now(),
            'label_id' => 2
        ]);

        Show::create([
            'name' => 'show2',
            'description' => 'lorem ipsum',
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now(),
            'label_id' => 3
        ]);
    }
}
