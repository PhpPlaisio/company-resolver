<?php

namespace SetBased\Abc\CompanyResolver;

/**
 * Interface for CompanyResolvers. A CompanyResolver resolves the company under which a page request must be served.
 */
interface CompanyResolver
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the ID of the company (a.k.a. domain).
   *
   * @return int
   *
   * @api
   * @since 1.0.0
   */
  public function getCmpId(): int;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
