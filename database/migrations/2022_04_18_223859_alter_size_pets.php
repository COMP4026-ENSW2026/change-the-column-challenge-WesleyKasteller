<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterSizePets extends Migration
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
            ->whereIn('size',['sm', 'small', 'SMALL'])
            ->update(
                ['size'=>'SM']
            );
            $affected = DB::table('pets')
            ->whereIn('size',['large', 'l', 'LARGE'])
            ->update(
                ['size'=>'L']
            );
            $affected = DB::table('pets')
            ->whereIn('size',['m', 'medium', 'MEDIUM'])
            ->update(
                ['size'=>'M']
            );
            $affected = DB::table('pets')
            ->whereIn('size',['xl', 'extra large', 'EXTRA LARGE'])
            ->update(
                ['size'=>'XL']
            );
            $affected = DB::table('pets')
            ->whereIn('size',['xs', 'extra small', 'EXTRA SMALL'])
            ->update(
                ['size'=>'XS']
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
