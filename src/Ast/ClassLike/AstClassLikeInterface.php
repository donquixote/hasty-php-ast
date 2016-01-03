<?php

namespace Donquixote\HastyPhpAst\Ast\ClassLike;

use Donquixote\HastyPhpAst\Ast\Declaration\AstDeclarationInterface;

interface AstClassLikeInterface extends AstDeclarationInterface {

  /**
   * @return string|null
   *   Alias name of the parent class.
   */
  function getParentClassName();

  /**
   * @return string[]
   *   Alias names of implemented or extended interfaces.
   */
  function getInterfaceNames();

  /**
   * @return \Donquixote\HastyPhpAst\Ast\ClassLikeBody\AstClassLikeBodyInterface
   */
  function getBody();

}
