<?php

/**
 * Created by Muhammad Muflih Kholidin
 * https://github.com/mmuflih
 * muflic.24@gmail.com
 * at: 12/08/20 22.20
 **/

namespace App\Context\AuthController;

use Carbon\Carbon;

class TokenResponseHelper
{
    /**
     * @param $token
     * @return array
     */
    public static function generateResponse($token): array
    {
        $ttl = auth()->factory()->getTTl();
        return [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $ttl,
            'expired_at' => Carbon::now()->addMinutes($ttl)->timestamp,
        ];
    }
}
