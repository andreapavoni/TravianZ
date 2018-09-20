<?php

/*
 * This file is part of the TravianZ Project
 *
 * Source code: <https://github.com/Shadowss/TravianZ/>
 *
 * Author: iopietro <https://github.com/iopietro>
 *
 * License: GNU GPL-3.0 <https://github.com/Shadowss/TravianZ/blob/master/LICENSE>
 *
 * Copyright 2010-2018 TravianZ Team
 */

namespace TravianZ\Data\Users;

use TravianZ\Database\IDbConnection;
use TravianZ\Entity\User;
use TravianZ\Enums\TribeEnums;

/**
 * @author iopietro
 */
class Natars extends User
{    
    public function __construct(IDbConnection $db) {
        parent::__construct($db, [3, TRIBE5, TribeEnums::NATARS], false, false);
        $this->access = 2;
    }
}