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
            "isin",
            "lei",
			"region",
			"country",
			"neartermtarget",
			"netzerotarget",
			"sector",
			"ba15Status",
			"targetdescription",
			"action",
			"statustext",
			"actiontype",
			"scopescovered",
			"temperaturealignment",
			"baseyear",
			"targetyear",
			"slug",
            "extension",
            "commitment_type",
            "commitment_deadline",
            "statustext",
            "reason_for_commitment_extension_removal",
            "full_target_language",
            "submission_type",
			"companytemperaturetlignment",
            "target",
            "target_wording",
            "scopescovered",
            "target_value",
            "type",
            "sub_type",
            "target_classification",
            "year_type",
            "datepublished",
            "near_term_status",
            "net_zero_status",
			"ba15Status",

    ];

    protected $dates = [
        "created_at","updated_at","deleted_at"
    ];
}
