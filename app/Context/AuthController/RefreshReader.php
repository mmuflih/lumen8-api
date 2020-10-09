<?php

/**
 * Created by Muhammad Muflih Kholidin
 * https://github.com/mmuflih
 * muflic.24@gmail.com
 * at: 12/08/20 22.16
 **/

namespace App\Context\AuthController;

use App\Context\Reader;

class RefreshReader implements Reader
{

    /**
     * @return array
     */
    public function read()
    {
        $token = auth()->refresh();
        return TokenResponseHelper::generateResponse($token);
    }
}
