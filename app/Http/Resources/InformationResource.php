<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InformationResource extends JsonResource
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
            'id'=>$this->id,
            'informationDogName'=>$this->information_dog_name,
            'informationDogCharacter'=>$this->information_dog_character,
            'informationMinSize'=>$this->information_min_size,
            'informationMaxSize'=>$this->information_max_size,
            'informationMinCost'=>$this->information_min_cost,
            'informationMaxCost'=>$this->information_max_cost,
            'informationDogText'=>$this->information_dog_text,
            'informationDogGeneticillness'=>$this->information_dog_geneticillness,
            'informationCaution'=>$this->information_caution,
            'informationImageUrl'=> $this->information_image_url
        ];
    }
}
