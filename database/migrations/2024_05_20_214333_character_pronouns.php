<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CharacterPronouns extends Migration
{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            // Add columns
            Schema::table('character_profiles', function (Blueprint $table) {
                $table->string('pronoun', 100)->nullable($value = true);
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::table('character_profiles', function (Blueprint $table) {
                //
                $table->dropColumn('pronoun');
            });
        }
    }
