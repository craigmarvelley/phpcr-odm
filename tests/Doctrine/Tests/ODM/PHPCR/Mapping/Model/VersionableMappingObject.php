<?php

namespace Doctrine\Tests\ODM\PHPCR\Mapping\Model;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCRODM;

/**
 * A class that is versionable via the simple strategy
 * 
 * @PHPCRODM\Document(versionable="simple")
 */
class VersionableMappingObject
{
    /** @PHPCRODM\Id */
    public $id;
}
