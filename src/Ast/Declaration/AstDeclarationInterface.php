<?php

namespace Donquixote\HastyPhpAst\Ast\Declaration;

interface AstDeclarationInterface {

  /**
   * @return string|null
   */
  function getDocComment();

  /**
   * @return bool[]
   *   Format: [T_ABSTRACT => true, T_CLASS => true, ..]
   */
  function getModifiers();

  /**
   * @param int $modifier
   *   E.g. T_INTERFACE or T_ABSTRACT
   *
   * @return bool
   */
  function hasModifier($modifier);

  /**
   * @return string
   *   Name of the class, without namespace.
   */
  function getShortName();

}
