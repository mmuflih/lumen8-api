<?php

/**
 * Created by Muhammad Muflih Kholidin
 * https://github.com/mmuflih
 * muflic.24@gmail.com
 * at: 12/08/20 22.15
 **/

namespace App\Context\AuthController;

use App\Context\Reader;
use Illuminate\Contracts\Auth\Authenticatable;

class GetMeReader implements Reader
{
    /**
     * @return Authenticatable|null
     */
    public function read()
    {
        return auth()->user();
    }
}
