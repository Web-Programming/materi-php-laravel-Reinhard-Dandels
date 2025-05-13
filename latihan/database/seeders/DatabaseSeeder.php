<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
          //  'name' => 'Test User',
            //'email' => 'test@example.com',
        //]);
            //insert data mahasiswa
         //DB::table('users')->insert([
           // 'name' => Str::random(10),
           // 'email' => Str::random(10).'@example.com',
           // 'password' => Hash::make('password'),
              
       // ]);
        //insert data mahasiswa query builder
        //DB::table('mahasiswa')->insert(
           // [
            //    'npm' => '2428250040',
             //   'nama'=> 'reinhard Dandel',
             //   'tempat_lahir' => '2006-01-01',
            //    'alamat' => 'palembang',
           //     'create_at' => date("Y-m-d H:i:s")
           // ]

       // );

        DB:: table ('mahasiswa')

             ->where('npm',"2428250040")
             ->update(["npm" => 2428250060]);

            Mahasiswa ::insert(
            [
                'npm' => '2428250040',
                'nama'=> 'reinhard Dandel',
                'tempat_lahir' => '2006-01-01',
                'alamat' => 'palembang',
                'create_at' => date("Y-m-d H:i:s")

            ]);

                
            
         // retirve all data
         Mahasiswa::all()
         Mahasiswa::where('id','<',3)->get();//select *from mahasiswa where id < 3
         Mahasiswa::select('npm','nama')->get();//select npm nama from mahasiswa

    }
}
