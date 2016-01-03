<?php

namespace Donquixote\HastyPhpAst\Ast\Use_;

class AstUseStatement implements AstUseStatementInterface {

  /**
   * @var \Donquixote\HastyPhpAst\Name\FqcnInterface[]
   */
  private $fqcnsByAlias;

  /**
   * @param \Donquixote\HastyPhpAst\Name\FqcnInterface[] $fqcnsByAlias
   */
  function __construct(array $fqcnsByAlias) {
    $this->fqcnsByAlias = $fqcnsByAlias;
  }

  /**
   * @return \Donquixote\HastyPhpAst\Name\FqcnInterface[]
   */
  function getFqcnsByAlias() {
    return $this->fqcnsByAlias;
  }
}
