<?php
use Illuminate\Database\Seeder;


class estudiante extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        for($i = 1; $i < 12; $i ++){

            for($li = 1; $li < 5 ; $li ++){
               
                \DB::table('cursos')->insert($id = array(
                    
                    'grado' => $i,
                    'grupo' => $li,
                ));
            }

        }

    }
}
