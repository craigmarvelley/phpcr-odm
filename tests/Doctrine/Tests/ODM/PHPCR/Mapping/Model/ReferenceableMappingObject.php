<?php

namespace Doctrine\Tests\ODM\PHPCR\Mapping\Model;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCRODM;

/**
 * A class that is referenceable
 * 
 * @PHPCRODM\Document(referenceable=true)
 */
class ReferenceableMappingObject
{
    /** @PHPCRODM\Id */
    public $id;
}
