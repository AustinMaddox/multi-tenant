<?php

/*
 * This file is part of the hyn/multi-tenant package.
 *
 * (c) Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://laravel-tenancy.com
 * @see https://github.com/hyn/multi-tenant
 */

namespace Hyn\Tenancy\Tests\Traits;

trait InteractsWithBuilds
{
    protected $buildWebserver = 'none';
    protected $buildPhpVersion;
    protected $buildDb;
    protected $buildLaravelVersion;

    public function identifyBuild()
    {
        $this->buildWebserver = env('WEBSERVER');
        $this->buildPhpVersion = env('TRAVIS_PHP_VERSION');
        $this->buildDb = env('DB');
    }
}
