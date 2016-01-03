<?php

namespace Donquixote\HastyPhpAst\Ast\ClassLike;

use Donquixote\HastyPhpAst\Ast\ClassLikeBody\AstClassLikeBodyInterface;
use Donquixote\HastyPhpAst\Ast\Declaration\AstDeclarationBase;

class AstClassLike extends AstDeclarationBase implements AstClassLikeInterface {

  /**
   * @var string|null
   */
  private $parentClassName;

  /**
   * @var string[]
   */
  private $interfaceNames;

  /**
   * @var \Donquixote\HastyPhpAst\Ast\ClassLikeBody\AstClassLikeBodyInterface
   */
  private $body;

  /**
   * @param string $docComment
   * @param true[] $modifiers
   * @param string $name
   * @param string|null $parentClassName
   * @param string[] $interfaceNames
   * @param \Donquixote\HastyPhpAst\Ast\ClassLikeBody\AstClassLikeBodyInterface $body
   */
  function __construct(
    $docComment,
    array $modifiers,
    $name,
    $parentClassName,
    array $interfaceNames,
    AstClassLikeBodyInterface $body
  ) {
    parent::__construct($docComment, $modifiers, $name);
    $this->parentClassName = $parentClassName;
    $this->interfaceNames = $interfaceNames;
    $this->body = $body;
  }

  /**
   * @return string|null
   *   Alias name of the parent class.
   */
  function getParentClassName() {
    return $this->parentClassName;
  }

  /**
   * @return string[]
   *   Alias names of implemented or extended interfaces.
   */
  function getInterfaceNames() {
    return $this->interfaceNames;
  }

  /**
   * @return \Donquixote\HastyPhpAst\Ast\ClassLikeBody\AstClassLikeBodyInterface
   */
  function getBody() {
    return $this->body;
  }
}
