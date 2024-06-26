<?php

declare(strict_types=1);

namespace TypeLang\PHPDoc\Parser\Description;

final class SprintfDescriptionReader extends DescriptionParser
{
    /**
     * @param int<0, max> $tagId
     *
     * @return non-empty-string
     */
    protected function createDescriptionChunkPlaceholder(int $tagId): string
    {
        return "%{$tagId}\$s";
    }

    /**
     * @return ($chunk is non-empty-string ? non-empty-string : string)
     */
    protected function escapeDescriptionChunk(string $chunk): string
    {
        return \str_replace('%', '%%', $chunk);
    }
}
