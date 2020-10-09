<?php

/**
 * Created by Muhammad Muflih Kholidin
 * https://github.com/mmuflih
 * muflic.24@gmail.com
 * at: 12/08/20 22.15
 **/

namespace App\Context\AuthController;

use App\Context\Handler;

class LogoutHandler implements Handler
{
    /**
     * @return string
     */
    public function handle()
    {
        auth()->logout();
        return "Successfully logged out";
    }
}
