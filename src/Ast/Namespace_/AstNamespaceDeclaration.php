<?php

namespace Donquixote\HastyPhpAst\Ast\Namespace_;

use Donquixote\HastyPhpAst\Name\Fqcn;
use Donquixote\HastyPhpAst\Name\FqcnInterface;

class AstNamespaceDeclaration implements AstNamespaceDeclarationInterface {

  /**
   * @var \Donquixote\HastyPhpAst\Name\FqcnInterface
   */
  private $fqcn;

  /**
   * @param string $qcnString
   *
   * @return \Donquixote\HastyPhpAst\Ast\Namespace_\AstNamespaceDeclaration
   */
  static function createFromQcnString($qcnString) {
    return new self(Fqcn::createFromValidQcnString($qcnString));
  }

  /**
   * @param \Donquixote\HastyPhpAst\Name\FqcnInterface $fqcn
   */
  function __construct(FqcnInterface $fqcn) {
    $this->fqcn = $fqcn;
  }

  /**
   * @return \Donquixote\HastyPhpAst\Name\FqcnInterface
   */
  function getFqcn() {
    return $this->fqcn;
  }
}
