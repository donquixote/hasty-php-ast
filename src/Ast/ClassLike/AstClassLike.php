<?php

namespace Donquixote\HastyPhpAst\Ast\ClassLike;

use Donquixote\HastyPhpAst\Ast\ClassLikeBody\AstClassLikeBodyInterface;
use Donquixote\HastyPhpAst\Ast\Declaration\AstDeclarationBase;

class AstClassLike extends AstDeclarationBase implements AstClassLikeInterface {

  /**
   * @var \Donquixote\HastyPhpAst\Ast\ClassLikeBody\AstClassLikeBodyInterface
   */
  private $body;

  /**
   * @var string[]
   */
  private $extendsAliases;

  /**
   * @var string[]
   */
  private $implementsAliases;

  /**
   * @param string $docComment
   * @param true[] $modifiers
   * @param string $shortName
   * @param string[] $extendsAliases
   * @param string[] $implementsAliases
   * @param \Donquixote\HastyPhpAst\Ast\ClassLikeBody\AstClassLikeBodyInterface $body
   */
  function __construct(
    $docComment,
    array $modifiers,
    $shortName,
    array $extendsAliases,
    array $implementsAliases,
    AstClassLikeBodyInterface $body
  ) {
    parent::__construct($docComment, $modifiers, $shortName);
    $this->extendsAliases = $extendsAliases;
    $this->implementsAliases = $implementsAliases;
    $this->body = $body;
  }

  /**
   * @return string[]
   */
  function getExtendsAliases() {
    return $this->extendsAliases;
  }

  /**
   * @return string[]
   */
  function getImplementsAliases() {
    return $this->implementsAliases;
  }

  /**
   * @return \Donquixote\HastyPhpAst\Ast\ClassLikeBody\AstClassLikeBodyInterface
   */
  function getBody() {
    return $this->body;
  }
}
