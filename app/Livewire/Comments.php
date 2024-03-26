<?php

namespace App\Livewire;

use App\Models\Subscription;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Comments extends Component
{
    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $comments = '';

    #[Reactive]
    public $subscription;

    public function save()
    {
        $this->validate();

        $subscriptionModel = Subscription::find(data_get($this->subscription, 'id'));

        $subscriptionModel->update($this->only(['name', 'comments']));

        $this->dispatch('comments-added', subscription: $this->subscription);
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
