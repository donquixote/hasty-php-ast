<?php

namespace Donquixote\HastyPhpAst\Ast\UseTrait;

class AstUseTrait implements AstUseTraitInterface {

  /**
   * @var string[]
   */
  private $names;

  /**
   * @param string[] $names
   */
  function __construct(array $names) {
    $this->names = $names;
  }

  /**
   * @return string[]
   */
  function getNames() {
    return $this->names;
  }

}
