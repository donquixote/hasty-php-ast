<?php

namespace Donquixote\HastyPhpAst\Ast\File;

class AstFile implements AstFileInterface {

  /**
   * @var array
   */
  private $nodes;

  /**
   * @param array $nodes
   */
  function __construct(array $nodes) {
    $this->nodes = $nodes;
  }

  /**
   * @return mixed[]
   */
  function getNodes() {
    return $this->nodes;
  }
}
