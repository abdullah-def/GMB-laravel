<?php

namespace App\Concern;

trait NotificationsControll
{

    protected function makeAsRead($id)
    {
        if ($id) {
            auth()->user()->notifications->where('id', $id)->makeAsRead();
        }
    }

    protected function makeAllAsRead()
    {
        auth()->user()->makeAllAsRead();
    }
}
