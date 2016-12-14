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
        $pagina = factory(\App\Models\Pagina::class, 1)->create();

        factory(\App\Models\PaginaCaracteristica::class, 9)->create([
            'pagina_id' => $pagina->id
        ]);
    }
}
