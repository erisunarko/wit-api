<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableChartData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_chart_data', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('time');
            $table->string('stress_level');
            $table->timestamps();
        });

        // DB::table(`table_chart_data`)->insert(array(
        //     array(`id_user` => `1`,`time` => `08:00`,`stresslevel` => `60`),
        //     array(`id_user` => `1`, `time` => `12:00`,`stresslevel` => `70`),
        //     array(`id_user` => `1`, `time` => `15:00`,`stresslevel` => `50`),
        //     array(`id_user` => `1`, `time` => `18:00`,`stresslevel` => `40`),
        // ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_chart_data');
    }
}
