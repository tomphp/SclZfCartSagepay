<?php
namespace SclZfCartSagepayTests\Service;

use SclZfCartSagepay\Service\SagepayOptionsFactory;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-02-15 at 17:30:38.
 */
class SagepayOptionsFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ConfigFactory
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new SagepayOptionsFactory;
    }

    /**
     * @covers SclZfCartSagepay\Service\ConfigFactory::createService
     * @todo   Implement testCreateService().
     */
    public function testCreateService()
    {
        $config = include __DIR__ . '/../../../config/module.config.php';

        $serviceLocator = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');

        $serviceLocator->expects($this->at(0))
            ->method('get')
            ->with($this->equalTo('Config'))
            ->will($this->returnValue($config));

        $provider = $this->object->createService($serviceLocator);

        $this->assertInstanceOf('SclZfCartSagepay\Options\SagepayOptions', $provider);
    }
}
