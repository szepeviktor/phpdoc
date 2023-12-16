<?php

declare(strict_types=1);

namespace TypeLang\PhpDocParser\DocBlock\Tag;

use TypeLang\Parser\Node\Stmt\TypeStatement;

interface TypeProviderInterface extends OptionalTypeProviderInterface
{
    /**
     * @psalm-immutable
     */
    public function getType(): TypeStatement;
}
