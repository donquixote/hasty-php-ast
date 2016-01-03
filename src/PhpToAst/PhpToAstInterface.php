<?php

namespace Donquixote\HastyPhpAst\PhpToAst;

interface PhpToAstInterface {

  /**
   * @param string $php
   *   PHP code read from a file.
   *
   * @return \Donquixote\HastyPhpAst\Ast\File\AstFileInterface
   */
  function phpGetAst($php);

}
