<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ViewHasil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        \DB::statement($this->createView());

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        \DB::statement($this->dropView());

    }

    private function createView(): string{
        return <<<SQL
            CREATE VIEW view_hasil AS
            SELECT a.alternatif, b.harga, b.jarak, b.fasilitas, b.luas, s.S, S_sum.sum, ROUND(s.S/S_sum.sum, 2) AS v
            FROM view_alternative_count a
            INNER JOIN view_alternative_real b ON a.id = b.id
            CROSS JOIN (
                SELECT a.id,
                    ROUND((pow(a.harga, (-0.4)))*(pow(a.jarak, (-0.3)))*(pow(a.fasilitas, 0.2))*(pow(a.luas, 0.1)), 3) AS S
                FROM view_alternative_count a
            ) s ON a.id = s.id
            CROSS JOIN (
                SELECT a.id, ROUND((pow(a.harga, (-0.4)))*(pow(a.jarak, (-0.3)))*(pow(a.fasilitas, 0.2))*(pow(a.luas, 0.1))/SUM((pow(a.harga, (-0.4)))*(pow(a.jarak, (-0.3)))*(pow(a.fasilitas, 0.2))*(pow(a.luas, 0.1))), 3) AS sum FROM view_alternative_count a
                GROUP BY a.harga, a.jarak, a.fasilitas, a.luas, a.id
            ) AS S_sum
            GROUP BY b.harga, b.jarak, b.fasilitas, b.luas, s.S, S_sum.sum, a.alternatif;
        SQL;
    }

    private function dropView(): string{
        return <<<SQL
            DROP VIEW 'view_hasil';
            SQL;
    }
}
