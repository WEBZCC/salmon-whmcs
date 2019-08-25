<?php

namespace Grizzlyware\Salmon\WHMCS\User\Client;

use Grizzlyware\Salmon\WHMCS\User\Client;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	public $timestamps = false;

	public function clients()
	{
		return $this->hasMany(Client::class, 'groupid');
	}
}



