<?php

use Illuminate\Database\Seeder;
use App\Student;
class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->delete();
        // for ($i=1; $i <=500; $i++) {

        //     $faker = Faker\Factory::create();
        //     $std=new Student;
        //     $std->fname=$faker->firstNameMale ;
        //     $std->lname=$faker->lastName ;
        //     $std->email=$faker->email ;
        //     $std->password=$faker->password ;
        //     $std->address=$faker->address ;
        //     $std->image='http://lorempixel.com/800/600/cats/' ;
        //     $std->city=$faker->city ;
        //     $std->company=$faker->company ;
        //     $std->phone_no=$faker->e164PhoneNumber ;
        //     $std->postal_code=$faker->postcode ;
        //     $std->save();

        // }
     

    }
}
