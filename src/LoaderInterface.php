<?php
/**
 * This file is part of the browser-detector-loader-interface package.
 *
 * Copyright (c) 2015-2021, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace BrowserDetector\Loader;

interface LoaderInterface
{
    /**
     * @return mixed
     *
     * @throws NotFoundException
     */
    public function load(string $key);

    public function has(string $key): bool;
}
