<?php

namespace Donquixote\HastyPhpAst\Ast\Parameter;

interface AstParameterInterface {

  /**
   * @return \Donquixote\HastyPhpAst\Ast\TypeHint\AstTypeHintInterface|null
   */
  function getTypeHint();

  /**
   * @return bool
   */
  function isByReference();

  /**
   * @return string
   */
  function getName();

  /**
   * @return bool
   */
  function isVariadic();

  /**
   * @return bool
   */
  function isOptional();

}
