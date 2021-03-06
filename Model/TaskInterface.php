<?php

/*
 * This file is part of the AdminLTE bundle.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KevinPapst\AdminLTEBundle\Model;

interface TaskInterface
{
    public function getColor();

    public function getProgress();

    public function getTitle();

    public function getIdentifier();
}
