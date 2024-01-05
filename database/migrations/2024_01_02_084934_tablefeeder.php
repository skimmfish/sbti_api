<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exceltbl', function (Blueprint $table) {
            $table->id();
            $table->string("title",128)->nullable();
            $table->string("company",128)->nullable();
            $table->string('region',72)->nullable();
            $table->string('country',32)->nullable()->index();
            $table->double('neartermtarget')->index();
            $table->double('netZeroTarget')->index();
            $table->string('sme')->index();
            $table->string('sector')->index();
            $table->string('companytemperaturealignment')->nullable();
            $table->string('ba15Status')->nullable()->index();
            $table->string('targetdescription')->nullable()->index();
            $table->string('action',32)->nullable()->index();
            $table->string('statustext')->index();
            $table->string('actiontype')->index();
            $table->string('scopescovered')->index();
            $table->string('temperaturealignment')->index()->nullable();
            $table->string('baseyear')->index();
            $table->string('targetyear')->index();
            $table->string('datepublished')->index();
            $table->string('slug',32)->index()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exceltbl');
    }
};
