<?php namespace Picqer\Financials\Moneybird\Entities\Generic;

use Picqer\Financials\Moneybird\Model;

/**
 * Class InvoiceDetail
 * @package Picqer\Financials\Moneybird\Entities\Generic
 */
abstract class InvoiceDetail extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'tax_rate_id',
        'ledger_account_id',
        'amount',
        'description',
        'period',
        'price',
        'row_order',
        'total_price_excl_tax_with_discount',
        'total_price_excl_tax_with_discount_base',
        'tax_report_reference',
        'created_at',
        'updated_at',
        '_destroy'
    ];
}