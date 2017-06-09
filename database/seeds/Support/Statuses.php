<?php

use Illuminate\Database\Seeder;

class Statuses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('support_statuses')->insert([
         // Ticket Statuses
         // Open
         'title' => 'Open',
         'color' => '#779500',
         'sortorder'	=> '1',
         'showactive'	=> '1',
         'showawating'	=> '1',
         'autoclose'	=> '0',

         // Answered
         'title' => 'Answered',
         'color' => '#000000',
         'sortorder' => '2',
         'showactive' => '1',
         'showawating' => '0',
         'autoclose' => '1',

         // Customer-Reply
         'title' => 'Customer-Reply',
         'color' => '#ff6600',
         'sortorder' => '3',
         'showactive' => '1',
         'showawating' => '1',
         'autoclose' => '1',

         // Closed
         'title' => 'Closed',
         'color' => '#888888',
         'sortorder' => '10',
         'showactive' => '0',
         'showawating' => '0',
         'autoclose' => '0',

         // On Hold
         'title' => 'On Hold',
         'color' => '#224488',
         'sortorder' => '5',
         'showactive' => '1',
         'showawating' => '0',
         'autoclose' => '0',

         // In Progress
         'title' => 'In Progress',
         'color' => '#cc0000',
         'sortorder' => '6',
         'showactive' => '1',
         'showawating' => '0',
         'autoclose' => '0',
       ]);
    }
}
