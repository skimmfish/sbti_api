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
            $table->string('country',32)->nullable()->nullable();
            $table->string('neartermtarget')->nullable();
            $table->string('neartermtarget_classification')->nullable();
            $table->string('neartermtarget_year')->nullable();
            $table->string('longtermtarget_status')->nullable();
            $table->string('longtermtarget_classification')->nullable();
            $table->string('longtermtarget_year')->nullable();
            $table->string('netzerocommitted')->nullable();
            $table->string('netzerotarget')->nullable();
            $table->string('sme')->nulable();
            $table->string('sector')->nullable();
            $table->string('companytemperaturealignment')->nullable();
            $table->string('companytemperature')->nullable();
            $table->string('ba15Status')->nullable()->nullable();
            $table->string('targetdescription')->nullable()->nullable();
            $table->string('action')->nullable()->nullable();
            $table->string('statustext')->nullable();
            $table->string('actiontype')->nullable();
            $table->string('scopescovered')->nullable();
            $table->string('temperaturealignment')->nullable()->nullable();
            $table->string('baseyear')->nullable();
            $table->string('targetyear')->nullable();
            $table->string('datepublished')->nullable();
            $table->string('slug')->nullable()->nullable();
            $table->string('extension')->nullable();
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
