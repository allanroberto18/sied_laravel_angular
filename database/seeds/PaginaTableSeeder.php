<?php

use Illuminate\Database\Seeder;

class PaginaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Pagina::class, 1)->create();
    }
}
