<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    protected $data;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function __construct($data){
       $this->data = $data;
    }
    public function toArray($request)
    {
        return $this->data;
    }

    public function with($request){
        return [
            'version'=>'1.0.0',
            'valid_as_of'=>date('D, d M Y H:i:s')
        ];
    }
}
