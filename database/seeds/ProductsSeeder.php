<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            0=>[
                'name'=>'Arroz',
                'user_id'=>1,
                'unit_id'=>1
            ],
            1=>[
                'name'=>'Farinha',
                'user_id'=>1,
                'unit_id'=>2
            ],
            2=>[
                'name'=>'Vassoura',
                'user_id'=>1,
                'unit_id'=>3
            ],
            3=>[
                'name'=>'Guarana',
                'user_id'=>1,
                'unit_id'=>4
            ],
            4=>[
                'name'=>'Leite Condensado',
                'user_id'=>1,
                'unit_id'=>5
            ]
        ];
        DB::table('products')->insert($products);
    }
}
