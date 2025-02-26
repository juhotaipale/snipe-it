<?php

namespace App\Events;

use App\Models\CheckoutAcceptance;
use App\Models\Contracts\Acceptable;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CheckoutDeclined
{
    use Dispatchable, SerializesModels;

    public function __construct(CheckoutAcceptance $acceptance)
    {
        $this->acceptance = $acceptance;
    }
}
