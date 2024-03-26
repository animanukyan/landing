<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class SubscriptionForm extends Component
{
    public $subscription;

    public $thankYou;

    #[On('email-added')]
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;
    }

    #[On('comments-added')]
    public function displayThankYouPage()
    {
        $this->thankYou = true;
    }

    public function render()
    {
        return view('livewire.subscription-form');
    }
}
