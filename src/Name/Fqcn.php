<?php

namespace Donquixote\HastyPhpAst\Name;

class Fqcn implements FqcnInterface {

  /**
   * Fully-qualified class name.
   *
   * @var string
   */
  private $fqcnStr;

  /**
   * Name without namespace.
   *
   * @var string
   */
  private $name;

  /**
   * @param string[] $fragments
   *
   * @return \Donquixote\HastyPhpAst\Name\FqcnInterface
   */
  static function createFromValidFragments(array $fragments) {
    $fqcnStr = '\\' . implode('\\', $fragments);
    $name = end($fragments);
    return new self($fqcnStr, $name);
  }

  /**
   * @param \Donquixote\HastyPhpAst\Name\FqcnInterface $namespace
   * @param string $name
   *
   * @return \Donquixote\HastyPhpAst\Name\FqcnInterface
   */
  static function createFromNameInNamespace(FqcnInterface $namespace, $name) {
    return new self($namespace->getFullyQualifiedName() . '\\' . $name, $name);
  }

  /**
   * @param string $qcnStr
   *
   * @return \Donquixote\HastyPhpAst\Name\FqcnInterface
   */
  static function createFromValidQcnString($qcnStr) {
    if ('' === $qcnStr) {
      throw new \InvalidArgumentException('Not meant for root namespace.');
    }
    elseif ('\\' === $qcnStr[0]) {
      throw new \InvalidArgumentException('A qcn string must not begin with "\\".');
    }
    if (FALSE === $pos = strrpos($qcnStr, '\\')) {
      $name = $qcnStr;
    }
    else {
      $name = substr($qcnStr, $pos + 1);
    }
    return new self('\\' . $qcnStr, $name);
  }

  /**
   * @param string $fqcnStr
   *
   * @return \Donquixote\HastyPhpAst\Name\FqcnInterface
   */
  static function createFromValidFqcnString($fqcnStr) {
    if ('' === $fqcnStr) {
      throw new \InvalidArgumentException('Not meant for root namespace.');
    }
    elseif ('\\' !== $fqcnStr[0]) {
      throw new \InvalidArgumentException('An fqcn string must begin with "\\".');
    }
    if (FALSE === $pos = strrpos($fqcnStr, '\\')) {
      throw new \InvalidArgumentException('An fqcn string must begin with "\\". What did we just say?');
    }
    elseif (0 === $pos) {
      $name = substr($fqcnStr, $pos + 1);
    }
    else {
      $name = substr($fqcnStr, 1);
    }
    return new self($fqcnStr, $name);
  }

  /**
   * @param string $fqcnStr
   * @param string $name
   */
  private function __construct($fqcnStr, $name) {
    $this->fqcnStr = $fqcnStr;
    $this->name = $name;
  }

  /**
   * Gets the namespace (for a class), or the parent namespace (for a namespace).
   *
   * @return \Donquixote\HastyPhpAst\Name\FqcnInterface|null
   */
  function getNamespace() {
    if (FALSE === $pos = strrpos($this->fqcnStr, '\\')) {
      return NULL;
    }
    $namespaceFqcnStr = substr($this->fqcnStr, 0, $pos);
    return self::createFromValidFqcnString($namespaceFqcnStr);
  }

  /**
   * @return string
   *   Class/interface/trait name without namespace.
   */
  function getName() {
    return $this->name;
  }

  /**
   * @return string
   *   Class/interface/trait name with namespace, but without leading namespace
   *   separator.
   */
  function getQualifiedName() {
    return substr($this->fqcnStr, 1);
  }

  /**
   * @return string
   *   Class/interface/trait name with namespace, and with leading namespace
   *   separator.
   */
  function getFullyQualifiedName() {
    return $this->fqcnStr;
  }
}
