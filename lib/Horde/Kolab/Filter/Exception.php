<?php

/**
 * This class provides the standard error class for the Kolab_Filter package.
 *
 * PHP version 5
 *
 * @category Kolab
 * @package  Kolab_Filter
 * @author   Gunnar Wrobel <wrobel@pardus.de>
 * @license  http://www.horde.org/licenses/lgpl21 LGPL 2.1
 */

/**
 * This class provides the standard error class for the Kolab_Filter package.
 *
 * Copyright 2010-2026 Klarälvdalens Datakonsult AB
 *
 * See the enclosed file LICENSE for license information (LGPL). If you
 * did not receive this file, see http://www.horde.org/licenses/lgpl21.
 *
 * @category Kolab
 * @package  Kolab_Filter
 * @author   Gunnar Wrobel <wrobel@pardus.de>
 * @license  http://www.horde.org/licenses/lgpl21 LGPL 2.1
 */
class Horde_Kolab_Filter_Exception extends Horde_Exception
{
    /**
     * Failure constants from postfix src/global/sys_exits.h
     *
     * These are required as exit codes for our communication with postfix.
     */

    /* command line usage error */
    public const EX_USAGE = 64;
    /* data format error */
    public const EX_DATAERR = 65;
    /* cannot open input */
    public const EX_NOINPUT = 66;
    /* user unknown */
    public const EX_NOUSER = 67;
    /* host name unknown */
    public const EX_NOHOST = 68;
    /* service unavailable */
    public const EX_UNAVAILABLE = 69;
    /* internal software error */
    public const EX_SOFTWARE = 70;
    /* system resource error */
    public const EX_OSERR = 71;
    /* critical OS file missing */
    public const EX_OSFILE = 72;
    /* can't create user output file */
    public const EX_CANTCREAT = 73;
    /* input/output error */
    public const EX_IOERR = 74;
    /* temporary failure */
    public const EX_TEMPFAIL = 75;
    /* remote error in protocol */
    public const EX_PROTOCOL = 76;
    /* permission denied */
    public const EX_NOPERM = 77;
    /* local configuration error */
    public const EX_CONFIG = 78;

    /**
     * Some output constants.
     *
     * These indicate to the view how an exception should be handled.
     */

    public const OUT_STDOUT = 128;
    public const OUT_LOG = 256;
}
