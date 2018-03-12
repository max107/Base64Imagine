<?php

declare(strict_types=1);

/*
 * Studio 107 (c) 2018 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\ImageResolver;

use Liip\ImagineBundle\Binary\Loader\FlysystemLoader;

class Base64FlysystemLoader extends FlysystemLoader
{
    /**
     * {@inheritdoc}
     */
    public function find($path)
    {
        return parent::find(base64_decode($path));
    }
}
