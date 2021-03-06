<?php
namespace php\lang;

use php\io\File;
use php\io\Stream;

/**
 * Class Module
 * @package php\lang
 */
class Module {
    /**
     * Register all functions and classes of module in current environment
     *
     * @param File|Stream|string $source
     * @param bool $compiled
     * @param bool $debugInformation
     */
    public function __construct($source, $compiled = false, $debugInformation = true) { }

    /**
     * @return string
     */
    public function getName() {}

    /**
     * Include module and return result
     * @param array $variables
     * @return mixed
     */
    public function call(array $variables = null) { }

    /**
     * @param File|Stream|string $target
     * @param bool $saveDebugInfo
     * @throws
     */
    public function dump($target, $saveDebugInfo = true) { }
}
