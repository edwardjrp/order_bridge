<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 2/18/15
 * Time: 11:28 AM
 * 
 */

namespace Bitxone\MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\DecimalType;
use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Orders 
{

	/**
	 * @var integer
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	private $id;

	/**
	* @var string
	*
	* @ORM\Column(name="guid", type="string", length=255, nullable=true)
	*/
	private $guid;

	/**
	* @var string
	*
	* @ORM\Column(name="file_type", type="string", length=100, nullable=true)
	*/
	private $file_type;

	/**
	* @var string
	*
	* @ORM\Column(name="record_type", type="string", length=100, nullable=true)
	*/
	private $record_type;

	/**
	* @var integer
	*
	* @ORM\Column(name="hub_order_id", type="integer", nullable=true)
	*/
	private $hub_order_id;

	/**
	* @var string
	*
	* @ORM\Column(name="merchant_order_id", type="string", length=100, nullable=true)
	*/
	private $merchant_order_id;

	/**
	* @var string
	*
	* @ORM\Column(name="order_type_code", type="string", length=100, nullable=true)
	*/
	private $order_type_code;

	/**
	* @var string
	*
	* @ORM\Column(name="merchant_id", type="string", length=100, nullable=true)
	*/
	private $merchant_id;

	/**
	* @var string
	*
	* @ORM\Column(name="merchant_vendor_id", type="string", length=100, nullable=true)
	*/
	private $merchant_vendor_id;

	/**
	* @var string
	*
	* @ORM\Column(name="shipper_id", type="string", length=100, nullable=true)
	*/
	private $shipper_id;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="order_date", type="datetime", nullable=true)
	*/
	private $order_date;

	/**
	* @var integer
	*
	* @ORM\Column(name="order_item_count", type="integer", nullable=true)
	*/
	private $order_item_count;


	/**
	*
	* @ORM\Column(name="merchandise_cost", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $merchandise_cost;

	/**
	*
	* @ORM\Column(name="merchandise_total", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $merchandise_total;

	/**
	*
	* @ORM\Column(name="shipping_total", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $shipping_total;

	/**
	*
	* @ORM\Column(name="handling_total", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $handling_total;

	/**
	*
	* @ORM\Column(name="sub_total", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $sub_total;

	/**
	*
	* @ORM\Column(name="tax_total", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $tax_total;

	/**
	*
	* @ORM\Column(name="order_total", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $order_total;

	/**
	*
	* @ORM\Column(name="credit", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $credit;

	/**
	*
	* @ORM\Column(name="balance_due", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $balance_due;

	/**
	* @var string
	*
	* @ORM\Column(name="discount_type_code", type="string", length=100, nullable=true)
	*/
	private $discount_type_code;

	/**
	* @var string
	*
	* @ORM\Column(name="discount_date_code", type="string", length=100, nullable=true)
	*/
	private $discount_date_code;

	/**
	*
	* @ORM\Column(name="discount_percent", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $discount_percent;

	/**
	* @var integer
	*
	* @ORM\Column(name="discount_days_due", type="integer", nullable=true)
	*/
	private $discount_days_due;

	/**
	* @var integer
	*
	* @ORM\Column(name="net_days_due", type="integer", nullable=true)
	*/
	private $net_days_due;

	/**
	*
	* @ORM\Column(name="discount_amount", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $discount_amount;

	/**
	* @var string
	*
	* @ORM\Column(name="multi_source", type="string", length=100, nullable=true)
	*/
	private $multi_source;

	/**
	* @var string
	*
	* @ORM\Column(name="packing_slip_message", type="string", length=2000, nullable=true)
	*/
	private $packing_slip_message;

	/**
	* @var string
	*
	* @ORM\Column(name="vendor_notes", type="string", length=2000, nullable=true)
	*/
	private $vendor_notes;

	/**
	* @var string
	*
	* @ORM\Column(name="vendor_warehouse_id", type="string", length=100, nullable=true)
	*/
	private $vendor_warehouse_id;

	/**
	* @var string
	*
	* @ORM\Column(name="vendor_commitment_id", type="string", length=100, nullable=true)
	*/
	private $vendor_commitment_id;

	/**
	* @var string
	*
	* @ORM\Column(name="sales_division", type="string", length=100, nullable=true)
	*/
	private $sales_division;

	/**
	* @var string
	*
	* @ORM\Column(name="merchant_phone_1", type="string", length=100, nullable=true)
	*/
	private $merchant_phone_1;

	/**
	* @var string
	*
	* @ORM\Column(name="merchant_phone_2", type="string", length=100, nullable=true)
	*/
	private $merchant_phone_2;

	/**
	* @var string
	*
	* @ORM\Column(name="merchant_phone_3", type="string", length=100, nullable=true)
	*/
	private $merchant_phone_3;

	/**
	* @var string
	*
	* @ORM\Column(name="customer_id", type="string", length=100, nullable=true)
	*/
	private $customer_id;

	/**
	* @var string
	*
	* @ORM\Column(name="customer_order_id", type="string", length=100, nullable=true)
	*/
	private $customer_order_id;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="customer_order_date", type="datetime", nullable=true)
	*/
	private $customer_order_date;

	/**
	* @var string
	*
	* @ORM\Column(name="customer_order_po_index", type="string", length=100, nullable=true)
	*/
	private $customer_order_po_index;

	/**
	* @var string
	*
	* @ORM\Column(name="customer_payment_method", type="string", length=100, nullable=true)
	*/
	private $customer_payment_method;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="cancel_after_date", type="datetime", nullable=true)
	*/
	private $cancel_after_date;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="required_ship_date", type="datetime", nullable=true)
	*/
	private $required_ship_date;

	/**
	* @var string
	*
	* @ORM\Column(name="promo_id", type="string", length=100, nullable=true)
	*/
	private $promo_id;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="promo_start_date", type="datetime", nullable=true)
	*/
	private $promo_start_date;

	/**
	* @var string
	*
	* @ORM\Column(name="merchandise_type_code", type="string", length=100, nullable=true)
	*/
	private $merchandise_type_code;

	/**
	* @var integer
	*
	* @ORM\Column(name="authorization_expense_number", type="integer", nullable=true)
	*/
	private $authorization_expense_number;

	/**
	* @var string
	*
	* @ORM\Column(name="file_identifier", type="string", length=100, nullable=true)
	*/
	private $file_identifier;

	/**
	* @var string
	*
	* @ORM\Column(name="signature_required_flag", type="string", length=100, nullable=true)
	*/
	private $signature_required_flag;

	/**
	* @var string
	*
	* @ORM\Column(name="customer_pickup_flag", type="string", length=100, nullable=true)
	*/
	private $customer_pickup_flag;

	/**
	* @var string
	*
	* @ORM\Column(name="merchant_division", type="string", length=100, nullable=true)
	*/
	private $merchant_division;

	/**
	* @var integer
	*
	* @ORM\Column(name="merchant_batch_number", type="integer", nullable=true)
	*/
	private $merchant_batch_number;

	/**
	* @var string
	*
	* @ORM\Column(name="merchant_department_site_id", type="string", length=100, nullable=true)
	*/
	private $merchant_department_site_id;

	/**
	* @var string
	*
	* @ORM\Column(name="reservation_number", type="string", length=100, nullable=true)
	*/
	private $reservation_number;
	
	/**
	* @var string
	*
	* @ORM\Column(name="shipping_method", type="string", length=100, nullable=true)
	*/
	private $shipping_method;
	
	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_address_type_code", type="string", length=100, nullable=true)
	*/
	private $ship_to_address_type_code;
	
	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_attention_line", type="string", length=100, nullable=true)
	*/
	private $ship_to_attention_line;
	
	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_company_name", type="string", length=100, nullable=true)
	*/
	private $ship_to_company_name;
	
	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_name", type="string", length=100, nullable=true)
	*/
	private $ship_to_name;
	
	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_firstname", type="string", length=100, nullable=true)
	*/
	private $ship_to_firstname;
	
	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_lastname", type="string", length=100, nullable=true)
	*/
	private $ship_to_lastname;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_address_1", type="string", length=2000, nullable=true)
	*/
	private $ship_to_address_1;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_address_2", type="string", length=2000, nullable=true)
	*/
	private $ship_to_address_2;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_address_3", type="string", length=2000, nullable=true)
	*/
	private $ship_to_address_3;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_city", type="string", length=100, nullable=true)
	*/
	private $ship_to_city;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_state", type="string", length=100, nullable=true)
	*/
	private $ship_to_state;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_postal_code", type="string", length=100, nullable=true)
	*/
	private $ship_to_postal_code;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_postal_code_extension", type="string", length=100, nullable=true)
	*/
	private $ship_to_postal_code_extension;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_country", type="string", length=100, nullable=true)
	*/
	private $ship_to_country;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_day_phone", type="string", length=100, nullable=true)
	*/
	private $ship_to_day_phone;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_night_phone", type="string", length=100, nullable=true)
	*/
	private $ship_to_night_phone;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_email", type="string", length=100, nullable=true)
	*/
	private $ship_to_email;

	/**
	* @var integer
	*
	* @ORM\Column(name="ship_to_account_number", type="integer", nullable=true)
	*/
	private $ship_to_account_number;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_gender", type="string", length=100, nullable=true)
	*/
	private $ship_to_gender;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_receipt_id", type="string", length=100, nullable=true)
	*/
	private $ship_to_receipt_id;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_vcd_id", type="string", length=100, nullable=true)
	*/
	private $ship_to_vcd_id;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_dea_number", type="string", length=100, nullable=true)
	*/
	private $ship_to_dea_number;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_address_type_code", type="string", length=100, nullable=true)
	*/
	private $bill_to_address_type_code;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_attention_line", type="string", length=100, nullable=true)
	*/
	private $bill_to_attention_line;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_company_name", type="string", length=100, nullable=true)
	*/
	private $bill_to_company_name;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_name", type="string", length=100, nullable=true)
	*/
	private $bill_to_name;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_firstname", type="string", length=100, nullable=true)
	*/
	private $bill_to_firstname;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_lastname", type="string", length=100, nullable=true)
	*/
	private $bill_to_lastname;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_address_1", type="string", length=100, nullable=true)
	*/
	private $bill_to_address_1;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_address_2", type="string", length=100, nullable=true)
	*/
	private $bill_to_address_2;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_address_3", type="string", length=100, nullable=true)
	*/
	private $bill_to_address_3;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_city", type="string", length=100, nullable=true)
	*/
	private $bill_to_city;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_state", type="string", length=100, nullable=true)
	*/
	private $bill_to_state;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_postal_code", type="string", length=100, nullable=true)
	*/
	private $bill_to_postal_code;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_postal_code_ext", type="string", length=100, nullable=true)
	*/
	private $bill_to_postal_code_ext;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_country", type="string", length=100, nullable=true)
	*/
	private $bill_to_country;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_day_phone", type="string", length=100, nullable=true)
	*/
	private $bill_to_day_phone;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_night_phone", type="string", length=100, nullable=true)
	*/
	private $bill_to_night_phone;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_email", type="string", length=100, nullable=true)
	*/
	private $bill_to_email;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_account_number", type="string", length=100, nullable=true)
	*/
	private $bill_to_account_number;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_gender", type="string", length=100, nullable=true)
	*/
	private $bill_to_gender;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_address_type_code", type="string", length=100, nullable=true)
	*/
	private $sold_to_address_type_code;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_attention_line", type="string", length=100, nullable=true)
	*/
	private $sold_to_attention_line;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_company_name", type="string", length=100, nullable=true)
	*/
	private $sold_to_company_name;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_name", type="string", length=100, nullable=true)
	*/
	private $sold_to_name;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_firstname", type="string", length=100, nullable=true)
	*/
	private $sold_to_firstname;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_lastname", type="string", length=100, nullable=true)
	*/
	private $sold_to_lastname;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_address_1", type="string", length=2000, nullable=true)
	*/
	private $sold_to_address_1;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_address_2", type="string", length=2000, nullable=true)
	*/
	private $sold_to_address_2;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_address_3", type="string", length=2000, nullable=true)
	*/
	private $sold_to_address_3;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_city", type="string", length=100, nullable=true)
	*/
	private $sold_to_city;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_state", type="string", length=100, nullable=true)
	*/
	private $sold_to_state;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_postal_code", type="string", length=100, nullable=true)
	*/
	private $sold_to_postal_code;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_postal_code_ext", type="string", length=100, nullable=true)
	*/
	private $sold_to_postal_code_ext;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_country", type="string", length=100, nullable=true)
	*/
	private $sold_to_country;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_day_phone", type="string", length=100, nullable=true)
	*/
	private $sold_to_day_phone;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_night_phone", type="string", length=100, nullable=true)
	*/
	private $sold_to_night_phone;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_email", type="string", length=100, nullable=true)
	*/
	private $sold_to_email;

	/**
	* @var integer
	*
	* @ORM\Column(name="sold_to_tax_exempt_number", type="integer", nullable=true)
	*/
	private $sold_to_tax_exempt_number;

	/**
	* @var integer
	*
	* @ORM\Column(name="sold_to_account_number", type="integer", nullable=true)
	*/
	private $sold_to_account_number;

	/**
	* @var string
	*
	* @ORM\Column(name="sold_to_gender", type="string", length=100, nullable=true)
	*/
	private $sold_to_gender;

	/**
	* @var string
	*
	* @ORM\Column(name="gift_message", type="string", length=2000, nullable=true)
	*/
	private $gift_message;

	/**
	* @var string
	*
	* @ORM\Column(name="return_addressee", type="string", length=100, nullable=true)
	*/
	private $return_addressee;

	/**
	* @var string
	*
	* @ORM\Column(name="returns_address_1", type="string", length=2000, nullable=true)
	*/
	private $returns_address_1;

	/**
	* @var string
	*
	* @ORM\Column(name="returns_address_2", type="string", length=2000, nullable=true)
	*/
	private $returns_address_2;

	/**
	* @var string
	*
	* @ORM\Column(name="returns_city", type="string", length=100, nullable=true)
	*/
	private $returns_city;

	/**
	* @var string
	*
	* @ORM\Column(name="returns_state", type="string", length=100, nullable=true)
	*/
	private $returns_state;

	/**
	* @var string
	*
	* @ORM\Column(name="returns_postal_code", type="string", length=100, nullable=true)
	*/
	private $returns_postal_code;

	/**
	* @var string
	*
	* @ORM\Column(name="returns_postal_code_ext", type="string", length=100, nullable=true)
	*/
	private $returns_postal_code_ext;

	/**
	* @var string
	*
	* @ORM\Column(name="returns_country", type="string", length=100, nullable=true)
	*/
	private $returns_country;

	/**
	* @var string
	*
	* @ORM\Column(name="returns_day_phone", type="string", length=100, nullable=true)
	*/
	private $returns_day_phone;

	/**
	* @var string
	*
	* @ORM\Column(name="returns_night_phone", type="string", length=100, nullable=true)
	*/
	private $returns_night_phone;

	/**
	* @var string
	*
	* @ORM\Column(name="returns_email", type="string", length=100, nullable=true)
	*/
	private $returns_email;

	/**
	* @var string
	*
	* @ORM\Column(name="returns_location_id", type="string", length=100, nullable=true)
	*/
	private $returns_location_id;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_address_code", type="string", length=100, nullable=true)
	*/
	private $invoice_to_address_code;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_attention_line", type="string", length=100, nullable=true)
	*/
	private $invoice_to_attention_line;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_company_name", type="string", length=100, nullable=true)
	*/
	private $invoice_to_company_name;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_name", type="string", length=100, nullable=true)
	*/
	private $invoice_to_name;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_firstname", type="string", length=100, nullable=true)
	*/
	private $invoice_to_firstname;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_lastname", type="string", length=100, nullable=true)
	*/
	private $invoice_to_lastname;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_address_1", type="string", length=2000, nullable=true)
	*/
	private $invoice_to_address_1;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_address_2", type="string", length=2000, nullable=true)
	*/
	private $invoice_to_address_2;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_address_3", type="string", length=2000, nullable=true)
	*/
	private $invoice_to_address_3;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_city", type="string", length=100, nullable=true)
	*/
	private $invoice_to_city;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_state", type="string", length=100, nullable=true)
	*/
	private $invoice_to_state;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_postal_code", type="string", length=100, nullable=true)
	*/
	private $invoice_to_postal_code;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_postal_code_ext", type="string", length=100, nullable=true)
	*/
	private $invoice_to_postal_code_ext;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_country", type="string", length=100, nullable=true)
	*/
	private $invoice_to_country;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_day_phone", type="string", length=100, nullable=true)
	*/
	private $invoice_to_day_phone;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_night_phone", type="string", length=100, nullable=true)
	*/
	private $invoice_to_night_phone;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_email", type="string", length=100, nullable=true)
	*/
	private $invoice_to_email;

	/**
	* @var integer
	*
	* @ORM\Column(name="invoice_to_tax_exempt_number", type="integer", nullable=true)
	*/
	private $invoice_to_tax_exempt_number;

	/**
	* @var integer
	*
	* @ORM\Column(name="invoice_to_account_number", type="integer", nullable=true)
	*/
	private $invoice_to_account_number;

	/**
	* @var string
	*
	* @ORM\Column(name="invoice_to_gender", type="string", length=100, nullable=true)
	*/
	private $invoice_to_gender;

	/**
	* @var string
	*
	* @ORM\Column(name="buying_contract", type="string", length=100, nullable=true)
	*/
	private $buying_contract;

	/**
	* @var string
	*
	* @ORM\Column(name="cc_party", type="string", length=100, nullable=true)
	*/
	private $cc_party;

	/**
	* @var string
	*
	* @ORM\Column(name="gift_indicator", type="string", length=100, nullable=true)
	*/
	private $gift_indicator;

	/**
	* @var string
	*
	* @ORM\Column(name="ap_vendor", type="string", length=100, nullable=true)
	*/
	private $ap_vendor;

	/**
	* @var string
	*
	* @ORM\Column(name="rm_email", type="string", length=100, nullable=true)
	*/
	private $rm_email;

	/**
	* @var string
	*
	* @ORM\Column(name="marketing_inserts", type="string", length=100, nullable=true)
	*/
	private $marketing_inserts;

	/**
	* @var string
	*
	* @ORM\Column(name="url", type="string", length=100, nullable=true)
	*/
	private $url;

	/**
	* @var string
	*
	* @ORM\Column(name="business_rule_code", type="string", length=100, nullable=true)
	*/
	private $business_rule_code;

	/**
	* @var string
	*
	* @ORM\Column(name="release_number", type="string", length=100, nullable=true)
	*/
	private $release_number;

	/**
	* @var string
	*
	* @ORM\Column(name="buyer_name", type="string", length=100, nullable=true)
	*/
	private $buyer_name;

	/**
	* @var string
	*
	* @ORM\Column(name="order_currency", type="string", length=100, nullable=true)
	*/
	private $order_currency;

	/**
	* @var string
	*
	* @ORM\Column(name="sale_currency", type="string", length=100, nullable=true)
	*/
	private $sale_currency;

	/**
	* @var string
	*
	* @ORM\Column(name="freight_collect_account", type="string", length=100, nullable=true)
	*/
	private $freight_collect_account;

	/**
	* @var string
	*
	* @ORM\Column(name="freight_payment_terms", type="string", length=100, nullable=true)
	*/
	private $freight_payment_terms;

	/**
	* @var string
	*
	* @ORM\Column(name="sales_agent", type="string", length=100, nullable=true)
	*/
	private $sales_agent;

	/**
	* @var string
	*
	* @ORM\Column(name="payment_method_code", type="string", length=100, nullable=true)
	*/
	private $payment_method_code;

	/**
	* @var string
	*
	* @ORM\Column(name="payment_method_description", type="string", length=100, nullable=true)
	*/
	private $payment_method_description;

	/**
	*
	* @ORM\Column(name="order_fulfillment_fee", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $order_fulfillment_fee;

	/**
	* @var string
	*
	* @ORM\Column(name="erp_customer_order_number", type="string", length=100, nullable=true)
	*/
	private $erp_customer_order_number;

	/**
	* @var string
	*
	* @ORM\Column(name="packing_slip_template_indicator", type="string", length=100, nullable=true)
	*/
	private $packing_slip_template_indicator;


	/**
	* @var \DateTime
	*
	* @ORM\Column(name="created_at", type="datetime", nullable=true)
	*/
	private $created_at;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="updated_at", type="datetime", nullable=true)
	*/
	private $updated_at;

	/**
	* @var integer
	* @ORM\ManyToOne(targetEntity="Bitxone\MainBundle\Entity\Retailers", inversedBy="orders", cascade={"persist"})
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="retailer_id", referencedColumnName="id", nullable=true)
    * })
	*/
	private $retailer_id;

	/**
	* @var string
	*
	* @ORM\Column(name="csv_source_filename", type="string", length=255, nullable=true)
	*/
	private $csv_source_filename;

	/**
	* @var integer
    * @ORM\OneToOne(targetEntity="Bitxone\MainBundle\Entity\OrdersStatuses")
    * @ORM\JoinColumn(name="status_id", referencedColumnName="id", nullable=true)
	*/
	private $status_id;

	/**
	  * @ORM\OneToMany(targetEntity="Bitxone\MainBundle\Entity\OrderDetails", mappedBy="order_id", cascade={"persist"})
	  * @ORM\JoinColumns({
	  *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
	  * })
	  */
	private $orderDetails;


	function __construct()
	{
		$this->orderDetails = new ArrayCollection();
	}

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId( $id )
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getGuid()
	{
		return $this->guid;
	}

	/**
	 * @param string $guid
	 */
	public function setGuid( $guid )
	{
		$this->guid = $guid;
	}

	/**
	 * @return string
	 */
	public function getFileType()
	{
		return $this->file_type;
	}

	/**
	 * @param string $file_type
	 */
	public function setFileType( $file_type )
	{
		$this->file_type = $file_type;
	}

	/**
	 * @return string
	 */
	public function getRecordType()
	{
		return $this->record_type;
	}

	/**
	 * @param string $record_type
	 */
	public function setRecordType( $record_type )
	{
		$this->record_type = $record_type;
	}

	/**
	 * @return int
	 */
	public function getHubOrderId()
	{
		return $this->hub_order_id;
	}

	/**
	 * @param int $hub_order_id
	 */
	public function setHubOrderId( $hub_order_id )
	{
		$this->hub_order_id = $hub_order_id;
	}

	/**
	 * @return string
	 */
	public function getMerchantOrderId()
	{
		return $this->merchant_order_id;
	}

	/**
	 * @param string $merchant_order_id
	 */
	public function setMerchantOrderId( $merchant_order_id )
	{
		$this->merchant_order_id = $merchant_order_id;
	}

	/**
	 * @return string
	 */
	public function getOrderTypeCode()
	{
		return $this->order_type_code;
	}

	/**
	 * @param string $order_type_code
	 */
	public function setOrderTypeCode( $order_type_code )
	{
		$this->order_type_code = $order_type_code;
	}

	/**
	 * @return string
	 */
	public function getMerchantId()
	{
		return $this->merchant_id;
	}

	/**
	 * @param string $merchant_id
	 */
	public function setMerchantId( $merchant_id )
	{
		$this->merchant_id = $merchant_id;
	}

	/**
	 * @return string
	 */
	public function getMerchantVendorId()
	{
		return $this->merchant_vendor_id;
	}

	/**
	 * @param string $merchant_vendor_id
	 */
	public function setMerchantVendorId( $merchant_vendor_id )
	{
		$this->merchant_vendor_id = $merchant_vendor_id;
	}

	/**
	 * @return string
	 */
	public function getShipperId()
	{
		return $this->shipper_id;
	}

	/**
	 * @param string $shipper_id
	 */
	public function setShipperId( $shipper_id )
	{
		$this->shipper_id = $shipper_id;
	}

	/**
	 * @return \DateTime
	 */
	public function getOrderDate()
	{
		return $this->order_date;
	}

	/**
	 * @param \DateTime $order_date
	 */
	public function setOrderDate( $order_date )
	{
		$this->order_date = $order_date;
	}

	/**
	 * @return int
	 */
	public function getOrderItemCount()
	{
		return $this->order_item_count;
	}

	/**
	 * @param int $order_item_count
	 */
	public function setOrderItemCount( $order_item_count )
	{
		$this->order_item_count = $order_item_count;
	}

	/**
	 * @return mixed
	 */
	public function getMerchandiseCost()
	{
		return $this->merchandise_cost;
	}

	/**
	 * @param mixed $merchandise_cost
	 */
	public function setMerchandiseCost( $merchandise_cost )
	{
		$this->merchandise_cost = $merchandise_cost;
	}

	/**
	 * @return mixed
	 */
	public function getMerchandiseTotal()
	{
		return $this->merchandise_total;
	}

	/**
	 * @param mixed $merchandise_total
	 */
	public function setMerchandiseTotal( $merchandise_total )
	{
		$this->merchandise_total = $merchandise_total;
	}

	/**
	 * @return mixed
	 */
	public function getShippingTotal()
	{
		return $this->shipping_total;
	}

	/**
	 * @param mixed $shipping_total
	 */
	public function setShippingTotal( $shipping_total )
	{
		$this->shipping_total = $shipping_total;
	}

	/**
	 * @return mixed
	 */
	public function getHandlingTotal()
	{
		return $this->handling_total;
	}

	/**
	 * @param mixed $handling_total
	 */
	public function setHandlingTotal( $handling_total )
	{
		$this->handling_total = $handling_total;
	}

	/**
	 * @return mixed
	 */
	public function getSubTotal()
	{
		return $this->sub_total;
	}

	/**
	 * @param mixed $sub_total
	 */
	public function setSubTotal( $sub_total )
	{
		$this->sub_total = $sub_total;
	}

	/**
	 * @return mixed
	 */
	public function getTaxTotal()
	{
		return $this->tax_total;
	}

	/**
	 * @param mixed $tax_total
	 */
	public function setTaxTotal( $tax_total )
	{
		$this->tax_total = $tax_total;
	}

	/**
	 * @return mixed
	 */
	public function getOrderTotal()
	{
		return $this->order_total;
	}

	/**
	 * @param mixed $order_total
	 */
	public function setOrderTotal( $order_total )
	{
		$this->order_total = $order_total;
	}

	/**
	 * @return mixed
	 */
	public function getCredit()
	{
		return $this->credit;
	}

	/**
	 * @param mixed $credit
	 */
	public function setCredit( $credit )
	{
		$this->credit = $credit;
	}

	/**
	 * @return mixed
	 */
	public function getBalanceDue()
	{
		return $this->balance_due;
	}

	/**
	 * @param mixed $balance_due
	 */
	public function setBalanceDue( $balance_due )
	{
		$this->balance_due = $balance_due;
	}

	/**
	 * @return string
	 */
	public function getDiscountTypeCode()
	{
		return $this->discount_type_code;
	}

	/**
	 * @param string $discount_type_code
	 */
	public function setDiscountTypeCode( $discount_type_code )
	{
		$this->discount_type_code = $discount_type_code;
	}

	/**
	 * @return string
	 */
	public function getDiscountDateCode()
	{
		return $this->discount_date_code;
	}

	/**
	 * @param string $discount_date_code
	 */
	public function setDiscountDateCode( $discount_date_code )
	{
		$this->discount_date_code = $discount_date_code;
	}

	/**
	 * @return mixed
	 */
	public function getDiscountPercent()
	{
		return $this->discount_percent;
	}

	/**
	 * @param mixed $discount_percent
	 */
	public function setDiscountPercent( $discount_percent )
	{
		$this->discount_percent = $discount_percent;
	}

	/**
	 * @return int
	 */
	public function getDiscountDaysDue()
	{
		return $this->discount_days_due;
	}

	/**
	 * @param int $discount_days_due
	 */
	public function setDiscountDaysDue( $discount_days_due )
	{
		$this->discount_days_due = $discount_days_due;
	}

	/**
	 * @return int
	 */
	public function getNetDaysDue()
	{
		return $this->net_days_due;
	}

	/**
	 * @param int $net_days_due
	 */
	public function setNetDaysDue( $net_days_due )
	{
		$this->net_days_due = $net_days_due;
	}

	/**
	 * @return mixed
	 */
	public function getDiscountAmount()
	{
		return $this->discount_amount;
	}

	/**
	 * @param mixed $discount_amount
	 */
	public function setDiscountAmount( $discount_amount )
	{
		$this->discount_amount = $discount_amount;
	}

	/**
	 * @return string
	 */
	public function getMultiSource()
	{
		return $this->multi_source;
	}

	/**
	 * @param string $multi_source
	 */
	public function setMultiSource( $multi_source )
	{
		$this->multi_source = $multi_source;
	}

	/**
	 * @return string
	 */
	public function getPackingSlipMessage()
	{
		return $this->packing_slip_message;
	}

	/**
	 * @param string $packing_slip_message
	 */
	public function setPackingSlipMessage( $packing_slip_message )
	{
		$this->packing_slip_message = $packing_slip_message;
	}

	/**
	 * @return string
	 */
	public function getVendorNotes()
	{
		return $this->vendor_notes;
	}

	/**
	 * @param string $vendor_notes
	 */
	public function setVendorNotes( $vendor_notes )
	{
		$this->vendor_notes = $vendor_notes;
	}

	/**
	 * @return string
	 */
	public function getVendorWarehouseId()
	{
		return $this->vendor_warehouse_id;
	}

	/**
	 * @param string $vendor_warehouse_id
	 */
	public function setVendorWarehouseId( $vendor_warehouse_id )
	{
		$this->vendor_warehouse_id = $vendor_warehouse_id;
	}

	/**
	 * @return string
	 */
	public function getVendorCommitmentId()
	{
		return $this->vendor_commitment_id;
	}

	/**
	 * @param string $vendor_commitment_id
	 */
	public function setVendorCommitmentId( $vendor_commitment_id )
	{
		$this->vendor_commitment_id = $vendor_commitment_id;
	}

	/**
	 * @return string
	 */
	public function getSalesDivision()
	{
		return $this->sales_division;
	}

	/**
	 * @param string $sales_division
	 */
	public function setSalesDivision( $sales_division )
	{
		$this->sales_division = $sales_division;
	}

	/**
	 * @return string
	 */
	public function getMerchantPhone1()
	{
		return $this->merchant_phone_1;
	}

	/**
	 * @param string $merchant_phone_1
	 */
	public function setMerchantPhone1( $merchant_phone_1 )
	{
		$this->merchant_phone_1 = $merchant_phone_1;
	}

	/**
	 * @return string
	 */
	public function getMerchantPhone2()
	{
		return $this->merchant_phone_2;
	}

	/**
	 * @param string $merchant_phone_2
	 */
	public function setMerchantPhone2( $merchant_phone_2 )
	{
		$this->merchant_phone_2 = $merchant_phone_2;
	}

	/**
	 * @return string
	 */
	public function getMerchantPhone3()
	{
		return $this->merchant_phone_3;
	}

	/**
	 * @param string $merchant_phone_3
	 */
	public function setMerchantPhone3( $merchant_phone_3 )
	{
		$this->merchant_phone_3 = $merchant_phone_3;
	}

	/**
	 * @return string
	 */
	public function getCustomerId()
	{
		return $this->customer_id;
	}

	/**
	 * @param string $customer_id
	 */
	public function setCustomerId( $customer_id )
	{
		$this->customer_id = $customer_id;
	}

	/**
	 * @return string
	 */
	public function getCustomerOrderId()
	{
		return $this->customer_order_id;
	}

	/**
	 * @param string $customer_order_id
	 */
	public function setCustomerOrderId( $customer_order_id )
	{
		$this->customer_order_id = $customer_order_id;
	}

	/**
	 * @return \DateTime
	 */
	public function getCustomerOrderDate()
	{
		return $this->customer_order_date;
	}

	/**
	 * @param \DateTime $customer_order_date
	 */
	public function setCustomerOrderDate( $customer_order_date )
	{
		$this->customer_order_date = $customer_order_date;
	}

	/**
	 * @return string
	 */
	public function getCustomerOrderPoIndex()
	{
		return $this->customer_order_po_index;
	}

	/**
	 * @param string $customer_order_po_index
	 */
	public function setCustomerOrderPoIndex( $customer_order_po_index )
	{
		$this->customer_order_po_index = $customer_order_po_index;
	}

	/**
	 * @return string
	 */
	public function getCustomerPaymentMethod()
	{
		return $this->customer_payment_method;
	}

	/**
	 * @param string $customer_payment_method
	 */
	public function setCustomerPaymentMethod( $customer_payment_method )
	{
		$this->customer_payment_method = $customer_payment_method;
	}

	/**
	 * @return \DateTime
	 */
	public function getCancelAfterDate()
	{
		return $this->cancel_after_date;
	}

	/**
	 * @param \DateTime $cancel_after_date
	 */
	public function setCancelAfterDate( $cancel_after_date )
	{
		$this->cancel_after_date = $cancel_after_date;
	}

	/**
	 * @return \DateTime
	 */
	public function getRequiredShipDate()
	{
		return $this->required_ship_date;
	}

	/**
	 * @param \DateTime $required_ship_date
	 */
	public function setRequiredShipDate( $required_ship_date )
	{
		$this->required_ship_date = $required_ship_date;
	}

	/**
	 * @return string
	 */
	public function getPromoId()
	{
		return $this->promo_id;
	}

	/**
	 * @param string $promo_id
	 */
	public function setPromoId( $promo_id )
	{
		$this->promo_id = $promo_id;
	}

	/**
	 * @return \DateTime
	 */
	public function getPromoStartDate()
	{
		return $this->promo_start_date;
	}

	/**
	 * @param \DateTime $promo_start_date
	 */
	public function setPromoStartDate( $promo_start_date )
	{
		$this->promo_start_date = $promo_start_date;
	}

	/**
	 * @return string
	 */
	public function getMerchandiseTypeCode()
	{
		return $this->merchandise_type_code;
	}

	/**
	 * @param string $merchandise_type_code
	 */
	public function setMerchandiseTypeCode( $merchandise_type_code )
	{
		$this->merchandise_type_code = $merchandise_type_code;
	}

	/**
	 * @return int
	 */
	public function getAuthorizationExpenseNumber()
	{
		return $this->authorization_expense_number;
	}

	/**
	 * @param int $authorization_expense_number
	 */
	public function setAuthorizationExpenseNumber( $authorization_expense_number )
	{
		$this->authorization_expense_number = $authorization_expense_number;
	}

	/**
	 * @return string
	 */
	public function getFileIdentifier()
	{
		return $this->file_identifier;
	}

	/**
	 * @param string $file_identifier
	 */
	public function setFileIdentifier( $file_identifier )
	{
		$this->file_identifier = $file_identifier;
	}

	/**
	 * @return string
	 */
	public function getSignatureRequiredFlag()
	{
		return $this->signature_required_flag;
	}

	/**
	 * @param string $signature_required_flag
	 */
	public function setSignatureRequiredFlag( $signature_required_flag )
	{
		$this->signature_required_flag = $signature_required_flag;
	}

	/**
	 * @return string
	 */
	public function getCustomerPickupFlag()
	{
		return $this->customer_pickup_flag;
	}

	/**
	 * @param string $customer_pickup_flag
	 */
	public function setCustomerPickupFlag( $customer_pickup_flag )
	{
		$this->customer_pickup_flag = $customer_pickup_flag;
	}

	/**
	 * @return string
	 */
	public function getMerchantDivision()
	{
		return $this->merchant_division;
	}

	/**
	 * @param string $merchant_division
	 */
	public function setMerchantDivision( $merchant_division )
	{
		$this->merchant_division = $merchant_division;
	}

	/**
	 * @return int
	 */
	public function getMerchantBatchNumber()
	{
		return $this->merchant_batch_number;
	}

	/**
	 * @param int $merchant_batch_number
	 */
	public function setMerchantBatchNumber( $merchant_batch_number )
	{
		$this->merchant_batch_number = $merchant_batch_number;
	}

	/**
	 * @return string
	 */
	public function getMerchantDepartmentSiteId()
	{
		return $this->merchant_department_site_id;
	}

	/**
	 * @param string $merchant_department_site_id
	 */
	public function setMerchantDepartmentSiteId( $merchant_department_site_id )
	{
		$this->merchant_department_site_id = $merchant_department_site_id;
	}

	/**
	 * @return string
	 */
	public function getReservationNumber()
	{
		return $this->reservation_number;
	}

	/**
	 * @param string $reservation_number
	 */
	public function setReservationNumber( $reservation_number )
	{
		$this->reservation_number = $reservation_number;
	}

	/**
	 * @return string
	 */
	public function getShippingMethod()
	{
		return $this->shipping_method;
	}

	/**
	 * @param string $shipping_method
	 */
	public function setShippingMethod( $shipping_method )
	{
		$this->shipping_method = $shipping_method;
	}

	/**
	 * @return string
	 */
	public function getShipToAddressTypeCode()
	{
		return $this->ship_to_address_type_code;
	}

	/**
	 * @param string $ship_to_address_type_code
	 */
	public function setShipToAddressTypeCode( $ship_to_address_type_code )
	{
		$this->ship_to_address_type_code = $ship_to_address_type_code;
	}

	/**
	 * @return string
	 */
	public function getShipToAttentionLine()
	{
		return $this->ship_to_attention_line;
	}

	/**
	 * @param string $ship_to_attention_line
	 */
	public function setShipToAttentionLine( $ship_to_attention_line )
	{
		$this->ship_to_attention_line = $ship_to_attention_line;
	}

	/**
	 * @return string
	 */
	public function getShipToCompanyName()
	{
		return $this->ship_to_company_name;
	}

	/**
	 * @param string $ship_to_company_name
	 */
	public function setShipToCompanyName( $ship_to_company_name )
	{
		$this->ship_to_company_name = $ship_to_company_name;
	}

	/**
	 * @return string
	 */
	public function getShipToName()
	{
		return $this->ship_to_name;
	}

	/**
	 * @param string $ship_to_name
	 */
	public function setShipToName( $ship_to_name )
	{
		$this->ship_to_name = $ship_to_name;
	}

	/**
	 * @return string
	 */
	public function getShipToFirstname()
	{
		return $this->ship_to_firstname;
	}

	/**
	 * @param string $ship_to_firstname
	 */
	public function setShipToFirstname( $ship_to_firstname )
	{
		$this->ship_to_firstname = $ship_to_firstname;
	}

	/**
	 * @return string
	 */
	public function getShipToLastname()
	{
		return $this->ship_to_lastname;
	}

	/**
	 * @param string $ship_to_lastname
	 */
	public function setShipToLastname( $ship_to_lastname )
	{
		$this->ship_to_lastname = $ship_to_lastname;
	}

	/**
	 * @return string
	 */
	public function getShipToAddress1()
	{
		return $this->ship_to_address_1;
	}

	/**
	 * @param string $ship_to_address_1
	 */
	public function setShipToAddress1( $ship_to_address_1 )
	{
		$this->ship_to_address_1 = $ship_to_address_1;
	}

	/**
	 * @return string
	 */
	public function getShipToAddress2()
	{
		return $this->ship_to_address_2;
	}

	/**
	 * @param string $ship_to_address_2
	 */
	public function setShipToAddress2( $ship_to_address_2 )
	{
		$this->ship_to_address_2 = $ship_to_address_2;
	}

	/**
	 * @return string
	 */
	public function getShipToAddress3()
	{
		return $this->ship_to_address_3;
	}

	/**
	 * @param string $ship_to_address_3
	 */
	public function setShipToAddress3( $ship_to_address_3 )
	{
		$this->ship_to_address_3 = $ship_to_address_3;
	}

	/**
	 * @return string
	 */
	public function getShipToCity()
	{
		return $this->ship_to_city;
	}

	/**
	 * @param string $ship_to_city
	 */
	public function setShipToCity( $ship_to_city )
	{
		$this->ship_to_city = $ship_to_city;
	}

	/**
	 * @return string
	 */
	public function getShipToState()
	{
		return $this->ship_to_state;
	}

	/**
	 * @param string $ship_to_state
	 */
	public function setShipToState( $ship_to_state )
	{
		$this->ship_to_state = $ship_to_state;
	}

	/**
	 * @return string
	 */
	public function getShipToPostalCode()
	{
		return $this->ship_to_postal_code;
	}

	/**
	 * @param string $ship_to_postal_code
	 */
	public function setShipToPostalCode( $ship_to_postal_code )
	{
		$this->ship_to_postal_code = $ship_to_postal_code;
	}

	/**
	 * @return string
	 */
	public function getShipToPostalCodeExtension()
	{
		return $this->ship_to_postal_code_extension;
	}

	/**
	 * @param string $ship_to_postal_code_extension
	 */
	public function setShipToPostalCodeExtension( $ship_to_postal_code_extension )
	{
		$this->ship_to_postal_code_extension = $ship_to_postal_code_extension;
	}

	/**
	 * @return string
	 */
	public function getShipToCountry()
	{
		return $this->ship_to_country;
	}

	/**
	 * @param string $ship_to_country
	 */
	public function setShipToCountry( $ship_to_country )
	{
		$this->ship_to_country = $ship_to_country;
	}

	/**
	 * @return string
	 */
	public function getShipToDayPhone()
	{
		return $this->ship_to_day_phone;
	}

	/**
	 * @param string $ship_to_day_phone
	 */
	public function setShipToDayPhone( $ship_to_day_phone )
	{
		$this->ship_to_day_phone = $ship_to_day_phone;
	}

	/**
	 * @return string
	 */
	public function getShipToNightPhone()
	{
		return $this->ship_to_night_phone;
	}

	/**
	 * @param string $ship_to_night_phone
	 */
	public function setShipToNightPhone( $ship_to_night_phone )
	{
		$this->ship_to_night_phone = $ship_to_night_phone;
	}

	/**
	 * @return string
	 */
	public function getShipToEmail()
	{
		return $this->ship_to_email;
	}

	/**
	 * @param string $ship_to_email
	 */
	public function setShipToEmail( $ship_to_email )
	{
		$this->ship_to_email = $ship_to_email;
	}

	/**
	 * @return int
	 */
	public function getShipToAccountNumber()
	{
		return $this->ship_to_account_number;
	}

	/**
	 * @param int $ship_to_account_number
	 */
	public function setShipToAccountNumber( $ship_to_account_number )
	{
		$this->ship_to_account_number = $ship_to_account_number;
	}

	/**
	 * @return string
	 */
	public function getShipToGender()
	{
		return $this->ship_to_gender;
	}

	/**
	 * @param string $ship_to_gender
	 */
	public function setShipToGender( $ship_to_gender )
	{
		$this->ship_to_gender = $ship_to_gender;
	}

	/**
	 * @return string
	 */
	public function getShipToReceiptId()
	{
		return $this->ship_to_receipt_id;
	}

	/**
	 * @param string $ship_to_receipt_id
	 */
	public function setShipToReceiptId( $ship_to_receipt_id )
	{
		$this->ship_to_receipt_id = $ship_to_receipt_id;
	}

	/**
	 * @return string
	 */
	public function getShipToVcdId()
	{
		return $this->ship_to_vcd_id;
	}

	/**
	 * @param string $ship_to_vcd_id
	 */
	public function setShipToVcdId( $ship_to_vcd_id )
	{
		$this->ship_to_vcd_id = $ship_to_vcd_id;
	}

	/**
	 * @return string
	 */
	public function getShipToDeaNumber()
	{
		return $this->ship_to_dea_number;
	}

	/**
	 * @param string $ship_to_dea_number
	 */
	public function setShipToDeaNumber( $ship_to_dea_number )
	{
		$this->ship_to_dea_number = $ship_to_dea_number;
	}

	/**
	 * @return string
	 */
	public function getBillToAddressTypeCode()
	{
		return $this->bill_to_address_type_code;
	}

	/**
	 * @param string $bill_to_address_type_code
	 */
	public function setBillToAddressTypeCode( $bill_to_address_type_code )
	{
		$this->bill_to_address_type_code = $bill_to_address_type_code;
	}

	/**
	 * @return string
	 */
	public function getBillToAttentionLine()
	{
		return $this->bill_to_attention_line;
	}

	/**
	 * @param string $bill_to_attention_line
	 */
	public function setBillToAttentionLine( $bill_to_attention_line )
	{
		$this->bill_to_attention_line = $bill_to_attention_line;
	}

	/**
	 * @return string
	 */
	public function getBillToCompanyName()
	{
		return $this->bill_to_company_name;
	}

	/**
	 * @param string $bill_to_company_name
	 */
	public function setBillToCompanyName( $bill_to_company_name )
	{
		$this->bill_to_company_name = $bill_to_company_name;
	}

	/**
	 * @return string
	 */
	public function getBillToName()
	{
		return $this->bill_to_name;
	}

	/**
	 * @param string $bill_to_name
	 */
	public function setBillToName( $bill_to_name )
	{
		$this->bill_to_name = $bill_to_name;
	}

	/**
	 * @return string
	 */
	public function getBillToFirstname()
	{
		return $this->bill_to_firstname;
	}

	/**
	 * @param string $bill_to_firstname
	 */
	public function setBillToFirstname( $bill_to_firstname )
	{
		$this->bill_to_firstname = $bill_to_firstname;
	}

	/**
	 * @return string
	 */
	public function getBillToLastname()
	{
		return $this->bill_to_lastname;
	}

	/**
	 * @param string $bill_to_lastname
	 */
	public function setBillToLastname( $bill_to_lastname )
	{
		$this->bill_to_lastname = $bill_to_lastname;
	}

	/**
	 * @return string
	 */
	public function getBillToAddress1()
	{
		return $this->bill_to_address_1;
	}

	/**
	 * @param string $bill_to_address_1
	 */
	public function setBillToAddress1( $bill_to_address_1 )
	{
		$this->bill_to_address_1 = $bill_to_address_1;
	}

	/**
	 * @return string
	 */
	public function getBillToAddress2()
	{
		return $this->bill_to_address_2;
	}

	/**
	 * @param string $bill_to_address_2
	 */
	public function setBillToAddress2( $bill_to_address_2 )
	{
		$this->bill_to_address_2 = $bill_to_address_2;
	}

	/**
	 * @return string
	 */
	public function getBillToAddress3()
	{
		return $this->bill_to_address_3;
	}

	/**
	 * @param string $bill_to_address_3
	 */
	public function setBillToAddress3( $bill_to_address_3 )
	{
		$this->bill_to_address_3 = $bill_to_address_3;
	}

	/**
	 * @return string
	 */
	public function getBillToCity()
	{
		return $this->bill_to_city;
	}

	/**
	 * @param string $bill_to_city
	 */
	public function setBillToCity( $bill_to_city )
	{
		$this->bill_to_city = $bill_to_city;
	}

	/**
	 * @return string
	 */
	public function getBillToState()
	{
		return $this->bill_to_state;
	}

	/**
	 * @param string $bill_to_state
	 */
	public function setBillToState( $bill_to_state )
	{
		$this->bill_to_state = $bill_to_state;
	}

	/**
	 * @return string
	 */
	public function getBillToPostalCode()
	{
		return $this->bill_to_postal_code;
	}

	/**
	 * @param string $bill_to_postal_code
	 */
	public function setBillToPostalCode( $bill_to_postal_code )
	{
		$this->bill_to_postal_code = $bill_to_postal_code;
	}

	/**
	 * @return string
	 */
	public function getBillToPostalCodeExt()
	{
		return $this->bill_to_postal_code_ext;
	}

	/**
	 * @param string $bill_to_postal_code_ext
	 */
	public function setBillToPostalCodeExt( $bill_to_postal_code_ext )
	{
		$this->bill_to_postal_code_ext = $bill_to_postal_code_ext;
	}

	/**
	 * @return string
	 */
	public function getBillToCountry()
	{
		return $this->bill_to_country;
	}

	/**
	 * @param string $bill_to_country
	 */
	public function setBillToCountry( $bill_to_country )
	{
		$this->bill_to_country = $bill_to_country;
	}

	/**
	 * @return string
	 */
	public function getBillToDayPhone()
	{
		return $this->bill_to_day_phone;
	}

	/**
	 * @param string $bill_to_day_phone
	 */
	public function setBillToDayPhone( $bill_to_day_phone )
	{
		$this->bill_to_day_phone = $bill_to_day_phone;
	}

	/**
	 * @return string
	 */
	public function getBillToNightPhone()
	{
		return $this->bill_to_night_phone;
	}

	/**
	 * @param string $bill_to_night_phone
	 */
	public function setBillToNightPhone( $bill_to_night_phone )
	{
		$this->bill_to_night_phone = $bill_to_night_phone;
	}

	/**
	 * @return string
	 */
	public function getBillToEmail()
	{
		return $this->bill_to_email;
	}

	/**
	 * @param string $bill_to_email
	 */
	public function setBillToEmail( $bill_to_email )
	{
		$this->bill_to_email = $bill_to_email;
	}

	/**
	 * @return string
	 */
	public function getBillToAccountNumber()
	{
		return $this->bill_to_account_number;
	}

	/**
	 * @param string $bill_to_account_number
	 */
	public function setBillToAccountNumber( $bill_to_account_number )
	{
		$this->bill_to_account_number = $bill_to_account_number;
	}

	/**
	 * @return string
	 */
	public function getBillToGender()
	{
		return $this->bill_to_gender;
	}

	/**
	 * @param string $bill_to_gender
	 */
	public function setBillToGender( $bill_to_gender )
	{
		$this->bill_to_gender = $bill_to_gender;
	}

	/**
	 * @return string
	 */
	public function getSoldToAddressTypeCode()
	{
		return $this->sold_to_address_type_code;
	}

	/**
	 * @param string $sold_to_address_type_code
	 */
	public function setSoldToAddressTypeCode( $sold_to_address_type_code )
	{
		$this->sold_to_address_type_code = $sold_to_address_type_code;
	}

	/**
	 * @return string
	 */
	public function getSoldToAttentionLine()
	{
		return $this->sold_to_attention_line;
	}

	/**
	 * @param string $sold_to_attention_line
	 */
	public function setSoldToAttentionLine( $sold_to_attention_line )
	{
		$this->sold_to_attention_line = $sold_to_attention_line;
	}

	/**
	 * @return string
	 */
	public function getSoldToCompanyName()
	{
		return $this->sold_to_company_name;
	}

	/**
	 * @param string $sold_to_company_name
	 */
	public function setSoldToCompanyName( $sold_to_company_name )
	{
		$this->sold_to_company_name = $sold_to_company_name;
	}

	/**
	 * @return string
	 */
	public function getSoldToName()
	{
		return $this->sold_to_name;
	}

	/**
	 * @param string $sold_to_name
	 */
	public function setSoldToName( $sold_to_name )
	{
		$this->sold_to_name = $sold_to_name;
	}

	/**
	 * @return string
	 */
	public function getSoldToFirstname()
	{
		return $this->sold_to_firstname;
	}

	/**
	 * @param string $sold_to_firstname
	 */
	public function setSoldToFirstname( $sold_to_firstname )
	{
		$this->sold_to_firstname = $sold_to_firstname;
	}

	/**
	 * @return string
	 */
	public function getSoldToLastname()
	{
		return $this->sold_to_lastname;
	}

	/**
	 * @param string $sold_to_lastname
	 */
	public function setSoldToLastname( $sold_to_lastname )
	{
		$this->sold_to_lastname = $sold_to_lastname;
	}

	/**
	 * @return string
	 */
	public function getSoldToAddress1()
	{
		return $this->sold_to_address_1;
	}

	/**
	 * @param string $sold_to_address_1
	 */
	public function setSoldToAddress1( $sold_to_address_1 )
	{
		$this->sold_to_address_1 = $sold_to_address_1;
	}

	/**
	 * @return string
	 */
	public function getSoldToAddress2()
	{
		return $this->sold_to_address_2;
	}

	/**
	 * @param string $sold_to_address_2
	 */
	public function setSoldToAddress2( $sold_to_address_2 )
	{
		$this->sold_to_address_2 = $sold_to_address_2;
	}

	/**
	 * @return string
	 */
	public function getSoldToAddress3()
	{
		return $this->sold_to_address_3;
	}

	/**
	 * @param string $sold_to_address_3
	 */
	public function setSoldToAddress3( $sold_to_address_3 )
	{
		$this->sold_to_address_3 = $sold_to_address_3;
	}

	/**
	 * @return string
	 */
	public function getSoldToCity()
	{
		return $this->sold_to_city;
	}

	/**
	 * @param string $sold_to_city
	 */
	public function setSoldToCity( $sold_to_city )
	{
		$this->sold_to_city = $sold_to_city;
	}

	/**
	 * @return string
	 */
	public function getSoldToState()
	{
		return $this->sold_to_state;
	}

	/**
	 * @param string $sold_to_state
	 */
	public function setSoldToState( $sold_to_state )
	{
		$this->sold_to_state = $sold_to_state;
	}

	/**
	 * @return string
	 */
	public function getSoldToPostalCode()
	{
		return $this->sold_to_postal_code;
	}

	/**
	 * @param string $sold_to_postal_code
	 */
	public function setSoldToPostalCode( $sold_to_postal_code )
	{
		$this->sold_to_postal_code = $sold_to_postal_code;
	}

	/**
	 * @return string
	 */
	public function getSoldToPostalCodeExt()
	{
		return $this->sold_to_postal_code_ext;
	}

	/**
	 * @param string $sold_to_postal_code_ext
	 */
	public function setSoldToPostalCodeExt( $sold_to_postal_code_ext )
	{
		$this->sold_to_postal_code_ext = $sold_to_postal_code_ext;
	}

	/**
	 * @return string
	 */
	public function getSoldToCountry()
	{
		return $this->sold_to_country;
	}

	/**
	 * @param string $sold_to_country
	 */
	public function setSoldToCountry( $sold_to_country )
	{
		$this->sold_to_country = $sold_to_country;
	}

	/**
	 * @return string
	 */
	public function getSoldToDayPhone()
	{
		return $this->sold_to_day_phone;
	}

	/**
	 * @param string $sold_to_day_phone
	 */
	public function setSoldToDayPhone( $sold_to_day_phone )
	{
		$this->sold_to_day_phone = $sold_to_day_phone;
	}

	/**
	 * @return string
	 */
	public function getSoldToNightPhone()
	{
		return $this->sold_to_night_phone;
	}

	/**
	 * @param string $sold_to_night_phone
	 */
	public function setSoldToNightPhone( $sold_to_night_phone )
	{
		$this->sold_to_night_phone = $sold_to_night_phone;
	}

	/**
	 * @return string
	 */
	public function getSoldToEmail()
	{
		return $this->sold_to_email;
	}

	/**
	 * @param string $sold_to_email
	 */
	public function setSoldToEmail( $sold_to_email )
	{
		$this->sold_to_email = $sold_to_email;
	}

	/**
	 * @return int
	 */
	public function getSoldToTaxExemptNumber()
	{
		return $this->sold_to_tax_exempt_number;
	}

	/**
	 * @param int $sold_to_tax_exempt_number
	 */
	public function setSoldToTaxExemptNumber( $sold_to_tax_exempt_number )
	{
		$this->sold_to_tax_exempt_number = $sold_to_tax_exempt_number;
	}

	/**
	 * @return int
	 */
	public function getSoldToAccountNumber()
	{
		return $this->sold_to_account_number;
	}

	/**
	 * @param int $sold_to_account_number
	 */
	public function setSoldToAccountNumber( $sold_to_account_number )
	{
		$this->sold_to_account_number = $sold_to_account_number;
	}

	/**
	 * @return string
	 */
	public function getSoldToGender()
	{
		return $this->sold_to_gender;
	}

	/**
	 * @param string $sold_to_gender
	 */
	public function setSoldToGender( $sold_to_gender )
	{
		$this->sold_to_gender = $sold_to_gender;
	}

	/**
	 * @return string
	 */
	public function getGiftMessage()
	{
		return $this->gift_message;
	}

	/**
	 * @param string $gift_message
	 */
	public function setGiftMessage( $gift_message )
	{
		$this->gift_message = $gift_message;
	}

	/**
	 * @return string
	 */
	public function getReturnAddressee()
	{
		return $this->return_addressee;
	}

	/**
	 * @param string $return_addressee
	 */
	public function setReturnAddressee( $return_addressee )
	{
		$this->return_addressee = $return_addressee;
	}

	/**
	 * @return string
	 */
	public function getReturnsAddress1()
	{
		return $this->returns_address_1;
	}

	/**
	 * @param string $returns_address_1
	 */
	public function setReturnsAddress1( $returns_address_1 )
	{
		$this->returns_address_1 = $returns_address_1;
	}

	/**
	 * @return string
	 */
	public function getReturnsAddress2()
	{
		return $this->returns_address_2;
	}

	/**
	 * @param string $returns_address_2
	 */
	public function setReturnsAddress2( $returns_address_2 )
	{
		$this->returns_address_2 = $returns_address_2;
	}

	/**
	 * @return string
	 */
	public function getReturnsCity()
	{
		return $this->returns_city;
	}

	/**
	 * @param string $returns_city
	 */
	public function setReturnsCity( $returns_city )
	{
		$this->returns_city = $returns_city;
	}

	/**
	 * @return string
	 */
	public function getReturnsState()
	{
		return $this->returns_state;
	}

	/**
	 * @param string $returns_state
	 */
	public function setReturnsState( $returns_state )
	{
		$this->returns_state = $returns_state;
	}

	/**
	 * @return string
	 */
	public function getReturnsPostalCode()
	{
		return $this->returns_postal_code;
	}

	/**
	 * @param string $returns_postal_code
	 */
	public function setReturnsPostalCode( $returns_postal_code )
	{
		$this->returns_postal_code = $returns_postal_code;
	}

	/**
	 * @return string
	 */
	public function getReturnsPostalCodeExt()
	{
		return $this->returns_postal_code_ext;
	}

	/**
	 * @param string $returns_postal_code_ext
	 */
	public function setReturnsPostalCodeExt( $returns_postal_code_ext )
	{
		$this->returns_postal_code_ext = $returns_postal_code_ext;
	}

	/**
	 * @return string
	 */
	public function getReturnsCountry()
	{
		return $this->returns_country;
	}

	/**
	 * @param string $returns_country
	 */
	public function setReturnsCountry( $returns_country )
	{
		$this->returns_country = $returns_country;
	}

	/**
	 * @return string
	 */
	public function getReturnsDayPhone()
	{
		return $this->returns_day_phone;
	}

	/**
	 * @param string $returns_day_phone
	 */
	public function setReturnsDayPhone( $returns_day_phone )
	{
		$this->returns_day_phone = $returns_day_phone;
	}

	/**
	 * @return string
	 */
	public function getReturnsNightPhone()
	{
		return $this->returns_night_phone;
	}

	/**
	 * @param string $returns_night_phone
	 */
	public function setReturnsNightPhone( $returns_night_phone )
	{
		$this->returns_night_phone = $returns_night_phone;
	}

	/**
	 * @return string
	 */
	public function getReturnsEmail()
	{
		return $this->returns_email;
	}

	/**
	 * @param string $returns_email
	 */
	public function setReturnsEmail( $returns_email )
	{
		$this->returns_email = $returns_email;
	}

	/**
	 * @return string
	 */
	public function getReturnsLocationId()
	{
		return $this->returns_location_id;
	}

	/**
	 * @param string $returns_location_id
	 */
	public function setReturnsLocationId( $returns_location_id )
	{
		$this->returns_location_id = $returns_location_id;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToAddressCode()
	{
		return $this->invoice_to_address_code;
	}

	/**
	 * @param string $invoice_to_address_code
	 */
	public function setInvoiceToAddressCode( $invoice_to_address_code )
	{
		$this->invoice_to_address_code = $invoice_to_address_code;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToAttentionLine()
	{
		return $this->invoice_to_attention_line;
	}

	/**
	 * @param string $invoice_to_attention_line
	 */
	public function setInvoiceToAttentionLine( $invoice_to_attention_line )
	{
		$this->invoice_to_attention_line = $invoice_to_attention_line;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToCompanyName()
	{
		return $this->invoice_to_company_name;
	}

	/**
	 * @param string $invoice_to_company_name
	 */
	public function setInvoiceToCompanyName( $invoice_to_company_name )
	{
		$this->invoice_to_company_name = $invoice_to_company_name;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToName()
	{
		return $this->invoice_to_name;
	}

	/**
	 * @param string $invoice_to_name
	 */
	public function setInvoiceToName( $invoice_to_name )
	{
		$this->invoice_to_name = $invoice_to_name;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToFirstname()
	{
		return $this->invoice_to_firstname;
	}

	/**
	 * @param string $invoice_to_firstname
	 */
	public function setInvoiceToFirstname( $invoice_to_firstname )
	{
		$this->invoice_to_firstname = $invoice_to_firstname;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToLastname()
	{
		return $this->invoice_to_lastname;
	}

	/**
	 * @param string $invoice_to_lastname
	 */
	public function setInvoiceToLastname( $invoice_to_lastname )
	{
		$this->invoice_to_lastname = $invoice_to_lastname;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToAddress1()
	{
		return $this->invoice_to_address_1;
	}

	/**
	 * @param string $invoice_to_address_1
	 */
	public function setInvoiceToAddress1( $invoice_to_address_1 )
	{
		$this->invoice_to_address_1 = $invoice_to_address_1;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToAddress2()
	{
		return $this->invoice_to_address_2;
	}

	/**
	 * @param string $invoice_to_address_2
	 */
	public function setInvoiceToAddress2( $invoice_to_address_2 )
	{
		$this->invoice_to_address_2 = $invoice_to_address_2;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToAddress3()
	{
		return $this->invoice_to_address_3;
	}

	/**
	 * @param string $invoice_to_address_3
	 */
	public function setInvoiceToAddress3( $invoice_to_address_3 )
	{
		$this->invoice_to_address_3 = $invoice_to_address_3;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToCity()
	{
		return $this->invoice_to_city;
	}

	/**
	 * @param string $invoice_to_city
	 */
	public function setInvoiceToCity( $invoice_to_city )
	{
		$this->invoice_to_city = $invoice_to_city;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToState()
	{
		return $this->invoice_to_state;
	}

	/**
	 * @param string $invoice_to_state
	 */
	public function setInvoiceToState( $invoice_to_state )
	{
		$this->invoice_to_state = $invoice_to_state;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToPostalCode()
	{
		return $this->invoice_to_postal_code;
	}

	/**
	 * @param string $invoice_to_postal_code
	 */
	public function setInvoiceToPostalCode( $invoice_to_postal_code )
	{
		$this->invoice_to_postal_code = $invoice_to_postal_code;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToPostalCodeExt()
	{
		return $this->invoice_to_postal_code_ext;
	}

	/**
	 * @param string $invoice_to_postal_code_ext
	 */
	public function setInvoiceToPostalCodeExt( $invoice_to_postal_code_ext )
	{
		$this->invoice_to_postal_code_ext = $invoice_to_postal_code_ext;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToCountry()
	{
		return $this->invoice_to_country;
	}

	/**
	 * @param string $invoice_to_country
	 */
	public function setInvoiceToCountry( $invoice_to_country )
	{
		$this->invoice_to_country = $invoice_to_country;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToDayPhone()
	{
		return $this->invoice_to_day_phone;
	}

	/**
	 * @param string $invoice_to_day_phone
	 */
	public function setInvoiceToDayPhone( $invoice_to_day_phone )
	{
		$this->invoice_to_day_phone = $invoice_to_day_phone;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToNightPhone()
	{
		return $this->invoice_to_night_phone;
	}

	/**
	 * @param string $invoice_to_night_phone
	 */
	public function setInvoiceToNightPhone( $invoice_to_night_phone )
	{
		$this->invoice_to_night_phone = $invoice_to_night_phone;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToEmail()
	{
		return $this->invoice_to_email;
	}

	/**
	 * @param string $invoice_to_email
	 */
	public function setInvoiceToEmail( $invoice_to_email )
	{
		$this->invoice_to_email = $invoice_to_email;
	}

	/**
	 * @return int
	 */
	public function getInvoiceToTaxExemptNumber()
	{
		return $this->invoice_to_tax_exempt_number;
	}

	/**
	 * @param int $invoice_to_tax_exempt_number
	 */
	public function setInvoiceToTaxExemptNumber( $invoice_to_tax_exempt_number )
	{
		$this->invoice_to_tax_exempt_number = $invoice_to_tax_exempt_number;
	}

	/**
	 * @return int
	 */
	public function getInvoiceToAccountNumber()
	{
		return $this->invoice_to_account_number;
	}

	/**
	 * @param int $invoice_to_account_number
	 */
	public function setInvoiceToAccountNumber( $invoice_to_account_number )
	{
		$this->invoice_to_account_number = $invoice_to_account_number;
	}

	/**
	 * @return string
	 */
	public function getInvoiceToGender()
	{
		return $this->invoice_to_gender;
	}

	/**
	 * @param string $invoice_to_gender
	 */
	public function setInvoiceToGender( $invoice_to_gender )
	{
		$this->invoice_to_gender = $invoice_to_gender;
	}

	/**
	 * @return string
	 */
	public function getBuyingContract()
	{
		return $this->buying_contract;
	}

	/**
	 * @param string $buying_contract
	 */
	public function setBuyingContract( $buying_contract )
	{
		$this->buying_contract = $buying_contract;
	}

	/**
	 * @return string
	 */
	public function getCcParty()
	{
		return $this->cc_party;
	}

	/**
	 * @param string $cc_party
	 */
	public function setCcParty( $cc_party )
	{
		$this->cc_party = $cc_party;
	}

	/**
	 * @return string
	 */
	public function getGiftIndicator()
	{
		return $this->gift_indicator;
	}

	/**
	 * @param string $gift_indicator
	 */
	public function setGiftIndicator( $gift_indicator )
	{
		$this->gift_indicator = $gift_indicator;
	}

	/**
	 * @return string
	 */
	public function getApVendor()
	{
		return $this->ap_vendor;
	}

	/**
	 * @param string $ap_vendor
	 */
	public function setApVendor( $ap_vendor )
	{
		$this->ap_vendor = $ap_vendor;
	}

	/**
	 * @return string
	 */
	public function getRmEmail()
	{
		return $this->rm_email;
	}

	/**
	 * @param string $rm_email
	 */
	public function setRmEmail( $rm_email )
	{
		$this->rm_email = $rm_email;
	}

	/**
	 * @return string
	 */
	public function getMarketingInserts()
	{
		return $this->marketing_inserts;
	}

	/**
	 * @param string $marketing_inserts
	 */
	public function setMarketingInserts( $marketing_inserts )
	{
		$this->marketing_inserts = $marketing_inserts;
	}

	/**
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * @param string $url
	 */
	public function setUrl( $url )
	{
		$this->url = $url;
	}

	/**
	 * @return string
	 */
	public function getBusinessRuleCode()
	{
		return $this->business_rule_code;
	}

	/**
	 * @param string $business_rule_code
	 */
	public function setBusinessRuleCode( $business_rule_code )
	{
		$this->business_rule_code = $business_rule_code;
	}

	/**
	 * @return string
	 */
	public function getReleaseNumber()
	{
		return $this->release_number;
	}

	/**
	 * @param string $release_number
	 */
	public function setReleaseNumber( $release_number )
	{
		$this->release_number = $release_number;
	}

	/**
	 * @return string
	 */
	public function getBuyerName()
	{
		return $this->buyer_name;
	}

	/**
	 * @param string $buyer_name
	 */
	public function setBuyerName( $buyer_name )
	{
		$this->buyer_name = $buyer_name;
	}

	/**
	 * @return string
	 */
	public function getOrderCurrency()
	{
		return $this->order_currency;
	}

	/**
	 * @param string $order_currency
	 */
	public function setOrderCurrency( $order_currency )
	{
		$this->order_currency = $order_currency;
	}

	/**
	 * @return string
	 */
	public function getSaleCurrency()
	{
		return $this->sale_currency;
	}

	/**
	 * @param string $sale_currency
	 */
	public function setSaleCurrency( $sale_currency )
	{
		$this->sale_currency = $sale_currency;
	}

	/**
	 * @return string
	 */
	public function getFreightCollectAccount()
	{
		return $this->freight_collect_account;
	}

	/**
	 * @param string $freight_collect_account
	 */
	public function setFreightCollectAccount( $freight_collect_account )
	{
		$this->freight_collect_account = $freight_collect_account;
	}

	/**
	 * @return string
	 */
	public function getFreightPaymentTerms()
	{
		return $this->freight_payment_terms;
	}

	/**
	 * @param string $freight_payment_terms
	 */
	public function setFreightPaymentTerms( $freight_payment_terms )
	{
		$this->freight_payment_terms = $freight_payment_terms;
	}

	/**
	 * @return string
	 */
	public function getSalesAgent()
	{
		return $this->sales_agent;
	}

	/**
	 * @param string $sales_agent
	 */
	public function setSalesAgent( $sales_agent )
	{
		$this->sales_agent = $sales_agent;
	}

	/**
	 * @return string
	 */
	public function getPaymentMethodCode()
	{
		return $this->payment_method_code;
	}

	/**
	 * @param string $payment_method_code
	 */
	public function setPaymentMethodCode( $payment_method_code )
	{
		$this->payment_method_code = $payment_method_code;
	}

	/**
	 * @return string
	 */
	public function getPaymentMethodDescription()
	{
		return $this->payment_method_description;
	}

	/**
	 * @param string $payment_method_description
	 */
	public function setPaymentMethodDescription( $payment_method_description )
	{
		$this->payment_method_description = $payment_method_description;
	}

	/**
	 * @return mixed
	 */
	public function getOrderFulfillmentFee()
	{
		return $this->order_fulfillment_fee;
	}

	/**
	 * @param mixed $order_fulfillment_fee
	 */
	public function setOrderFulfillmentFee( $order_fulfillment_fee )
	{
		$this->order_fulfillment_fee = $order_fulfillment_fee;
	}

	/**
	 * @return string
	 */
	public function getErpCustomerOrderNumber()
	{
		return $this->erp_customer_order_number;
	}

	/**
	 * @param string $erp_customer_order_number
	 */
	public function setErpCustomerOrderNumber( $erp_customer_order_number )
	{
		$this->erp_customer_order_number = $erp_customer_order_number;
	}

	/**
	 * @return string
	 */
	public function getPackingSlipTemplateIndicator()
	{
		return $this->packing_slip_template_indicator;
	}

	/**
	 * @param string $packing_slip_template_indicator
	 */
	public function setPackingSlipTemplateIndicator( $packing_slip_template_indicator )
	{
		$this->packing_slip_template_indicator = $packing_slip_template_indicator;
	}

	/**
	 * @return \DateTime
	 */
	public function getCreatedAt()
	{
		return $this->created_at;
	}

	/**
	 * @param \DateTime $created_at
	 */
	public function setCreatedAt( $created_at )
	{
		$this->created_at = $created_at;
	}

	/**
	 * @return \DateTime
	 */
	public function getUpdatedAt()
	{
		return $this->updated_at;
	}

	/**
	 * @param \DateTime $updated_at
	 */
	public function setUpdatedAt( $updated_at )
	{
		$this->updated_at = $updated_at;
	}

	/**
	 * @return mixed
	 */
	public function getRetailerId()
	{
		return $this->retailer_id;
	}

	/**
	 * @param mixed $retailer_id
	 */
	public function setRetailerId( $retailer_id )
	{
		$this->retailer_id = $retailer_id;
	}

	/**
	 * @return string
	 */
	public function getCsvSourceFilename()
	{
		return $this->csv_source_filename;
	}

	/**
	 * @param string $csv_source_filename
	 */
	public function setCsvSourceFilename( $csv_source_filename )
	{
		$this->csv_source_filename = $csv_source_filename;
	}

	/**
	 * @return mixed
	 */
	public function getStatusId()
	{
		return $this->status_id;
	}

	/**
	 * @param mixed $status_id
	 */
	public function setStatusId( $status_id )
	{
		$this->status_id = $status_id;
	}


	/**
	* @ORM\PrePersist
	*/
	public function setPrePersistGuid()
	{
		$this->setGuid( \uuid_create() );
	}

	/**
	* @ORM\PrePersist
	*/
	public function setPrePersistCreatedAt()
	{
		$this->setCreatedAt(new \DateTime());
	}

	/**
	* @ORM\PreUpdate
	*/
	public function setPreUpdateUpdatedAt()
	{
		$this->setUpdatedAt(new \DateTime());
	}

	public function __toString()
	{
		return (String)$this->getHubOrderId();
	}

	/**
	 * @return mixed
	 */
	public function getOrderDetails()
	{
		return $this->orderDetails;
	}

	/**
	 * @param mixed $orderDetails
	 */
	public function setOrderDetails( $orderDetails )
	{
		$this->orderDetails = $orderDetails;
	}

}

