<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'identifier' => $this->identifier,
            'isPaid'     => (bool)!empty($this->paid_at),
            'paidAt'     => $this->paid_at,
        ];
    }
}
