<?php
/**
 * This file is part of the browser-detector-loader-interface package.
 *
 * Copyright (c) 2015-2018, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);
namespace BrowserDetector\Loader;

interface LoaderInterface
{
    /**
     * @param string $key
     *
     * @throws \BrowserDetector\Loader\NotFoundException
     *
     * @return mixed
     */
    public function load(string $key);

    /**
     * @param string $key
     *
     * @return bool
     */
    public function has(string $key): bool;
}
