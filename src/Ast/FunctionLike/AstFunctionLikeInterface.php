<?php

namespace Donquixote\HastyPhpAst\Ast\FunctionLike;

use Donquixote\HastyPhpAst\Ast\Declaration\AstDeclarationInterface;

interface AstFunctionLikeInterface extends AstDeclarationInterface {

  /**
   * @return \Donquixote\HastyPhpAst\Ast\Parameter\AstParameterInterface[]
   */
  # function getParameters();
}
