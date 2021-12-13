<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ViewAlternativeForCount extends Migration
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
            CREATE VIEW view_alternative_count AS 
                SELECT id, alternatif, 
                CASE 
                    WHEN alternatives.harga <= 500000 THEN 5
                    WHEN alternatives.harga >= 500001 AND alternatives.harga <= 1000000 THEN 4
                    WHEN alternatives.harga >= 1000001 AND alternatives.harga <= 1500000 THEN 3
                    WHEN alternatives.harga >= 1500001 AND alternatives.harga <= 2000000 THEN 2
                    WHEN alternatives.harga > 2000000 THEN 1
                END AS harga,
                CASE
                    WHEN jarak <= 0.5 THEN 5
                    WHEN jarak <= 1 THEN 4
                    WHEN jarak <= 1.5 THEN 3
                    WHEN jarak <= 2 THEN 2
                    WHEN jarak > 2 THEN 1
                END AS jarak,
                fasilitas, luas
                FROM alternatives;
            SQL;
    }


    private function dropView(): string{
        return <<<SQL
            DROP VIEW 'view_alternative_count';
            SQL;
    }
}
