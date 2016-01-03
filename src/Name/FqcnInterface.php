<?php

namespace Donquixote\HastyPhpAst\Name;

interface FqcnInterface {

  /**
   * Gets the namespace (for a class), or the parent namespace (for a namespace).
   *
   * @return \Donquixote\HastyPhpAst\Name\FqcnInterface|null
   */
  function getNamespace();

  /**
   * @return string
   *   Class/interface/trait name without namespace.
   */
  function getName();

  /**
   * @return string
   *   Class/interface/trait name with namespace, but without leading namespace
   *   separator.
   */
  function getQualifiedName();

  /**
   * @return string
   *   Class/interface/trait name with namespace, and with leading namespace
   *   separator.
   */
  function getFullyQualifiedName();

}
