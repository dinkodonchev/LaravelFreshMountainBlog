<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameStatusColumnInIntermediary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('candidate_joboffer', function($t) {
                        $t->renameColumn('status', 'status_per_job');
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('candidate_joboffer', function($t) {
                        $t->renameColumn('status_per_job', 'status');
                });
    }
}
