<?php

declare(strict_types=1);

/*
 * Studio 107 (c) 2018 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace App\Twig;

use Liip\ImagineBundle\Templating\ImagineExtension;

class ImageExtension extends ImagineExtension
{
    /**
     * Gets the browser path for the image and filter to apply.
     *
     * @param string $path
     * @param string $filter
     * @param array  $runtimeConfig
     * @param string $resolver
     *
     * @return string
     */
    public function filter($path, $filter, array $runtimeConfig = array(), $resolver = null)
    {
        return parent::filter(base64_encode($path), $filter, $runtimeConfig, $resolver);
    }
}
