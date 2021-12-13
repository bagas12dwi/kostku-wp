<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ViewAlternativeReal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement($this->dropView());
    }


    private function createView(): string{
        return <<<SQL
            CREATE VIEW view_alternative_real AS 
                SELECT id, alternatif, alternatives.harga, CONCAT(alternatives.jarak, ' km') AS jarak, 
                CASE 
                    WHEN fasilitas = 1 THEN "Kasur, Lemari, Wifi"
                    WHEN fasilitas = 2 THEN "Kasur, Lemari, Wifi, Meja"
                    WHEN fasilitas = 3 THEN "Kasur, Lemari, Wifi, Meja, Kipas Angin"
                    WHEN fasilitas = 4 THEN "Kasur, Lemari, Wifi, Meja, AC"
                    WHEN fasilitas = 5 THEN "Kasur, Lemari, Wifi, Meja, AC, TV"
                END AS fasilitas,
                CASE 
                    WHEN luas = 1 THEN "2 x 3"
                    WHEN luas = 2 THEN "3 x 3"
                    WHEN luas = 3 THEN "3 x 4"
                    WHEN luas = 4 THEN "4 x 4"
                    WHEN luas = 5 THEN "4 x 5"
                END AS luas, alternatives.image
                FROM alternatives;
            SQL;
    }


    private function dropView(): string{
        return <<<SQL
            DROP VIEW 'view_alternative_real';
            SQL;
    }

}
