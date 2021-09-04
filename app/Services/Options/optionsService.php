<?php

namespace App\Services\Options;

use App\User;

class optionsService
{
    public function optionUpdate( $request, $user)
    {
        $user->name = $request['name'];
        $user->email = $request['email'];
        $request['password'] == null ?: $user->password = bcrypt($request['password']);

        $result = $user->update();

        return $result;
    }
}
