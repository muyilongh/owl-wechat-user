<?php

namespace Slowlyo\OwlWechatUser\Events;

use Illuminate\Foundation\Events\Dispatchable;

class UserLoggedInEvent
{
    use Dispatchable;

    public $user;

    public $request;

    public function __construct($user, $request)
    {
        $this->user    = $user;
        $this->request = $request;
    }
}
