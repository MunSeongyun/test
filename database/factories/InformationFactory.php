<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Information>
 */
class InformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     public $information = [
        [
          
          "information_dog_name"=> "골든 리트리버",
          "information_dog_character"=> "온화하고 영리함",
          "information_min_size"=> 56,
          "information_max_size"=> 61,
          "information_min_cost"=> 25,
          "information_max_cost"=> 80,
          "information_dog_text"=> "골든 리트리버는 온화하며 특히 순종적이고 영리합니다. 사람에게 부드럽고 우호적입니다.",
          "information_dog_geneticillness"=> "고관절 이형성증, 백내장, 암",
          "information_caution"=> "사람에게는 착하지만, 다른 개들에게는 사나울 수 있습니다.",
          "information_image_url"=> "images/Golden Retriever.png"
        ],
        [
          
          "information_dog_name"=> "말티푸",
          "information_dog_character"=> "높은 지능과 활발한 성격",
          "information_min_size"=> 20,
          "information_max_size"=> 35,
          "information_min_cost"=> 100,
          "information_max_cost"=> 300,
          "information_dog_text"=> "말티푸는 매우 똑똑하며, 애교 많고 활발한 성격을 가지고 있습니다. 낯선 사람이나 다른 개에 대한 경계심이 강합니다.",
          "information_dog_geneticillness"=> "슬개골 탈구, 간질, 치과 질환",
          "information_caution"=> "사람에게는 친근하지만, 예민하고 분리불안 위험이 큽니다.",
          "information_image_url"=> "images/Maltipoo.png"
        ],
        [
          
          "information_dog_name"=> "시바견",
          "information_dog_character"=> "독립적이고 경계심이 강함",
          "information_min_size"=> 35,
          "information_max_size"=> 43,
          "information_min_cost"=> 50,
          "information_max_cost"=> 150,
          "information_dog_text"=> "시바견은 독립적이고 경계심이 강한 성격을 가지고 있습니다. 사회화 훈련이 필수적입니다.",
          "information_dog_geneticillness"=> "고관절 이형성증, 백내장, 피부염",
          "information_caution"=> "사회화 훈련이 필요하며, 털 관리에 신경 써야 합니다.",
          "information_image_url"=> "images/Shiba Inu.png"
        ],
        [
          
          "information_dog_name"=> "보더콜리",
          "information_dog_character"=> "쾌활하고 사교적, 강한 책임감과 소유욕, 높은 지능과 학습력",
          "information_min_size"=> 45,
          "information_max_size"=> 56,
          "information_min_cost"=> 50,
          "information_max_cost"=> 150,
          "information_dog_text"=> "보더콜리는 매우 활동적이고 사교적입니다. 가족에게 애정이 깊으나 낯선 사람을 경계하며, 높은 지능과 학습력을 가지고 있습니다.",
          "information_dog_geneticillness"=> "콜리아이 증후군, 유전성 난청, 고관절 이형성증",
          "information_caution"=> "하루 최소 1~2시간 이상의 운동이 필요하며, 철저한 교육이 중요합니다.",
          "information_image_url"=> "images/Border Collie.png"
        ],
        [
          
          "information_dog_name"=> "사모예드",
          "information_dog_character"=> "사교적이고 발랄하며 사람을 좋아함",
          "information_min_size"=> 53,
          "information_max_size"=> 57,
          "information_min_cost"=> 50,
          "information_max_cost"=> 150,
          "information_dog_text"=> "사모예드는 사교적이고 발랄하며, 사람을 좋아하고 외로움을 잘 타며, 공격성이 낮아 아이들과 잘 어울립니다.",
          "information_dog_geneticillness"=> "유전성사구체병증, 녹내장, 당뇨, 고관절 이형성증",
          "information_caution"=> "털 관리와 많은 운동이 필요하며, 마당이 있는 집에서 키우는 것이 적합합니다.",
          "information_image_url"=> "images/Samoyed.png"
        ],
        [
          
          "information_dog_name"=> "미니 비숑",
          "information_dog_character"=> "다정하고 애교 많음",
          "information_min_size"=> 20,
          "information_max_size"=> 30,
          "information_min_cost"=> 50,
          "information_max_cost"=> 150,
          "information_dog_text"=> "미니 비숑은 다정하고 애교 많으며, 사람과의 교감을 좋아합니다. 활동적이며 장난기 많습니다.",
          "information_dog_geneticillness"=> "고관절 이형성증, 유전성 백내장, 피부병, 잇몸 질환",
          "information_caution"=> "털 관리가 중요하며, 사회화 훈련이 필요합니다.",
          "information_image_url"=> "images/Mini Bichon.png"
        ],
        [
          
          "information_dog_name"=> "버니즈 마운틴 독",
          "information_dog_character"=> "다정하고 가족애가 깊음",
          "information_min_size"=> 58,
          "information_max_size"=> 70,
          "information_min_cost"=> 100,
          "information_max_cost"=> 200,
          "information_dog_text"=> "버니즈 마운틴 독은 다정하고 가족애가 깊으며, 어린아이와 잘 지냅니다. 활동적이며 매일 1-2시간의 산책과 30분의 격한 놀이가 필요합니다.",
          "information_dog_geneticillness"=> "암, 관절염, 고관절 이형성증, 십자인대 파열, 고창증",
          "information_caution"=> "더위에 약해 여름철에는 시원한 환경이 필요하며, 털 빠짐이 심해 정기적인 털 관리가 필수입니다. 성장이 끝나기 전에는 격한 운동을 피해야 합니다.",
          "information_image_url"=> "images/Bernese Mountain.png"
        ],
        [
          
          "information_dog_name"=> "러프 콜리",
          "information_dog_character"=> "순하고 다정하며 영리함",
          "information_min_size"=> 55,
          "information_max_size"=> 66,
          "information_min_cost"=> 100,
          "information_max_cost"=> 150,
          "information_dog_text"=> "러프 콜리는 순하고 다정하며, 사람을 좋아하고 가족애가 깊습니다. 영리하여 훈련 습득이 빠르고, 활동적이어서 매일 1-1.5시간의 산책이 필요합니다.",
          "information_dog_geneticillness"=> "콜리 노즈, 콜리 안구 기형, 고관절 이형성증, 약물 민감성",
          "information_caution"=> "털 빠짐이 심해 정기적인 빗질이 필요하며, 많은 활동량이 요구됩니다. 분리 불안이 생길 수 있으므로 너무 오랜 시간 혼자 두지 않는 것이 좋습니다.",
          "information_image_url"=> "images/Rough Collie.png"
        ],
        [
          
          "information_dog_name"=> "말티즈",
          "information_dog_character"=> "활발하고 놀기 좋아함",
          "information_min_size"=> 20,
          "information_max_size"=> 26,
          "information_min_cost"=> 50,
          "information_max_cost"=> 150,
          "information_dog_text"=> "말티즈는 활발하고 놀기를 좋아하며, 사람을 중심으로 사고하여 훈련이 용이합니다. 장난기 많고 애교가 많아 어린아이들과 잘 지냅니다.",
          "information_dog_geneticillness"=> "슬개골 탈구, 진행성 망막 위축증, 심장 질환, 하얀 강아지 떨림 증후군, 기관허탈, 간문맥단락",
          "information_caution"=> "눈물 자국이 심하므로 정기적인 눈물 닦기와 털 관리를 해야 하며, 발톱과 귀 관리를 꾸준히 해야 합니다.",
          "information_image_url"=> "images/Maltese.png"
        ]
        ];
    public $index = -1;
    public function definition()
    {
        $this->index++;
        $temp = $this->information[$this->index];

        return [
            "information_dog_name"=>$temp["information_dog_name"],
            "information_dog_character"=>$temp["information_dog_character"],
            "information_min_size"=>$temp["information_min_size"],
            "information_max_size"=>$temp["information_max_size"],
            "information_min_cost"=>$temp["information_min_cost"],
            "information_max_cost"=>$temp["information_max_cost"],
            "information_dog_text"=>$temp["information_dog_text"],
            "information_dog_geneticillness"=>$temp["information_dog_geneticillness"],
            "information_caution"=>$temp["information_caution"],
            "information_image_url"=>$temp["information_image_url"],
        ];
    }
}
