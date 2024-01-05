<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocFetch extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'exceltbl';

    protected $fillable = [

            "title",
			"company",
			"region",
			"country",
			"neartermtarget",
			"netzerotarget",
			"sme",
			"sector",
			"companytemperaturetlignment",
			"ba15Status",
			"targetdescription",
			"action",
			"statustext",
			"actiontype",
			"scopescovered",
			"temperaturealignment",
			"baseyear",
			"targetyear",
			"datepublished",
			"slug"
    ];

    protected $dates = [
        "created_at","updated_at","deleted_at"
    ];
}
