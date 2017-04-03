<?php

namespace Dgame\Ensurance;

use Dgame\Ensurance\Exception\EnsuranceException;

/**
 * Class ResourceEnsurance
 * @package Dgame\Ensurance
 */
final class ResourceEnsurance
{
    /**
     * @var resource
     */
    private $resource;

    use EnforcementTrait;

    /**
     * ResourceEnsurance constructor.
     *
     * @param $resource
     *
     * @throws EnsuranceException
     */
    public function __construct($resource)
    {
        if (!is_resource($resource)) {
            throw new EnsuranceException('That is not a resource');
        }

        $this->resource = $resource;
    }
}