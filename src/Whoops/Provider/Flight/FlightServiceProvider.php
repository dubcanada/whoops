<?php
/**
 * Whoops - php errors for cool kids
 * @author Filipe Dobreira <https://github.com/filp>
 */

namespace Whoops\Provider\Flight;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

/**
 * Provides support for Illuminate (Laravel 4)
 * @author schickling <https://github.com/schickling>
 */
class WhoopsServiceProvider extends Flight {

    /**
     * Register the service provider for whoops to flight
     */
    public static function _error(Exception $e)
    {
        $page = new PrettyPageHandler;
        $run = new Run;
        $run->pushHandler($page);
    }
}