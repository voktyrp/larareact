<?php
use App\Date;
use Illuminate\Database\Seeder;

class DateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Date::class, 1)->create();
    }
}
