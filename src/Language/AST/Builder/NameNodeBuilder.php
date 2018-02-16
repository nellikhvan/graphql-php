<?php

namespace Digia\GraphQL\Language\AST\Builder;

use Digia\GraphQL\Language\AST\Builder\Behavior\ParseKindTrait;
use Digia\GraphQL\Language\AST\Builder\Behavior\ParseLocationTrait;
use Digia\GraphQL\Language\AST\Builder\Behavior\ParseValueTrait;
use Digia\GraphQL\Language\AST\KindEnum;
use Digia\GraphQL\Language\AST\Node\Contract\NodeInterface;
use Digia\GraphQL\Language\AST\Node\NameNode;

class NameNodeBuilder extends AbstractNodeBuilder
{

    use ParseKindTrait;
    use ParseValueTrait;
    use ParseLocationTrait;

    /**
     * @param array $ast
     * @return NodeInterface
     */
    public function build(array $ast): NodeInterface
    {
        return new NameNode([
            'kind'  => $this->parseKind($ast),
            'value' => $this->parseValue($ast),
            'loc'   => $this->parseLocation($ast),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function supportsKind(string $kind): bool
    {
        return KindEnum::NAME === $kind;
    }
}