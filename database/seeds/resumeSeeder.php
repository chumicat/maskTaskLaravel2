<?php

use Illuminate\Database\Seeder;
use App\Resume as Resume;

class resumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // You can run this seeder after create a db
        // This function can create some fake data
        // sequel pro-test

        //need set database as nullable
        // ...->commant()->nullable();

        $newResume = new Resume();
        $newResume->name = "Russell";
        $newResume->phoneNumber = "0900000999";
        $newResume->birthday = "19960131";
        $newResume->address = "home";
        $newResume->resume = 'hello world';
        //$newResume->resumetyp = 'english';
        $newResume->save();
    }
}
