<?php

declare(strict_types=1);

namespace service\KitAPI\Component\Serializer\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY","METHOD","ANNOTATION"})
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @internal
 */
final class MaxDepth
{
    /**
     * @Required
     * @var int
     */
    public $depth;
}
