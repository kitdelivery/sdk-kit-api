<?php

declare(strict_types=1);

namespace service\KitAPI\Component\Serializer\Annotation;

/**
 * @Annotation
 * @Target({"CLASS", "PROPERTY"})
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @internal
 */
final class AccessType
{
    /**
     * @Required
     * @var string
     */
    public $type;
}
