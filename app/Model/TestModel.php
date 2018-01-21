<?php

namespace App\Model;

use Eskirex\Component\Web\MVC\Model;

class TestModel extends Model
{
    protected static $table      = 'settings';

    protected static $timestamps = true;

    protected static $createdAt  = 'creation_date';

    protected static $updatedAt  = 'last_update';


}