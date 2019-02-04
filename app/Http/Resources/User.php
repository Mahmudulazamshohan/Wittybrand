<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
           'id'=>$this->id,
          'name'=>$this->name,
          'email'=>$this->email,
          'verified'=>$this->verified,
          'country'=>$this->country,
          'phone'=>$this->phone,
          'confirm_url'=>$this->verification_code ? route('confirm-mail').'?confirmation_code='.$this->verification_code : null
        ];
    }
    public function with($request){
        return [
            'version'=>'1.0.0',
            'valid_as_of'=>date('D, d M Y H:i:s')
        ];
    }
}
