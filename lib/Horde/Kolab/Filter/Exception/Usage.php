<?php
/**
 * This class provides an error thrown when the user supplied invalid command
 * line parameters.
 *
 * PHP version 5
 *
 * @category Kolab
 * @package  Kolab_Filter
 * @author   Gunnar Wrobel <wrobel@pardus.de>
 * @license  http://www.horde.org/licenses/lgpl21 LGPL 2.1
 */

/**
 * This class provides an error thrown when the user supplied invalid command
 * line parameters.
 *
 * Copyright 2010 Klarälvdalens Datakonsult AB
 *
 * See the enclosed file LICENSE for license information (LGPL). If you
 * did not receive this file, see http://www.horde.org/licenses/lgpl21.
 *
 * @category Kolab
 * @package  Kolab_Filter
 * @author   Gunnar Wrobel <wrobel@pardus.de>
 * @license  http://www.horde.org/licenses/lgpl21 LGPL 2.1
 */
class Horde_Kolab_Filter_Exception_Usage
extends Horde_Kolab_Filter_Exception
{
    /**
     * Construct the exception
     *
     * @param string $msg
     * @param Exception $previous
     */
    public function __construct($msg = '', Exception $previous = null)
    {
        parent::__construct(
            $msg,
            Horde_Kolab_Filter_Exception::OUT_STDOUT |
            Horde_Kolab_Filter_Exception::EX_USAGE,
            $previous
        );
    }
}
