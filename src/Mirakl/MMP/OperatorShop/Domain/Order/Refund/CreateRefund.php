<?php
namespace Mirakl\MMP\OperatorShop\Domain\Order\Refund;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxAmountCollection;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdown;

/**
 * @method  float                       getAmount()
 * @method  $this                       setAmount(float $amount)
 * @method  AmountBreakdown             getAmountBreakdown()
 * @method  $this                       setAmountBreakdown(AmountBreakdown $amountBreakdown)
 * @method  string                      getCurrencyIsoCode()
 * @method  $this                       setCurrencyIsoCode(string $currencyIsoCode)
 * @method  int                         getQuantity()
 * @method  $this                       setQuantity(int $qty)
 * @method  string                      getReasonCode()
 * @method  $this                       setReasonCode(string $reasonCode)
 * @method  float                       getShippingAmount()
 * @method  $this                       setShippingAmount(float $amount)
 * @method  AmountBreakdown             getShippingAmountBreakdown()
 * @method  $this                       setShippingAmountBreakdown(AmountBreakdown $shippingAmountBreakdown)
 * @method  OrderTaxAmountCollection    getShippingTaxes()
 * @method  $this                       setShippingTaxes(array|OrderTaxAmountCollection $shippingTaxes)
 * @method  OrderTaxAmountCollection    getTaxes()
 * @method  $this                       setTaxes(array|OrderTaxAmountCollection $taxes)
 * @method  \DateTime                   getTransactionDate()
 * @method  $this                       setTransactionDate(\DateTime $transactionDate)
 * @method  string                      getOrderLineId()
 * @method  $this                       setOrderLineId(string $id)
 */
class CreateRefund extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'amount_breakdown'          => [AmountBreakdown::class, 'create'],
        'shipping_amount_breakdown' => [AmountBreakdown::class, 'create'],
        'shipping_taxes'            => [OrderTaxAmountCollection::class, 'create'],
        'taxes'                     => [OrderTaxAmountCollection::class, 'create'],
    ];
}