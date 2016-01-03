<?php

namespace Donquixote\HastyPhpAst\Ast\Declaration;

class AstDeclarationBase implements AstDeclarationInterface {

  /**
   * @var string|null
   */
  private $docblock;

  /**
   * @var array|\true[]
   */
  private $modifiers;

  /**
   * @var string
   */
  private $name;

  /**
   * @param string $docComment
   * @param true[] $modifiers
   * @param string $name
   */
  function __construct($docComment, array $modifiers, $name) {
    $this->docblock = $docComment;
    $this->modifiers = $modifiers;
    $this->name = $name;
  }

  /**
   * @return string|null
   */
  function getDocComment() {
    return $this->docblock;
  }

  /**
   * @return bool[]
   *   Format: [T_ABSTRACT => true, T_CLASS => true, ..]
   */
  function getModifiers() {
    return $this->modifiers;
  }

  /**
   * @param int $modifier
   *   E.g. T_INTERFACE or T_ABSTRACT
   *
   * @return bool
   */
  function hasModifier($modifier) {
    return !empty($this->modifiers[$modifier]);
  }

  /**
   * @return string
   *   Name of the class, without namespace.
   */
  function getName() {
    return $this->name;
  }

}
