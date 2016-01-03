<?php

namespace Donquixote\HastyPhpAst\Ast\Use_;

interface AstUseStatementInterface {

  /**
   * @return \Donquixote\HastyPhpAst\Name\FqcnInterface[]
   */
  function getFqcnsByAlias();

}
