<?php

namespace Donquixote\HastyPhpAst\Ast\ClassLikeBody;

use Donquixote\HastyPhpParser\Parser\PtkParser_ClassBody;
use Donquixote\HastyPhpParser\Parser\PtkParserInterface;

class AstClassLikeBody_LazyProxy implements AstClassLikeBodyInterface {

  /**
   * @var \Donquixote\HastyPhpParser\Parser\PtkParserInterface
   */
  private $classBodyParser;

  /**
   * @var array|\mixed[]
   */
  private $tokens;

  /**
   * @var int
   */
  private $iCurlyOpen;

  /**
   * @var array|null
   */
  private $memberNodes;

  /**
   * @param mixed[] $tokens
   * @param int $iCurlyOpen
   *
   * @return \Donquixote\HastyPhpAst\Ast\ClassLikeBody\AstClassLikeBody_LazyProxy
   */
  static function create(array $tokens, $iCurlyOpen) {
    return new self(PtkParser_ClassBody::create(), $tokens, $iCurlyOpen);
  }

  /**
   * @param \Donquixote\HastyPhpParser\Parser\PtkParserInterface $classBodyParser
   * @param mixed[] $tokens
   * @param int $iCurlyOpen
   *   Position of the opening curly bracket.
   */
  function __construct(PtkParserInterface $classBodyParser, array $tokens, $iCurlyOpen) {
    $this->classBodyParser = $classBodyParser;
    $this->tokens = $tokens;
    $this->iCurlyOpen = $iCurlyOpen;
  }

  /**
   * @return mixed[]
   */
  function getMemberNodes() {
    return NULL !== $this->memberNodes
      ? $this->memberNodes
      : $this->memberNodes = $this->findMemberNodes();
  }

  /**
   * @return mixed[]
   */
  private function findMemberNodes() {
    $i = $this->iCurlyOpen;
    $body = $this->classBodyParser->parse($this->tokens, $i);
    if ($body instanceof AstClassLikeBodyInterface) {
      return $body->getMemberNodes();
    }
    elseif (FALSE === $body) {
      // Not sure what to do here..
      return array();
    }
    else {
      // Not sure what to do here..
      return array();
    }
  }
}
