<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\Money\Converter;

use Generated\Shared\Transfer\MoneyTransfer;
use Money\Money;

class MoneyToTransferConverter implements MoneyToTransferConverterInterface
{

    /**
     * @param \Money\Money $money
     *
     * @return \Generated\Shared\Transfer\MoneyTransfer
     */
    public function convert(Money $money)
    {
        $moneyTransfer = new MoneyTransfer();
        $moneyTransfer->setAmount($money->getAmount());
        $moneyTransfer->setCurrency($money->getCurrency()->getCode());
        $moneyTransfer->setHash(spl_object_hash($money));

        return $moneyTransfer;
    }

}
