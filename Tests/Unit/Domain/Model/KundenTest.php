<?php
namespace Wl\WlKis\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Timo Loch <info@webdesign-loch.de>
 */
class KundenTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Wl\WlKis\Domain\Model\Kunden
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wl\WlKis\Domain\Model\Kunden();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVornameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVorname()
        );
    }

    /**
     * @test
     */
    public function setVornameForStringSetsVorname()
    {
        $this->subject->setVorname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'vorname',
            $this->subject
        );
    }
}
