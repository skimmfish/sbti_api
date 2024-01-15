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
            $table->string("isin",128)->nullable();
            $table->string("lei",128)->nullable();
            $table->string('region',72)->nullable();
            $table->string('country',32)->nullable()->nullable();
            $table->string('organization_type')->nullable();
            $table->string('target')->nullable();
            $table->string('target_wording')->nullable();
            $table->string('commitment_type')->nullable();
            $table->string('commitment_deadline')->nullable();
            $table->string('reason_for_commitment_extension_removal')->nullable();
            $table->string('target_classication')->nullable();
            $table->string('sector')->nullable();
            $table->string('companytemperaturealignment')->nullable();
            $table->string('companytemperature')->nullable();
            $table->string('targetdescription')->nullable()->nullable();
            $table->string('submission_type')->nullable()->nullable();
            $table->string('ba15Status')->nullable()->nullable();
            $table->string('ba15date')->nullable()->nullable();
            $table->string('type')->nullable();
            $table->string('statustext')->nullable();
            $table->string('action')->nullable();
            $table->string('near_term_status')->nullable();
            $table->string('net_zero_status')->nullable();
            $table->string('scopescovered')->nullable();
            $table->string('temperaturealignment')->nullable()->nullable();
            $table->string('baseyear')->nullable();
            $table->string('targetyear')->nullable();
            $table->string('datepublished')->nullable();
            $table->string('sub_type')->nullable();
            $table->string('full_target_language')->nullable();
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
