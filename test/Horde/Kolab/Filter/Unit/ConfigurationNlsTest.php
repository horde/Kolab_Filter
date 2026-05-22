<?php

/**
 * Tests that Horde_Kolab_Filter_Configuration::init() handles locale/textdomain
 * configuration without depending on Horde_Nls.
 * @coversNothing
 */
class Horde_Kolab_Filter_Unit_ConfigurationNlsTest extends PHPUnit\Framework\TestCase
{
    /**
     * Test that init() completes without error when locale config is set.
     * The legacy code calls Horde_Nls::setTextdomain() which doesn't exist
     * in current Horde_Nls. After refactoring, it uses bindtextdomain() directly.
     */
    public function testInitWithLocaleConfig()
    {
        $cli = $this->createMock(Horde_Kolab_Filter_Cli::class);
        $cli->method('getOptions')->willReturn([
            'sender' => 'test@example.com',
            'recipient' => ['recipient@example.com'],
            'client' => '127.0.0.1',
            'host' => 'mail.example.com',
            'user' => 'testuser',
            'config' => null,
        ]);

        $GLOBALS['conf'] = [
            'kolab' => [
                'filter' => [
                    'locale_path' => '/tmp',
                    'locale' => 'en_US.UTF-8',
                ],
            ],
        ];

        $config = new Horde_Kolab_Filter_Configuration($cli);
        $config->init();

        $this->assertSame('test@example.com', $config->getSender());
        $this->assertSame(['recipient@example.com'], $config->getRecipients());

        unset($GLOBALS['conf']);
    }

    /**
     * Test that init() works when locale config is absent (no textdomain call).
     */
    public function testInitWithoutLocaleConfig()
    {
        $cli = $this->createMock(Horde_Kolab_Filter_Cli::class);
        $cli->method('getOptions')->willReturn([
            'sender' => 'admin@example.org',
            'recipient' => ['user@example.org'],
            'client' => '10.0.0.1',
            'host' => 'smtp.example.org',
            'user' => 'admin',
            'config' => null,
        ]);

        $GLOBALS['conf'] = [];

        $config = new Horde_Kolab_Filter_Configuration($cli);
        $config->init();

        $this->assertSame('admin@example.org', $config->getSender());
        $this->assertSame('10.0.0.1', $config->getClientAddress());

        unset($GLOBALS['conf']);
    }
}
