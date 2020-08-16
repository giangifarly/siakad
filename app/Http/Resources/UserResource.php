<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'siswa_id (foreign)' => $this->siswa_id,
            'siswa_id'=> $this->siswa->id,
            'jenis_kelamin'=> $this->siswa->jenis_kelamin,
            'telepon'=> $this->siswa->telepon,
            'tahun_masuk'=> $this->siswa->tahun_masuk,
            'program'=> $this->siswa->program
        ];
    }
}

