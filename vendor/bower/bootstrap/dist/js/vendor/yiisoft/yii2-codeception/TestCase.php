<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\codeception;

use Yii;
use yii\base\InvalidConfigException;
use Codeception\TestCase\Test;
use yii\base\UnknownMethodException;
use yii\base\UnknownPropertyException;
use yii\di\Container;
use yii\test\ActiveFixture;
use yii\test\BaseActiveFixture;
use yii\test\FixtureTrait;

/**
 * TestCase is the base class for all codeception unit tests
 *
 * @author Mark Jebri <mark.github@yandex.ru>
 * @since 2.0
 */
class TestCase extends Test
{
    use FixtureTrait;

    /**
     * @var array|string the application configuration that will be used for creating an application instance for each test.
     * You can use a string to represent the file path or path alias of a configuration file.
     * The application configuration array may contain an optional `class` element which specifies the class
     * name of the application instance to be created. By default, a [[\yii\web\Application]] instance will be created.
     */
    public $appConfig = '@tests/codeception/config/unit.php';


    /**
     * Returns the value of an object property.
     *
     * Do not call this method directly as it is a PHP magic method that
     * will be implicitly called when executing `$value = $object->property;`.
     * @param string $name the property name
     * @return mixed the property value
     * @throws UnknownPropertyException if the property is not defined
     */
    public function __get($name)
    {
        $fixture = $this->getFixture($name);
        if ($fixture !== null) {
            return $fixture;
        } else {
            throw new UnknownPropertyException('Getting unknown property: ' . get_class($this) . '::' . $name);
        }
    }

    /**
     * Calls the named method which is not a class method.
     *
     * Do not call this method directly as it is a PHP magic method that
     * will be implicitly called when an unknown method is being invoked.
     * @param string $name the method name
     * @param array $params method parameters
     * @throws UnknownMethodException when calling unknown method
     * @return mixed the method return value
     */
    public function __call($name, $params)
    {
        $fixture = $this->getFixture($name);
        if ($fixture instanceof BaseActiveFixture) {
            return $fixture->getModel(reset($params));
        } else {
            throw new UnknownMethodException('Unknown method: ' . get_class($this) . "::$name()");
        }
    }

    /**
     * @inheritdoc
     */
    protected function setUp()
    {
        parent::setUp();
        $this->mockApplication();
        $this->unloadFixtures();
     