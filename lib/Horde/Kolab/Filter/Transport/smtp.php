<?php
/**
 * Provides SMTP for delivering mail.
 *
 * Copyright 2004-2008 Klarälvdalens Datakonsult AB
 * Copyright 2026 Horde LLC (http://www.horde.org/)
 *
 * See the enclosed file LICENSE for license information (LGPL). If you
 * did not receive this file, see http://www.horde.org/licenses/lgpl21.
 *
 * @author  Steffen Hansen <steffen@klaralvdalens-datakonsult.se>
 * @author  Gunnar Wrobel <wrobel@pardus.de>
 * @package Kolab_Filter
 */
class Horde_Kolab_Filter_Transport_smtp extends Horde_Kolab_Filter_Transport
{
    /**
     * Create the transport handler.
     *
     * @return Horde_Smtp The SMTP handler.
     */
    function _createTransport()
    {
        if (!isset($this->_params['host'])) {
            $this->_params['host'] = '127.0.0.1';
        }

        if (!isset($this->_params['port'])) {
            $this->_params['port'] = 25;
        }

        // Use Horde_Smtp instead of pear/net_smtp
        $transport = new Horde_Smtp([
            'host' => $this->_params['host'],
            'port' => $this->_params['port'],
            'secure' => false,  // Kolab uses local unencrypted SMTP
            'timeout' => $this->_params['timeout'] ?? 10
        ]);

        return $transport;
    }
}
