<?php
namespace Donquixote\HastyPhpAst\Ast\Ignored;

interface AstIgnoredInterface {

  /**
   * @return mixed[]
   */
  function getTokens();

  /**
   * @return string
   */
  function getPhp();
}
