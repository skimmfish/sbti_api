<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DocFetch>
 */
class DocFetchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

			"title"=>$this->faker->title,
			"company"=>$this->faker->name,
			"region" => $this->faker->name,
			"country" =>$this->faker->country(),
			"neartermtarget" => 90.49,
			"netzerotarget" => 200.40,
			"sme" => "Company",
			"sector" => "Retailing",
			"companytemperaturetlignment" => 34.5,
			"ba15Status" => false,
			"targetdescription" => "Chalhoub Group commits to reduce absolute scope 1 and 2 GHG emissions\n50.4% by 2032 from a 2021 base year.* Chalhoub Group also commits to\nreduce absolute scope 3 GHG emissions from purchased goods and\nservices, upstream transport and distribution, upstream leased assets and\ninvestments 30% within the same timeframe.*\n*The target boundary includes land-related emissions and removals from\nbioenergy feedstocks.",
			"action" => "Target",
			"statustext" => "NA",
			"actiontype" => "Absolute",
			"scopescovered" => "1+2",
			"temperaturealignment" => "1.5\u00b0C",
			"baseyear" => $this->faker->year(),
			"targetyear" => $this->faker->year,
			"datepublished" => $this->faker->date(),
			"slug" => "chalhoub-group",
            "created_at" => date('Y-m-d h:i:s',time()),
            "updated_at" => date('Y-m-d h:i:s',time())
        ];
    }
}
