<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class HafalanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'        =>  $this->id,
            'halaman'   =>  $this->halaman,
            'user'      =>  $this->user->name,
            'keterangan'=>  $this->keterangan,
            'tanggal'   =>  Carbon::parse($this->created_at)->isoFormat('Y-MM-DD'),
            'tanggal2'  =>  Carbon::parse($this->created_at)->isoFormat('ll'),
            'jam'       =>  Carbon::parse($this->created_at)->isoFormat('HH:mm:ss'),

        ];
    }
}
