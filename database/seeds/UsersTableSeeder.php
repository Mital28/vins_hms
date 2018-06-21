<?php

use Illuminate\Database\Seeder;
use Laraspace\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();


        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. VIJAY',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'Vadodara',
            'user_image'=>NULL,
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>NULL,
            'last_login_time'=>NULL,
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>NULL,
            'last_name'=>'THAKORE',
            'email'=>'vijay.thakore@allianzcloud.com',
            'status'=>'Active'],

        ]);

         DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. KAUSHIK K.',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'Vadodara',
            'user_image'=>NULL,
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>NULL,
            'last_login_time'=>NULL,
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>NULL,
            'last_name'=>'TRIVEDI',
            'email'=>'kaushik.trivedi@allianzcloud.com',
            'status'=>'Active'],

        ]);

          DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. HEMANT',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'Vadodara',
            'user_image'=>NULL,
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>NULL,
            'last_login_time'=>NULL,
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>NULL,
            'last_name'=>'MATHUR',
            'email'=>'hemant.mathur@allianzcloud.com',
            'status'=>'Active'],

        ]);

        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. MIHIR',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'Vadodara',
            'user_image'=>NULL,
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>NULL,
            'last_login_time'=>NULL,
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>NULL,
            'last_name'=>'ACHARYA',
            'email'=>'mihir.acharya@allianzcloud.com',
            'status'=>'Active'],

        ]);

        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. SUMIT',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'Vadodara',
            'user_image'=>NULL,
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>NULL,
            'last_login_time'=>NULL,
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>NULL,
            'last_name'=>'KAPADIA',
            'email'=>'sumit.kapadia@allianzcloud.com',
            'status'=>'Active'],

        ]);

        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. KETAN',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'Vadodara',
            'user_image'=>NULL,
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>NULL,
            'last_login_time'=>NULL,
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>NULL,
            'last_name'=>'KAPASHI',
            'email'=>'ketan.kapashi@allianzcloud.com',
            'status'=>'Active'],

        ]);

        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. RAJESH',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'Vadodara',
            'user_image'=>NULL,
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>NULL,
            'last_login_time'=>NULL,
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>NULL,
            'last_name'=>'KANTHARIA',
            'email'=>'rajesh.kantharia@allianzcloud.com',
            'status'=>'Active'],

        ]);

         DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. V.C.',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'Vadodara',
            'user_image'=>NULL,
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>NULL,
            'last_login_time'=>NULL,
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>NULL,
            'last_name'=>'CHAUHAN',
            'email'=>'vc.chauhan@allianzcloud.com',
            'status'=>'Active'],

        ]);

          DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. NIRAJ',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'Vadodara',
            'user_image'=>NULL,
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>NULL,
            'last_login_time'=>NULL,
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>NULL,
            'last_name'=>'BHATT',
            'email'=>'niraj.bhatt@allianzcloud.com',
            'status'=>'Active'],

        ]);

         DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. K.C.',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'Vadodara',
            'user_image'=>NULL,
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>NULL,
            'last_login_time'=>NULL,
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>NULL,
            'last_name'=>'PATEL',
            'email'=>'kc.patel@allianzcloud.com',
            'status'=>'Active'],

        ]);

         DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. CHIRAG',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'Vadodara',
            'user_image'=>NULL,
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>NULL,
            'last_login_time'=>NULL,
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>NULL,
            'last_name'=>'MASTER',
            'email'=>'chirag.master@allianzcloud.com',
            'status'=>'Active'],

        ]);
        
        
        



    }
}
