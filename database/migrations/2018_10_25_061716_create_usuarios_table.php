<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Usuario', function (Blueprint $table) {
          /*
          DB:statement(" Create table Usuario(
                CodigoUsuario int auto_increment not null,
                Usuario varchar(15),
                PassW varchar(10),
                Nivel int,
                primary key(CodigoUsuario)
            );");
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Usuario', function (Blueprint $table) {
            //
        });
    }
}
