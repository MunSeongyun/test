<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnswerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if ($this->method() == "PUT") {
            return [
                "answerIsBig"=> ["required","boolean"],
                "answerIsFluff"=> ["required","boolean"],
                "answerIsWalking"=> ["required","boolean"],
                "answerIsSmart"=> ["required","boolean"],
                "answerIsShyness"=> ["required","boolean"],
                "answerIsBiting"=> ["required","boolean"],
                "answerIsNuisance"=> ["required","boolean"],
                "answerIsIndependent"=>["required","boolean"],
            ];
        }else{
            return [
                "answerIsBig"=> ["sometimes" ,"required","boolean"],
                "answerIsFluff"=> ["sometimes" ,"required","boolean"],
                "answerIsWalking"=> ["sometimes" ,"required","boolean"],
                "answerIsSmart"=> ["sometimes" ,"required","boolean"],
                "answerIsShyness"=> ["sometimes" ,"required","boolean"],
                "answerIsBiting"=> ["sometimes" ,"required","boolean"],
                "answerIsNuisance"=> ["sometimes" ,"required","boolean"],
                "answerIsIndependent"=>["sometimes" ,"required","boolean"],
            ];
        }
    }

    protected function prepareForValidation(){
        $this->merge([
            "answer_is_big"=> $this->answerIsBig,
            "answer_is_fluff"=> $this->answerIsFluff,
            "answer_is_walking"=>$this->answerIsWalking,
            "answer_is_smart"=> $this->answerIsSmart,
            "answer_is_shyness"=> $this->answerIsShyness,
            "answer_is_biting"=> $this->answerIsBiting,
            "answer_is_nuisance"=> $this->answerIsNuisance,
            "answer_is_independent"=> $this->answerIsIndependent,
        ]);
    }
}
