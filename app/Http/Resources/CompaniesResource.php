<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompaniesResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'logo' => $this->logo,
            'summary' => $this->summary,
            'advocates' => $this->advocates->map(function($advocate) {
                return [
                    'id' => $advocate->id,
                    'name' => $advocate->name,
                    'profile_pic'=> $advocate->profile_pic,
                    'short_bio' => $advocate->short_bio,
                    'advocate_years_exp'=> $advocate->advocate_years_exp,

                    'links' => [
                        'youtube' => $advocate->youtube,
                        'twitter' => $advocate->twitter,
                        'github' => $advocate->github,
                    ]
                ];
            })
        ];
    }
}
