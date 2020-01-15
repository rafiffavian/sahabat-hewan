<?php

use Illuminate\Database\Seeder;
use App\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facker = Faker\Factory::create();
        $limit = 2;
        for ($i=0; $i <= $limit ; $i++) { 
            
            Doctor::insert([
                'name' => $facker->name ,
                'no_tlp' => $facker->phoneNumber ,
                'kelurahan' => $facker->streetName ,
                'kota' => $facker->city ,
                'kecamatan' => $facker->country ,
                'image' => $facker->image('public/doctorimage', 200, 200, null, false) ,
                'url' => 'https://www.google.co.id/maps/place/Susukan,+Kec.+Ciracas,+Kota+Jakarta+Timur,+Daerah+Khusus+Ibukota+Jakarta/@-6.3182996,106.8522854,14z/data=!3m1!4b1!4m5!3m4!1s0x2e69ed0b4bf19227:0xe64b7baf7ccbcfb7!8m2!3d-6.315539!4d106.8679899',
                
                ]);
            }
        }
}
