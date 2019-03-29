<?php

declare(strict_types=1);

namespace FondOfSpryker\Zed\CompanyUserQuote\Business;

use Generated\Shared\Transfer\QuoteCollectionTransfer;
use Generated\Shared\Transfer\QuoteCriteriaFilterTransfer;
use Spryker\Zed\Quote\Business\QuoteFacade;

/**
 * @method \FondOfSpryker\Zed\CompanyUserQuote\Business\CompanyUserQuoteBusinessFactory getFactory()
 * @method \FondOfSpryker\Zed\CompanyUserQuote\Persistence\CompanyUserQuoteRepositoryInterface getRepository()
 * @method \FondOfSpryker\Zed\CompanyUserQuote\Persistence\CompanyUserQuoteEntityManagerInterface getEntityManager()
 */
class CompanyUserQuoteFacade extends QuoteFacade implements CompanyUserQuoteFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\QuoteCriteriaFilterTransfer $quoteCriteriaFilterTransfer
     *
     * @return \Generated\Shared\Transfer\QuoteCollectionTransfer
     */
    public function getCompanyUserQuoteCollection(QuoteCriteriaFilterTransfer $quoteCriteriaFilterTransfer): QuoteCollectionTransfer
    {
        return $this->getFactory()
            ->createCompanyUserQuoteReader()
            ->getFilteredCompanyUserQuoteCollection($quoteCriteriaFilterTransfer);
    }
}
