<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advocates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profile_pic');
            $table->text('short_bio');
            $table->longText('long_bio');
            $table->float('advocate_years_exp');
            $table->foreignId('company_id')->constraint('companies')->onDelete('cascade');
            
            $table -> string('youtube');
            $table -> string('twitter');
            $table -> string('github');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advocates');
    }
};
