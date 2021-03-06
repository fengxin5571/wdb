<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Oct 2018 06:54:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CompanyWdbOrderRefund
 *
 * @property int $id
 * @property int $company_id
 * @property int $order_refund_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyWdbOrderRefund whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyWdbOrderRefund whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyWdbOrderRefund whereOrderRefundId($value)
 * @mixin \Eloquent
 */
class CompanyWdbOrderRefund extends Eloquent
{
	protected $table = 'company_wdb_order_refund';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'company_id' => 'int',
		'order_refund_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'order_refund_id'
	];
}
