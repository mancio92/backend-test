<?php

use Illuminate\Database\Seeder;
use App\Label;


class LabelSeeder extends Seeder
{

    public function run()
    {
        Label::create([ 'name' => 'label1']);
        Label::create([ 'name' => 'label2']);
        Label::create([ 'name' => 'label3']);
        Label::create([ 'name' => 'label4']);
    }
}
