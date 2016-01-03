<?php

namespace Donquixote\HastyPhpAst\Ast\ClassLike;

use Donquixote\HastyPhpAst\Ast\Declaration\AstDeclarationInterface;

interface AstClassLikeInterface extends AstDeclarationInterface {

  /**
   * @return string[]
   */
  function getExtendsAliases();

  /**
   * @return string[]
   */
  function getImplementsAliases();

  /**
   * @return \Donquixote\HastyPhpAst\Ast\ClassLikeBody\AstClassLikeBodyInterface
   */
  function getBody();

}
