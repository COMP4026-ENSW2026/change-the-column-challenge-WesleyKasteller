<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterSpeciesPets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pets', function (Blueprint $table){
            $affected = DB::table('pets')
            ->whereIn('specie',['bunny'])
            ->update(
                ['specie'=>'Coelho']
            );
            $affected = DB::table('pets')
            ->whereIn('specie',['dragao de komodo', 'dragão de komodo'])
            ->update(
                ['specie'=>'Dragão de Komodo']
            );
            $affected = DB::table('pets')
            ->whereIn('specie',['mamba', 'mamba-negra', 'cobra'])
            ->update(
                ['specie'=>'Cobra']
            );
            $affected = DB::table('pets')
            ->whereIn('specie',['dog', 'cachorro'])
            ->update(
                ['specie'=>'Cachorro']
            );
            $affected = DB::table('pets')
            ->whereIn('specie',['pikachu', 'squirtle', 'bulbasauro'])
            ->update(
                ['specie'=>'Pokemon']
            );
            $affected = DB::table('pets')
            ->whereIn('specie',['cavalo'])
            ->update(
                ['specie'=>'Cavalo']
            );
            $affected = DB::table('pets')
            ->whereIn('specie',['zebra'])
            ->update(
                ['specie'=>'Zebra']
            );
            $affected = DB::table('pets')
            ->whereIn('specie',['camelo'])
            ->update(
                ['specie'=>'Camelo']
            );
            $affected = DB::table('pets')
            ->whereIn('specie',['papagaio'])
            ->update(
                ['specie'=>'Papagaio']
            );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
