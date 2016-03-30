<?php

use Illuminate\Database\Seeder;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            0=>[
                'name'=>'Kilograma',
                'user_id'=>1
            ],
            1=>[
                'name'=>'Grama',
                'user_id'=>1
            ],
            2=>[
                'name'=>'Unidade',
                'user_id'=>1
            ],
            3=>[
                'name'=>'Litro',
                'user_id'=>1
            ],
            4=>[
                'name'=>'Lata',
                'user_id'=>1
            ]
        ];
        DB::table('units')->insert($units);
    }
}
