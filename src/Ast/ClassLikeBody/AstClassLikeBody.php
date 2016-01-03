<?php

namespace Donquixote\HastyPhpAst\Ast\ClassLikeBody;

class AstClassLikeBody implements AstClassLikeBodyInterface {

  /**
   * @var mixed[]
   */
  private $memberNodes;

  /**
   * @param mixed[] $memberNodes
   */
  function __construct(array $memberNodes) {
    $this->memberNodes = $memberNodes;
  }

  /**
   * @return \Donquixote\HastyPhpAst\Ast\FunctionLike\AstFunctionLikeInterface[]
   */
  function getMemberNodes() {
    return $this->memberNodes;
  }
}
