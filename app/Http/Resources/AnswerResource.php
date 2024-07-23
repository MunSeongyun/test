<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnswerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'answerIsBig'=> $this-> answer_is_big,
            'answerIsFluff'=> $this-> answer_is_fluff,
            'answerIsWalking'=> $this-> answer_is_walking,
            'answerIsSmart'=> $this-> answer_is_smart,
            'answerIsShyness'=> $this-> answer_is_shyness,
            'answerIsBiting'=> $this-> answer_is_biting,
            'answerIsNuisance'=> $this-> answer_is_nuisance,
            'answerIsIndependent'=> $this-> answer_is_independent,
        ];
    }
}
