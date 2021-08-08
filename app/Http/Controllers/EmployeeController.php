<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function store(Request $request){
            dd($request->all());
            // array:73 [
            //     "employee_name" => null
            //     "employee_status" => null
            //     "employee_department" => null
            //     "designation" => null
            //     "basic_salary" => null
            //     "gross_salary" => null
            //     "tin" => null
            //     "employee_image" => null
            //     "mobile_number" => "01725760300"
            //     "emergency_mobile_number" => null
            //     "email" => "fahimkhanmpi373950@gmail.com"
            //     "joining_date" => null
            //     "father_name" => null
            //     "mother_name" => null
            //     "nid_number" => null
            //     "religion" => null
            //     "blood_group" => null
            //     "gender" => null
            //     "bank_name" => null
            //     "bank_account_number" => null
            //     "weekly_off_day" => null
            //     "permanent_address" => "kulaura moulvibazar"
            //     "present_address" => null
            //     "education__eduction_level" => null
            //     "education__major_group" => null
            //     "education__institute" => null
            //     "education__country" => null
            //     "education__result_type" => null
            //     "education__result" => null
            //     "education__passing_year" => null
            //     "education__duration" => null
            //     "education__achievement" => null
            //     "training__training_title" => null
            //     "training__topics_covered" => null
            //     "training__institute" => null
            //     "training__training_type" => null
            //     "training__country" => "Bangladesh"
            //     "training__location" => null
            //     "training__training_year" => null
            //     "training__duration" => null
            //     "experience__company_name" => null
            //     "experience__department" => null
            //     "experience__position_held" => null
            //     "experience__responsibility" => null
            //     "experience__experience_area" => null
            //     "experience__from_date" => null
            //     "experience__to_date" => null
            //     "experience__company_address" => null
            //     "relative__name" => null
            //     "relative__relation_type" => null
            //     "relative__occupation" => null
            //     "relative__gender" => null
            //     "relative__address" => "kulaura moulvibazar"
            //     "relative__contact_number" => null
            //     "reference__name" => "nooralam khan"
            //     "reference__organization" => null
            //     "reference__relation" => null
            //     "reference__address" => null
            //     "reference__email" => null
            //     "reference__phone_number" => null
            //     "promotion__employee_number" => null
            //     "promotion__promotion_date" => null
            //     "promotion__previous_designation" => null
            //     "promotion__new_designtion" => null
            //     "promotion__previous_grade" => null
            //     "promotion__new_degree" => null
            //     "promotion__previous_promotion_date" => null
            //     "promotion__previous_basic" => null
            //     "promotion__new_basic" => null
            //     "promotion__previous_gross" => null
            //     "promotion__new_gross" => null
            //     "promotion__increment_amount" => null
            //     "promotion__effect_date" => null
            //   ]
    }
}