<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdvocateResource extends JsonResource
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
            'profile_pic' => $this->profile_pic,
            'short_bio' => $this->short_bio,
            'long_bio' => $this->long_bio,
            'advocate_years_exp' => $this->advocate_years_exp,
            'company' => [
                'id' => $this->company->id,
                'name' => $this->company->name,
                'logo' => $this->company->logo,
                'href' =>  'http://127.0.0.1:8000/api/companies/'.$this->company->id
            ],
            'links'=> [
                'youtube' => $this->youtube,
                'twitter' => $this->twitter,
                'github' => $this->github,
            ]
        ];
    }
}
