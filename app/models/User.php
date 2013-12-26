<?php

use Cartalyst\Sentry\Users\Eloquent\User as SentryUserModel;

class User extends SentryUserModel
{
    public function properties()
    {
        return $this->hasMany('Property');
    }
}
