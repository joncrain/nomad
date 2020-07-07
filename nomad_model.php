<?php

use munkireport\models\MRModel as Eloquent;

class Nomad_model extends Eloquent
{
    protected $table = 'nomad';

    protected $hidden = ['id', 'serial_number'];

    protected $fillable = [
      'serial_number',
      'nomad_version',
      'nomad_login_version',
      'nomad_enabled',
      'nomad_login_enabled',
      'nomad_user',
      'addomain',
      'kerberos_realm',
      'use_keychain',
      'local_password_sync',

    ];
}
