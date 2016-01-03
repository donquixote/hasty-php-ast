<?php

namespace Donquixote\HastyPhpAst\Ast\Ignored;

class AstIgnored implements AstIgnoredInterface {

  /**
   * @var array|\mixed[]
   */
  private $tokens;

  /**
   * @var int
   */
  private $iStart;

  /**
   * @var int
   */
  private $iAfter;

  /**
   * @param mixed[] $tokens
   * @param int $iStart
   * @param int $iAfter
   */
  function __construct(array $tokens, $iStart, $iAfter) {
    $this->tokens = $tokens;
    $this->iStart = $iStart;
    $this->iAfter = $iAfter;
  }

  /**
   * @return mixed[]
   */
  function getTokens() {
    return array_slice($this->tokens, $this->iStart, $this->iAfter - $this->iStart);
  }

  /**
   * @return string
   */
  function getPhp() {
    $php = '';
    foreach ($this->getTokens() as $token) {
      if (is_array($token)) {
        $php .= $token[1];
      }
      else {
        $php .= $token;
      }
    }
    return $php;
  }
}
