<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createMakegoodsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202005\ProposalLineItem[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202005\ProposalLineItem[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\ProposalLineItem[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\ProposalLineItem[]|null $rval
     * @return \Google\AdsApi\AdManager\v202005\createMakegoodsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
