<?php

declare(strict_types=1);

/*
 * Studio 107 (c) 2018 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\ImageResolver;

use Liip\ImagineBundle\Imagine\Cache\Resolver\FlysystemResolver;

class Base64FlysystemResolver extends FlysystemResolver
{
    /**
     * {@inheritdoc}
     */
    protected function getFileUrl($path, $filter)
    {
        return parent::getFileUrl(base64_decode($path), $filter);
    }
}
