<?php 

echo "insertando un nuevo usuario";

DB::table('users')->insert(array(
            array(
                'id' => '1',
                'usuario' => 'administrador',
                'password'  =>	bcrypt('admin')
            )
        ));

 ?>