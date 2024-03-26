<?php

namespace App\Livewire;

use App\Models\Subscription as SubscriptionModel;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Email extends Component
{
    #[Validate('required|email')]
    public $email = '';

    public $subscription;

    public function save()
    {
        $this->validate();

        $this->subscription = SubscriptionModel::create($this->only(['email']));

        $this->dispatch('email-added', subscription: $this->subscription);
    }

    public function render()
    {
        return view('livewire.email');
    }

}
