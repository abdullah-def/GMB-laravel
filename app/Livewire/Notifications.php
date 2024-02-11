<?php

namespace App\Livewire;

use Livewire\Component;
use App\Concern\NotificationsControll;

class Notifications extends Component

{
    use NotificationsControll;

    public function makeallread()
    {
        $this->makeAllAsRead();
        auth()->user()->makeAllAsRead();
    }

    public function makeaasread($id)
    {
        auth()->user()->makeAsRead($id);
    }


    public function render()
    {
        return view('livewire.notifications');
    }
}
