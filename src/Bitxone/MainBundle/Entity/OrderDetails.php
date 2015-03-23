<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 2/18/15
 * Time: 11:10 PM
 * 
 */

namespace Bitxone\MainBundle\Entity;

use Doctrine\DBAL\Types\DecimalType;
use Doctrine\ORM\Mapping as ORM;

/**
 * OrderDetails
 *
 * @ORM\Table(name="order_details")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */

class OrderDetails 
{

	/**
	* @var integer
	*
	* @ORM\Column(name="id", type="integer", nullable=false)
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	private $id;

	/**
	* @var string
	*
	* @ORM\Column(name="guid", type="string", length=100, nullable=true)
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
	 * @ORM\Column(name="merchant_order_id", type="string", length=100, nullable=true)
	*/
	private $merchant_order_id;

	/**
	* @var integer
	*
	* @ORM\Column(name="order_line_item_number", type="integer", nullable=true)
	*/
	private $order_line_item_number;

	/**
	* @var integer
	*
	* @ORM\Column(name="merchant_line_item_number", type="integer", nullable=true)
	*/
	private $merchant_line_item_number;

	/**
	* @var integer
	*
	* @ORM\Column(name="customer_order_line_item_number", type="integer", nullable=true)
	*/
	private $customer_order_line_item_number;

	/**
	* @var integer
	*
	* @ORM\Column(name="hub_line_id", type="integer", nullable=true)
	*/
	private $hub_line_id;

	/**
	* @var string
	*
	* @ORM\Column(name="merchant_product_id", type="string", length=100, nullable=true)
	*/
	private $merchant_product_id;

	/**
	* @var string
	*
	* @ORM\Column(name="merchant_sku", type="string", length=100, nullable=true)
	*/
	private $merchant_sku;

	/**
	* @var string
	*
	* @ORM\Column(name="vendor_sku", type="string", length=100, nullable=true)
	*/
	private $vendor_sku;

	/**
	* @var string
	*
	* @ORM\Column(name="manufacturer_sku", type="string", length=100, nullable=true)
	*/
	private $manufacturer_sku;

	/**
	* @var string
	*
	* @ORM\Column(name="shopping_cart_sku", type="string", length=100, nullable=true)
	*/
	private $shopping_cart_sku;

	/**
	* @var string
	*
	* @ORM\Column(name="upc", type="string", length=100, nullable=true)
	*/
	private $upc;

	/**
	* @var integer
	*
	* @ORM\Column(name="european_article_number_ean", type="integer", nullable=true)
	*/
	private $european_article_number_ean;

	/**
	* @var string
	*
	* @ORM\Column(name="vendor_description", type="string", length=2000, nullable=true)
	*/
	private $vendor_description;

	/**
	* @var string
	*
	* @ORM\Column(name="vendor_style_number", type="string", length=2000, nullable=true)
	*/
	private $vendor_style_number;

	/**
	* @var string
	*
	* @ORM\Column(name="vendor_color_description", type="string", length=2000, nullable=true)
	*/
	private $vendor_color_description;

	/**
	* @var string
	*
	* @ORM\Column(name="vendor_size_description", type="string", length=2000, nullable=true)
	*/
	private $vendor_size_description;

	/**
	* @var string
	*
	* @ORM\Column(name="color_code", type="string", length=100, nullable=true)
	*/
	private $color_code;

	/**
	* @var string
	*
	* @ORM\Column(name="size_code", type="string", length=100, nullable=true)
	*/
	private $size_code;

	/**
	* @var string
	*
	* @ORM\Column(name="set_code", type="string", length=100, nullable=true)
	*/
	private $set_code;

	/**
	* @var string
	*
	* @ORM\Column(name="description", type="string", length=100, nullable=true)
	*/
	private $description;

	/**
	* @var string
	*
	* @ORM\Column(name="description_2", type="string", length=100, nullable=true)
	*/
	private $description_2;

	/**
	* @var string
	*
	* @ORM\Column(name="description_3", type="string", length=100, nullable=true)
	*/
	private $description_3;

	/**
	* @var string
	*
	* @ORM\Column(name="color_size_description", type="string", length=100, nullable=true)
	*/
	private $color_size_description;

	/**
	* @var integer
	*
	* @ORM\Column(name="quantity", type="integer", nullable=true)
	*/
	private $quantity;

	/**
	* @var string
	*
	* @ORM\Column(name="unit_of_measure", type="string", length=100, nullable=true)
	*/
	private $unit_of_measure;


	/**
	*
	* @ORM\Column(name="full_retail", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $full_retail;

	/**
	* @var string
	*
	* @ORM\Column(name="encoded_price", type="string", length=100, nullable=true)
	*/
	private $encoded_price;

	/**
	* @var string
	*
	* @ORM\Column(name="weight_unit", type="string", length=100, nullable=true)
	*/
	private $weight_unit;

	/**
	*
	* @ORM\Column(name="unit_shipping_weight", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $unit_shipping_weight;

	/**
	*
	* @ORM\Column(name="unit_price", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $unit_price;

	/**
	*
	* @ORM\Column(name="unit_cost", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $unit_cost;

	/**
	*
	* @ORM\Column(name="line_merchandise_cost", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $line_merchandise_cost;

	/**
	*
	* @ORM\Column(name="merchandise_amount", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $merchandise_amount;

	/**
	*
	* @ORM\Column(name="line_shipping", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $line_shipping;

	/**
	*
	* @ORM\Column(name="line_handling", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $line_handling;

	/**
	*
	* @ORM\Column(name="line_sub_total", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $line_sub_total;

	/**
	*
	* @ORM\Column(name="line_tax", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $line_tax;

	/**
	*
	* @ORM\Column(name="line_item_total", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $line_item_total;

	/**
	*
	* @ORM\Column(name="line_credits", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $line_credits;

	/**
	*
	* @ORM\Column(name="line_balance_due", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $line_balance_due;

	/**
	*
	* @ORM\Column(name="line_discount_amount", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $line_discount_amount;

	/**
	* @var string
	*
	* @ORM\Column(name="vendor_warehouse_id", type="string", length=100, nullable=true)
	*/
	private $vendor_warehouse_id;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="expected_ship_date", type="datetime", nullable=true)
	*/
	private $expected_ship_date;

	/**
	* @var string
	*
	* @ORM\Column(name="packing_slip_line_message", type="string", length=2000, nullable=true)
	*/
	private $packing_slip_line_message;

	/**
	* @var string
	*
	* @ORM\Column(name="vendor_line_note", type="string", length=2000, nullable=true)
	*/
	private $vendor_line_note;

	/**
	* @var string
	*
	* @ORM\Column(name="gift_line_message", type="string", length=2000, nullable=true)
	*/
	private $gift_line_message;

	/**
	* @var string
	*
	* @ORM\Column(name="store_name", type="string", length=100, nullable=true)
	*/
	private $store_name;

	/**
	* @var string
	*
	* @ORM\Column(name="personalization_data", type="string", length=2000, nullable=true)
	*/
	private $personalization_data;

	/**
	* @var integer
	*
	* @ORM\Column(name="factory_order_number", type="integer", nullable=true)
	*/
	private $factory_order_number;

	/**
	* @var integer
	*
	* @ORM\Column(name="sub_unit_quantity", type="integer", nullable=true)
	*/
	private $sub_unit_quantity;

	/**
	* @var string
	*
	* @ORM\Column(name="gift_wrap_indicator", type="string", length=100, nullable=true)
	*/
	private $gift_wrap_indicator;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="hold_until_date", type="datetime", nullable=true)
	*/
	private $hold_until_date;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="required_ship_date", type="datetime", nullable=true)
	*/
	private $required_ship_date;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="required_delivery_date", type="datetime", nullable=true)
	*/
	private $required_delivery_date;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="requested_arrival_date", type="datetime", nullable=true)
	*/
	private $requested_arrival_date;

	/**
	* @var string
	*
	* @ORM\Column(name="shipper_hub_code", type="string", length=100, nullable=true)
	*/
	private $shipper_hub_code;

	/**
	* @var integer
	*
	* @ORM\Column(name="permit_number", type="integer", nullable=true)
	*/
	private $permit_number;

	/**
	* @var string
	*
	* @ORM\Column(name="shipping_method", type="string", length=100, nullable=true)
	*/
	private $shipping_method;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_code", type="string", length=100, nullable=true)
	*/
	private $ship_code;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_id", type="string", length=100, nullable=true)
	*/
	private $ship_to_id;

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
	* @ORM\Column(name="ship_to_first_name", type="string", length=100, nullable=true)
	*/
	private $ship_to_first_name;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_last_name", type="string", length=100, nullable=true)
	*/
	private $ship_to_last_name;

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
	*
	* @ORM\Column(name="ship_to_shipping_charge", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $ship_to_shipping_charge;

	/**
	*
	* @ORM\Column(name="ship_to_tax_charge", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $ship_to_tax_charge;

	/**
	*
	* @ORM\Column(name="ship_to_total_charge", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $ship_to_total_charge;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_receipt_id", type="string", length=100, nullable=true)
	*/
	private $ship_to_receipt_id;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_vcdid", type="string", length=100, nullable=true)
	*/
	private $ship_to_vcdid;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_discount_type_code", type="string", length=100, nullable=true)
	*/
	private $ship_to_discount_type_code;

	/**
	* @var string
	*
	* @ORM\Column(name="ship_to_discount_date_code", type="string", length=100, nullable=true)
	*/
	private $ship_to_discount_date_code;

	/**
	*
	* @ORM\Column(name="ship_to_discount_percent", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $ship_to_discount_percent;

	/**
	* @var integer
	*
	* @ORM\Column(name="ship_to_discount_days_due", type="integer", nullable=true)
	*/
	private $ship_to_discount_days_due;

	/**
	* @var integer
	*
	* @ORM\Column(name="ship_to_net_days_due", type="integer", nullable=true)
	*/
	private $ship_to_net_days_due;

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
	* @ORM\Column(name="bill_to_first_name", type="string", length=100, nullable=true)
	*/
	private $bill_to_first_name;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_last_name", type="string", length=100, nullable=true)
	*/
	private $bill_to_last_name;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_address_1", type="string", length=2000, nullable=true)
	*/
	private $bill_to_address_1;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_address_2", type="string", length=2000, nullable=true)
	*/
	private $bill_to_address_2;

	/**
	* @var string
	*
	* @ORM\Column(name="bill_to_address_3", type="string", length=2000, nullable=true)
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
	* @ORM\Column(name="bill_to_postal_code_extension", type="string", length=100, nullable=true)
	*/
	private $bill_to_postal_code_extension;

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
	* @ORM\Column(name="returns_addressee", type="string", length=100, nullable=true)
	*/
	private $returns_addressee;

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
	* @ORM\Column(name="returns_postal_code_extension", type="string", length=100, nullable=true)
	*/
	private $returns_postal_code_extension;

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
	* @ORM\Column(name="shipping_hub", type="string", length=100, nullable=true)
	*/
	private $shipping_hub;

	/**
	* @var string
	*
	* @ORM\Column(name="serialized_product", type="string", length=100, nullable=true)
	*/
	private $serialized_product;

	/**
	* @var string
	*
	* @ORM\Column(name="permit_issuing_city", type="string", length=100, nullable=true)
	*/
	private $permit_issuing_city;

	/**
	* @var string
	*
	* @ORM\Column(name="permit_issuing_state", type="string", length=100, nullable=true)
	*/
	private $permit_issuing_state;

	/**
	* @var string
	*
	* @ORM\Column(name="release_index", type="string", length=100, nullable=true)
	*/
	private $release_index;

	/**
	* @var string
	*
	* @ORM\Column(name="customer_sku", type="string", length=100, nullable=true)
	*/
	private $customer_sku;

	/**
	* @var string
	*
	* @ORM\Column(name="vendor_quote_number", type="string", length=100, nullable=true)
	*/
	private $vendor_quote_number;

	/**
	* @var string
	*
	* @ORM\Column(name="packing_slip_receiving_instructions", type="string", length=100, nullable=true)
	*/
	private $packing_slip_receiving_instructions;

	/**
	* @var string
	*
	* @ORM\Column(name="gift_registry_id", type="string", length=100, nullable=true)
	*/
	private $gift_registry_id;

	/**
	*
	* @ORM\Column(name="unit_processing_cost", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $unit_processing_cost;

	/**
	* @var string
	*
	* @ORM\Column(name="merchant_department", type="string", length=100, nullable=true)
	*/
	private $merchant_department;

	/**
	* @var integer
	*
	* @ORM\Column(name="transfer_location_id", type="integer", nullable=true)
	*/
	private $transfer_location_id;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_address_type_code", type="string", length=100, nullable=true)
	*/
	private $transfer_location_address_type_code;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_attention_line", type="string", length=100, nullable=true)
	*/
	private $transfer_location_attention_line;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_company_name", type="string", length=100, nullable=true)
	*/
	private $transfer_location_company_name;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_name", type="string", length=100, nullable=true)
	*/
	private $transfer_location_name;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_first_name", type="string", length=100, nullable=true)
	*/
	private $transfer_location_first_name;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_last_name", type="string", length=100, nullable=true)
	*/
	private $transfer_location_last_name;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_address_1", type="string", length=2000, nullable=true)
	*/
	private $transfer_location_address_1;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_address_2", type="string", length=2000, nullable=true)
	*/
	private $transfer_location_address_2;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_address_3", type="string", length=2000, nullable=true)
	*/
	private $transfer_location_address_3;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_city", type="string", length=100, nullable=true)
	*/
	private $transfer_location_city;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_state", type="string", length=100, nullable=true)
	*/
	private $transfer_location_state;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_postal_code", type="string", length=100, nullable=true)
	*/
	private $transfer_location_postal_code;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_postal_code_extension", type="string", length=100, nullable=true)
	*/
	private $transfer_location_postal_code_extension;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_country", type="string", length=100, nullable=true)
	*/
	private $transfer_location_country;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_day_phone", type="string", length=100, nullable=true)
	*/
	private $transfer_location_day_phone;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_night_phone", type="string", length=100, nullable=true)
	*/
	private $transfer_location_night_phone;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_email", type="string", length=100, nullable=true)
	*/
	private $transfer_location_email;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_account_number", type="string", length=100, nullable=true)
	*/
	private $transfer_location_account_number;

	/**
	* @var string
	*
	* @ORM\Column(name="transfer_location_gender", type="string", length=100, nullable=true)
	*/
	private $transfer_location_gender;

	/**
	* @var string
	*
	* @ORM\Column(name="ndc_number", type="string", length=100, nullable=true)
	*/
	private $ndc_number;

	/**
	* @var string
	*
	* @ORM\Column(name="vendor_pattern_code", type="string", length=100, nullable=true)
	*/
	private $vendor_pattern_code;

	/**
	* @var string
	*
	* @ORM\Column(name="vendor_finish_code", type="string", length=100, nullable=true)
	*/
	private $vendor_finish_code;

	/**
	* @var string
	*
	* @ORM\Column(name="unit_cost_adjustment_allowed", type="string", length=100, nullable=true)
	*/
	private $unit_cost_adjustment_allowed;

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
    * @ORM\OneToOne(targetEntity="Bitxone\MainBundle\Entity\OrdersStatuses")
    * @ORM\JoinColumn(name="status_id", referencedColumnName="id", nullable=true)
	*/
	private $status_id;

	/**
	* @var integer
	* @ORM\ManyToOne(targetEntity="Bitxone\MainBundle\Entity\Orders", inversedBy="orderDetails", cascade={"persist"})
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
    * })
	*/
	private $order_id;

	/**
	* @var integer
	* @ORM\OneToOne(targetEntity="Bitxone\MainBundle\Entity\OrderCancelationReasons")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="cancel_reason_id", referencedColumnName="id", nullable=true)
    * })
	*/
	private $cancel_reason_id;

	/**
	* @var integer
	* @ORM\OneToOne(targetEntity="Bitxone\MainBundle\Entity\OrderReturnReasons")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="return_reason_id", referencedColumnName="id", nullable=true)
    * })
	*/
	private $return_reason_id;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="return_date", type="datetime", nullable=true)
	*/
	private $return_date;

	/**
	* @var integer
	* @ORM\OneToOne(targetEntity="Bitxone\MainBundle\Entity\ReturnMethodHandlings")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="return_method_handling_id", referencedColumnName="id", nullable=true)
    * })
	*/
	private $return_method_handling_id;

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
	 * @return int
	 */
	public function getOrderLineItemNumber()
	{
		return $this->order_line_item_number;
	}

	/**
	 * @param int $order_line_item_number
	 */
	public function setOrderLineItemNumber( $order_line_item_number )
	{
		$this->order_line_item_number = $order_line_item_number;
	}

	/**
	 * @return int
	 */
	public function getMerchantLineItemNumber()
	{
		return $this->merchant_line_item_number;
	}

	/**
	 * @param int $merchant_line_item_number
	 */
	public function setMerchantLineItemNumber( $merchant_line_item_number )
	{
		$this->merchant_line_item_number = $merchant_line_item_number;
	}

	/**
	 * @return int
	 */
	public function getCustomerOrderLineItemNumber()
	{
		return $this->customer_order_line_item_number;
	}

	/**
	 * @param int $customer_order_line_item_number
	 */
	public function setCustomerOrderLineItemNumber( $customer_order_line_item_number )
	{
		$this->customer_order_line_item_number = $customer_order_line_item_number;
	}

	/**
	 * @return int
	 */
	public function getHubLineId()
	{
		return $this->hub_line_id;
	}

	/**
	 * @param int $hub_line_id
	 */
	public function setHubLineId( $hub_line_id )
	{
		$this->hub_line_id = $hub_line_id;
	}

	/**
	 * @return string
	 */
	public function getMerchantProductId()
	{
		return $this->merchant_product_id;
	}

	/**
	 * @param string $merchant_product_id
	 */
	public function setMerchantProductId( $merchant_product_id )
	{
		$this->merchant_product_id = $merchant_product_id;
	}

	/**
	 * @return string
	 */
	public function getMerchantSku()
	{
		return $this->merchant_sku;
	}

	/**
	 * @param string $merchant_sku
	 */
	public function setMerchantSku( $merchant_sku )
	{
		$this->merchant_sku = $merchant_sku;
	}

	/**
	 * @return string
	 */
	public function getVendorSku()
	{
		return $this->vendor_sku;
	}

	/**
	 * @param string $vendor_sku
	 */
	public function setVendorSku( $vendor_sku )
	{
		$this->vendor_sku = $vendor_sku;
	}

	/**
	 * @return string
	 */
	public function getManufacturerSku()
	{
		return $this->manufacturer_sku;
	}

	/**
	 * @param string $manufacturer_sku
	 */
	public function setManufacturerSku( $manufacturer_sku )
	{
		$this->manufacturer_sku = $manufacturer_sku;
	}

	/**
	 * @return string
	 */
	public function getShoppingCartSku()
	{
		return $this->shopping_cart_sku;
	}

	/**
	 * @param string $shopping_cart_sku
	 */
	public function setShoppingCartSku( $shopping_cart_sku )
	{
		$this->shopping_cart_sku = $shopping_cart_sku;
	}

	/**
	 * @return string
	 */
	public function getUpc()
	{
		return $this->upc;
	}

	/**
	 * @param string $upc
	 */
	public function setUpc( $upc )
	{
		$this->upc = $upc;
	}

	/**
	 * @return int
	 */
	public function getEuropeanArticleNumberEan()
	{
		return $this->european_article_number_ean;
	}

	/**
	 * @param int $european_article_number_ean
	 */
	public function setEuropeanArticleNumberEan( $european_article_number_ean )
	{
		$this->european_article_number_ean = $european_article_number_ean;
	}

	/**
	 * @return string
	 */
	public function getVendorDescription()
	{
		return $this->vendor_description;
	}

	/**
	 * @param string $vendor_description
	 */
	public function setVendorDescription( $vendor_description )
	{
		$this->vendor_description = $vendor_description;
	}

	/**
	 * @return string
	 */
	public function getVendorStyleNumber()
	{
		return $this->vendor_style_number;
	}

	/**
	 * @param string $vendor_style_number
	 */
	public function setVendorStyleNumber( $vendor_style_number )
	{
		$this->vendor_style_number = $vendor_style_number;
	}

	/**
	 * @return string
	 */
	public function getVendorColorDescription()
	{
		return $this->vendor_color_description;
	}

	/**
	 * @param string $vendor_color_description
	 */
	public function setVendorColorDescription( $vendor_color_description )
	{
		$this->vendor_color_description = $vendor_color_description;
	}

	/**
	 * @return string
	 */
	public function getVendorSizeDescription()
	{
		return $this->vendor_size_description;
	}

	/**
	 * @param string $vendor_size_description
	 */
	public function setVendorSizeDescription( $vendor_size_description )
	{
		$this->vendor_size_description = $vendor_size_description;
	}

	/**
	 * @return string
	 */
	public function getColorCode()
	{
		return $this->color_code;
	}

	/**
	 * @param string $color_code
	 */
	public function setColorCode( $color_code )
	{
		$this->color_code = $color_code;
	}

	/**
	 * @return string
	 */
	public function getSizeCode()
	{
		return $this->size_code;
	}

	/**
	 * @param string $size_code
	 */
	public function setSizeCode( $size_code )
	{
		$this->size_code = $size_code;
	}

	/**
	 * @return string
	 */
	public function getSetCode()
	{
		return $this->set_code;
	}

	/**
	 * @param string $set_code
	 */
	public function setSetCode( $set_code )
	{
		$this->set_code = $set_code;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription( $description )
	{
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getDescription2()
	{
		return $this->description_2;
	}

	/**
	 * @param string $description_2
	 */
	public function setDescription2( $description_2 )
	{
		$this->description_2 = $description_2;
	}

	/**
	 * @return string
	 */
	public function getDescription3()
	{
		return $this->description_3;
	}

	/**
	 * @param string $description_3
	 */
	public function setDescription3( $description_3 )
	{
		$this->description_3 = $description_3;
	}

	/**
	 * @return string
	 */
	public function getColorSizeDescription()
	{
		return $this->color_size_description;
	}

	/**
	 * @param string $color_size_description
	 */
	public function setColorSizeDescription( $color_size_description )
	{
		$this->color_size_description = $color_size_description;
	}

	/**
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}

	/**
	 * @param int $quantity
	 */
	public function setQuantity( $quantity )
	{
		$this->quantity = $quantity;
	}

	/**
	 * @return string
	 */
	public function getUnitOfMeasure()
	{
		return $this->unit_of_measure;
	}

	/**
	 * @param string $unit_of_measure
	 */
	public function setUnitOfMeasure( $unit_of_measure )
	{
		$this->unit_of_measure = $unit_of_measure;
	}

	/**
	 * @return mixed
	 */
	public function getFullRetail()
	{
		return $this->full_retail;
	}

	/**
	 * @param mixed $full_retail
	 */
	public function setFullRetail( $full_retail )
	{
		$this->full_retail = $full_retail;
	}

	/**
	 * @return string
	 */
	public function getEncodedPrice()
	{
		return $this->encoded_price;
	}

	/**
	 * @param string $encoded_price
	 */
	public function setEncodedPrice( $encoded_price )
	{
		$this->encoded_price = $encoded_price;
	}

	/**
	 * @return string
	 */
	public function getWeightUnit()
	{
		return $this->weight_unit;
	}

	/**
	 * @param string $weight_unit
	 */
	public function setWeightUnit( $weight_unit )
	{
		$this->weight_unit = $weight_unit;
	}

	/**
	 * @return mixed
	 */
	public function getUnitShippingWeight()
	{
		return $this->unit_shipping_weight;
	}

	/**
	 * @param mixed $unit_shipping_weight
	 */
	public function setUnitShippingWeight( $unit_shipping_weight )
	{
		$this->unit_shipping_weight = $unit_shipping_weight;
	}

	/**
	 * @return mixed
	 */
	public function getUnitPrice()
	{
		return $this->unit_price;
	}

	/**
	 * @param mixed $unit_price
	 */
	public function setUnitPrice( $unit_price )
	{
		$this->unit_price = $unit_price;
	}

	/**
	 * @return mixed
	 */
	public function getUnitCost()
	{
		return $this->unit_cost;
	}

	/**
	 * @param mixed $unit_cost
	 */
	public function setUnitCost( $unit_cost )
	{
		$this->unit_cost = $unit_cost;
	}

	/**
	 * @return mixed
	 */
	public function getLineMerchandiseCost()
	{
		return $this->line_merchandise_cost;
	}

	/**
	 * @param mixed $line_merchandise_cost
	 */
	public function setLineMerchandiseCost( $line_merchandise_cost )
	{
		$this->line_merchandise_cost = $line_merchandise_cost;
	}

	/**
	 * @return mixed
	 */
	public function getMerchandiseAmount()
	{
		return $this->merchandise_amount;
	}

	/**
	 * @param mixed $merchandise_amount
	 */
	public function setMerchandiseAmount( $merchandise_amount )
	{
		$this->merchandise_amount = $merchandise_amount;
	}

	/**
	 * @return mixed
	 */
	public function getLineShipping()
	{
		return $this->line_shipping;
	}

	/**
	 * @param mixed $line_shipping
	 */
	public function setLineShipping( $line_shipping )
	{
		$this->line_shipping = $line_shipping;
	}

	/**
	 * @return mixed
	 */
	public function getLineHandling()
	{
		return $this->line_handling;
	}

	/**
	 * @param mixed $line_handling
	 */
	public function setLineHandling( $line_handling )
	{
		$this->line_handling = $line_handling;
	}

	/**
	 * @return mixed
	 */
	public function getLineSubTotal()
	{
		return $this->line_sub_total;
	}

	/**
	 * @param mixed $line_sub_total
	 */
	public function setLineSubTotal( $line_sub_total )
	{
		$this->line_sub_total = $line_sub_total;
	}

	/**
	 * @return mixed
	 */
	public function getLineTax()
	{
		return $this->line_tax;
	}

	/**
	 * @param mixed $line_tax
	 */
	public function setLineTax( $line_tax )
	{
		$this->line_tax = $line_tax;
	}

	/**
	 * @return mixed
	 */
	public function getLineItemTotal()
	{
		return $this->line_item_total;
	}

	/**
	 * @param mixed $line_item_total
	 */
	public function setLineItemTotal( $line_item_total )
	{
		$this->line_item_total = $line_item_total;
	}

	/**
	 * @return mixed
	 */
	public function getLineCredits()
	{
		return $this->line_credits;
	}

	/**
	 * @param mixed $line_credits
	 */
	public function setLineCredits( $line_credits )
	{
		$this->line_credits = $line_credits;
	}

	/**
	 * @return mixed
	 */
	public function getLineBalanceDue()
	{
		return $this->line_balance_due;
	}

	/**
	 * @param mixed $line_balance_due
	 */
	public function setLineBalanceDue( $line_balance_due )
	{
		$this->line_balance_due = $line_balance_due;
	}

	/**
	 * @return mixed
	 */
	public function getLineDiscountAmount()
	{
		return $this->line_discount_amount;
	}

	/**
	 * @param mixed $line_discount_amount
	 */
	public function setLineDiscountAmount( $line_discount_amount )
	{
		$this->line_discount_amount = $line_discount_amount;
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
	 * @return \DateTime
	 */
	public function getExpectedShipDate()
	{
		return $this->expected_ship_date;
	}

	/**
	 * @param \DateTime $expected_ship_date
	 */
	public function setExpectedShipDate( $expected_ship_date )
	{
		$this->expected_ship_date = $expected_ship_date;
	}

	/**
	 * @return string
	 */
	public function getPackingSlipLineMessage()
	{
		return $this->packing_slip_line_message;
	}

	/**
	 * @param string $packing_slip_line_message
	 */
	public function setPackingSlipLineMessage( $packing_slip_line_message )
	{
		$this->packing_slip_line_message = $packing_slip_line_message;
	}

	/**
	 * @return string
	 */
	public function getVendorLineNote()
	{
		return $this->vendor_line_note;
	}

	/**
	 * @param string $vendor_line_note
	 */
	public function setVendorLineNote( $vendor_line_note )
	{
		$this->vendor_line_note = $vendor_line_note;
	}

	/**
	 * @return string
	 */
	public function getGiftLineMessage()
	{
		return $this->gift_line_message;
	}

	/**
	 * @param string $gift_line_message
	 */
	public function setGiftLineMessage( $gift_line_message )
	{
		$this->gift_line_message = $gift_line_message;
	}

	/**
	 * @return string
	 */
	public function getStoreName()
	{
		return $this->store_name;
	}

	/**
	 * @param string $store_name
	 */
	public function setStoreName( $store_name )
	{
		$this->store_name = $store_name;
	}

	/**
	 * @return string
	 */
	public function getPersonalizationData()
	{
		return $this->personalization_data;
	}

	/**
	 * @param string $personalization_data
	 */
	public function setPersonalizationData( $personalization_data )
	{
		$this->personalization_data = $personalization_data;
	}

	/**
	 * @return int
	 */
	public function getFactoryOrderNumber()
	{
		return $this->factory_order_number;
	}

	/**
	 * @param int $factory_order_number
	 */
	public function setFactoryOrderNumber( $factory_order_number )
	{
		$this->factory_order_number = $factory_order_number;
	}

	/**
	 * @return int
	 */
	public function getSubUnitQuantity()
	{
		return $this->sub_unit_quantity;
	}

	/**
	 * @param int $sub_unit_quantity
	 */
	public function setSubUnitQuantity( $sub_unit_quantity )
	{
		$this->sub_unit_quantity = $sub_unit_quantity;
	}

	/**
	 * @return string
	 */
	public function getGiftWrapIndicator()
	{
		return $this->gift_wrap_indicator;
	}

	/**
	 * @param string $gift_wrap_indicator
	 */
	public function setGiftWrapIndicator( $gift_wrap_indicator )
	{
		$this->gift_wrap_indicator = $gift_wrap_indicator;
	}

	/**
	 * @return \DateTime
	 */
	public function getHoldUntilDate()
	{
		return $this->hold_until_date;
	}

	/**
	 * @param \DateTime $hold_until_date
	 */
	public function setHoldUntilDate( $hold_until_date )
	{
		$this->hold_until_date = $hold_until_date;
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
	 * @return \DateTime
	 */
	public function getRequiredDeliveryDate()
	{
		return $this->required_delivery_date;
	}

	/**
	 * @param \DateTime $required_delivery_date
	 */
	public function setRequiredDeliveryDate( $required_delivery_date )
	{
		$this->required_delivery_date = $required_delivery_date;
	}

	/**
	 * @return \DateTime
	 */
	public function getRequestedArrivalDate()
	{
		return $this->requested_arrival_date;
	}

	/**
	 * @param \DateTime $requested_arrival_date
	 */
	public function setRequestedArrivalDate( $requested_arrival_date )
	{
		$this->requested_arrival_date = $requested_arrival_date;
	}

	/**
	 * @return string
	 */
	public function getShipperHubCode()
	{
		return $this->shipper_hub_code;
	}

	/**
	 * @param string $shipper_hub_code
	 */
	public function setShipperHubCode( $shipper_hub_code )
	{
		$this->shipper_hub_code = $shipper_hub_code;
	}

	/**
	 * @return int
	 */
	public function getPermitNumber()
	{
		return $this->permit_number;
	}

	/**
	 * @param int $permit_number
	 */
	public function setPermitNumber( $permit_number )
	{
		$this->permit_number = $permit_number;
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
	public function getShipCode()
	{
		return $this->ship_code;
	}

	/**
	 * @param string $ship_code
	 */
	public function setShipCode( $ship_code )
	{
		$this->ship_code = $ship_code;
	}

	/**
	 * @return string
	 */
	public function getShipToId()
	{
		return $this->ship_to_id;
	}

	/**
	 * @param string $ship_to_id
	 */
	public function setShipToId( $ship_to_id )
	{
		$this->ship_to_id = $ship_to_id;
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
	public function getShipToFirstName()
	{
		return $this->ship_to_first_name;
	}

	/**
	 * @param string $ship_to_first_name
	 */
	public function setShipToFirstName( $ship_to_first_name )
	{
		$this->ship_to_first_name = $ship_to_first_name;
	}

	/**
	 * @return string
	 */
	public function getShipToLastName()
	{
		return $this->ship_to_last_name;
	}

	/**
	 * @param string $ship_to_last_name
	 */
	public function setShipToLastName( $ship_to_last_name )
	{
		$this->ship_to_last_name = $ship_to_last_name;
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
	 * @return mixed
	 */
	public function getShipToShippingCharge()
	{
		return $this->ship_to_shipping_charge;
	}

	/**
	 * @param mixed $ship_to_shipping_charge
	 */
	public function setShipToShippingCharge( $ship_to_shipping_charge )
	{
		$this->ship_to_shipping_charge = $ship_to_shipping_charge;
	}

	/**
	 * @return mixed
	 */
	public function getShipToTaxCharge()
	{
		return $this->ship_to_tax_charge;
	}

	/**
	 * @param mixed $ship_to_tax_charge
	 */
	public function setShipToTaxCharge( $ship_to_tax_charge )
	{
		$this->ship_to_tax_charge = $ship_to_tax_charge;
	}

	/**
	 * @return mixed
	 */
	public function getShipToTotalCharge()
	{
		return $this->ship_to_total_charge;
	}

	/**
	 * @param mixed $ship_to_total_charge
	 */
	public function setShipToTotalCharge( $ship_to_total_charge )
	{
		$this->ship_to_total_charge = $ship_to_total_charge;
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
	public function getShipToVcdid()
	{
		return $this->ship_to_vcdid;
	}

	/**
	 * @param string $ship_to_vcdid
	 */
	public function setShipToVcdid( $ship_to_vcdid )
	{
		$this->ship_to_vcdid = $ship_to_vcdid;
	}

	/**
	 * @return string
	 */
	public function getShipToDiscountTypeCode()
	{
		return $this->ship_to_discount_type_code;
	}

	/**
	 * @param string $ship_to_discount_type_code
	 */
	public function setShipToDiscountTypeCode( $ship_to_discount_type_code )
	{
		$this->ship_to_discount_type_code = $ship_to_discount_type_code;
	}

	/**
	 * @return string
	 */
	public function getShipToDiscountDateCode()
	{
		return $this->ship_to_discount_date_code;
	}

	/**
	 * @param string $ship_to_discount_date_code
	 */
	public function setShipToDiscountDateCode( $ship_to_discount_date_code )
	{
		$this->ship_to_discount_date_code = $ship_to_discount_date_code;
	}

	/**
	 * @return mixed
	 */
	public function getShipToDiscountPercent()
	{
		return $this->ship_to_discount_percent;
	}

	/**
	 * @param mixed $ship_to_discount_percent
	 */
	public function setShipToDiscountPercent( $ship_to_discount_percent )
	{
		$this->ship_to_discount_percent = $ship_to_discount_percent;
	}

	/**
	 * @return int
	 */
	public function getShipToDiscountDaysDue()
	{
		return $this->ship_to_discount_days_due;
	}

	/**
	 * @param int $ship_to_discount_days_due
	 */
	public function setShipToDiscountDaysDue( $ship_to_discount_days_due )
	{
		$this->ship_to_discount_days_due = $ship_to_discount_days_due;
	}

	/**
	 * @return int
	 */
	public function getShipToNetDaysDue()
	{
		return $this->ship_to_net_days_due;
	}

	/**
	 * @param int $ship_to_net_days_due
	 */
	public function setShipToNetDaysDue( $ship_to_net_days_due )
	{
		$this->ship_to_net_days_due = $ship_to_net_days_due;
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
	public function getBillToFirstName()
	{
		return $this->bill_to_first_name;
	}

	/**
	 * @param string $bill_to_first_name
	 */
	public function setBillToFirstName( $bill_to_first_name )
	{
		$this->bill_to_first_name = $bill_to_first_name;
	}

	/**
	 * @return string
	 */
	public function getBillToLastName()
	{
		return $this->bill_to_last_name;
	}

	/**
	 * @param string $bill_to_last_name
	 */
	public function setBillToLastName( $bill_to_last_name )
	{
		$this->bill_to_last_name = $bill_to_last_name;
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
	public function getBillToPostalCodeExtension()
	{
		return $this->bill_to_postal_code_extension;
	}

	/**
	 * @param string $bill_to_postal_code_extension
	 */
	public function setBillToPostalCodeExtension( $bill_to_postal_code_extension )
	{
		$this->bill_to_postal_code_extension = $bill_to_postal_code_extension;
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
	public function getReturnsAddressee()
	{
		return $this->returns_addressee;
	}

	/**
	 * @param string $returns_addressee
	 */
	public function setReturnsAddressee( $returns_addressee )
	{
		$this->returns_addressee = $returns_addressee;
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
	public function getReturnsPostalCodeExtension()
	{
		return $this->returns_postal_code_extension;
	}

	/**
	 * @param string $returns_postal_code_extension
	 */
	public function setReturnsPostalCodeExtension( $returns_postal_code_extension )
	{
		$this->returns_postal_code_extension = $returns_postal_code_extension;
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
	public function getShippingHub()
	{
		return $this->shipping_hub;
	}

	/**
	 * @param string $shipping_hub
	 */
	public function setShippingHub( $shipping_hub )
	{
		$this->shipping_hub = $shipping_hub;
	}

	/**
	 * @return string
	 */
	public function getSerializedProduct()
	{
		return $this->serialized_product;
	}

	/**
	 * @param string $serialized_product
	 */
	public function setSerializedProduct( $serialized_product )
	{
		$this->serialized_product = $serialized_product;
	}

	/**
	 * @return string
	 */
	public function getPermitIssuingCity()
	{
		return $this->permit_issuing_city;
	}

	/**
	 * @param string $permit_issuing_city
	 */
	public function setPermitIssuingCity( $permit_issuing_city )
	{
		$this->permit_issuing_city = $permit_issuing_city;
	}

	/**
	 * @return string
	 */
	public function getPermitIssuingState()
	{
		return $this->permit_issuing_state;
	}

	/**
	 * @param string $permit_issuing_state
	 */
	public function setPermitIssuingState( $permit_issuing_state )
	{
		$this->permit_issuing_state = $permit_issuing_state;
	}

	/**
	 * @return string
	 */
	public function getReleaseIndex()
	{
		return $this->release_index;
	}

	/**
	 * @param string $release_index
	 */
	public function setReleaseIndex( $release_index )
	{
		$this->release_index = $release_index;
	}

	/**
	 * @return string
	 */
	public function getCustomerSku()
	{
		return $this->customer_sku;
	}

	/**
	 * @param string $customer_sku
	 */
	public function setCustomerSku( $customer_sku )
	{
		$this->customer_sku = $customer_sku;
	}

	/**
	 * @return string
	 */
	public function getVendorQuoteNumber()
	{
		return $this->vendor_quote_number;
	}

	/**
	 * @param string $vendor_quote_number
	 */
	public function setVendorQuoteNumber( $vendor_quote_number )
	{
		$this->vendor_quote_number = $vendor_quote_number;
	}

	/**
	 * @return string
	 */
	public function getPackingSlipReceivingInstructions()
	{
		return $this->packing_slip_receiving_instructions;
	}

	/**
	 * @param string $packing_slip_receiving_instructions
	 */
	public function setPackingSlipReceivingInstructions( $packing_slip_receiving_instructions )
	{
		$this->packing_slip_receiving_instructions = $packing_slip_receiving_instructions;
	}

	/**
	 * @return string
	 */
	public function getGiftRegistryId()
	{
		return $this->gift_registry_id;
	}

	/**
	 * @param string $gift_registry_id
	 */
	public function setGiftRegistryId( $gift_registry_id )
	{
		$this->gift_registry_id = $gift_registry_id;
	}

	/**
	 * @return mixed
	 */
	public function getUnitProcessingCost()
	{
		return $this->unit_processing_cost;
	}

	/**
	 * @param mixed $unit_processing_cost
	 */
	public function setUnitProcessingCost( $unit_processing_cost )
	{
		$this->unit_processing_cost = $unit_processing_cost;
	}

	/**
	 * @return string
	 */
	public function getMerchantDepartment()
	{
		return $this->merchant_department;
	}

	/**
	 * @param string $merchant_department
	 */
	public function setMerchantDepartment( $merchant_department )
	{
		$this->merchant_department = $merchant_department;
	}

	/**
	 * @return int
	 */
	public function getTransferLocationId()
	{
		return $this->transfer_location_id;
	}

	/**
	 * @param int $transfer_location_id
	 */
	public function setTransferLocationId( $transfer_location_id )
	{
		$this->transfer_location_id = $transfer_location_id;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationAddressTypeCode()
	{
		return $this->transfer_location_address_type_code;
	}

	/**
	 * @param string $transfer_location_address_type_code
	 */
	public function setTransferLocationAddressTypeCode( $transfer_location_address_type_code )
	{
		$this->transfer_location_address_type_code = $transfer_location_address_type_code;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationAttentionLine()
	{
		return $this->transfer_location_attention_line;
	}

	/**
	 * @param string $transfer_location_attention_line
	 */
	public function setTransferLocationAttentionLine( $transfer_location_attention_line )
	{
		$this->transfer_location_attention_line = $transfer_location_attention_line;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationCompanyName()
	{
		return $this->transfer_location_company_name;
	}

	/**
	 * @param string $transfer_location_company_name
	 */
	public function setTransferLocationCompanyName( $transfer_location_company_name )
	{
		$this->transfer_location_company_name = $transfer_location_company_name;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationName()
	{
		return $this->transfer_location_name;
	}

	/**
	 * @param string $transfer_location_name
	 */
	public function setTransferLocationName( $transfer_location_name )
	{
		$this->transfer_location_name = $transfer_location_name;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationFirstName()
	{
		return $this->transfer_location_first_name;
	}

	/**
	 * @param string $transfer_location_first_name
	 */
	public function setTransferLocationFirstName( $transfer_location_first_name )
	{
		$this->transfer_location_first_name = $transfer_location_first_name;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationLastName()
	{
		return $this->transfer_location_last_name;
	}

	/**
	 * @param string $transfer_location_last_name
	 */
	public function setTransferLocationLastName( $transfer_location_last_name )
	{
		$this->transfer_location_last_name = $transfer_location_last_name;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationAddress1()
	{
		return $this->transfer_location_address_1;
	}

	/**
	 * @param string $transfer_location_address_1
	 */
	public function setTransferLocationAddress1( $transfer_location_address_1 )
	{
		$this->transfer_location_address_1 = $transfer_location_address_1;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationAddress2()
	{
		return $this->transfer_location_address_2;
	}

	/**
	 * @param string $transfer_location_address_2
	 */
	public function setTransferLocationAddress2( $transfer_location_address_2 )
	{
		$this->transfer_location_address_2 = $transfer_location_address_2;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationAddress3()
	{
		return $this->transfer_location_address_3;
	}

	/**
	 * @param string $transfer_location_address_3
	 */
	public function setTransferLocationAddress3( $transfer_location_address_3 )
	{
		$this->transfer_location_address_3 = $transfer_location_address_3;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationCity()
	{
		return $this->transfer_location_city;
	}

	/**
	 * @param string $transfer_location_city
	 */
	public function setTransferLocationCity( $transfer_location_city )
	{
		$this->transfer_location_city = $transfer_location_city;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationState()
	{
		return $this->transfer_location_state;
	}

	/**
	 * @param string $transfer_location_state
	 */
	public function setTransferLocationState( $transfer_location_state )
	{
		$this->transfer_location_state = $transfer_location_state;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationPostalCode()
	{
		return $this->transfer_location_postal_code;
	}

	/**
	 * @param string $transfer_location_postal_code
	 */
	public function setTransferLocationPostalCode( $transfer_location_postal_code )
	{
		$this->transfer_location_postal_code = $transfer_location_postal_code;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationPostalCodeExtension()
	{
		return $this->transfer_location_postal_code_extension;
	}

	/**
	 * @param string $transfer_location_postal_code_extension
	 */
	public function setTransferLocationPostalCodeExtension( $transfer_location_postal_code_extension )
	{
		$this->transfer_location_postal_code_extension = $transfer_location_postal_code_extension;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationCountry()
	{
		return $this->transfer_location_country;
	}

	/**
	 * @param string $transfer_location_country
	 */
	public function setTransferLocationCountry( $transfer_location_country )
	{
		$this->transfer_location_country = $transfer_location_country;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationDayPhone()
	{
		return $this->transfer_location_day_phone;
	}

	/**
	 * @param string $transfer_location_day_phone
	 */
	public function setTransferLocationDayPhone( $transfer_location_day_phone )
	{
		$this->transfer_location_day_phone = $transfer_location_day_phone;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationNightPhone()
	{
		return $this->transfer_location_night_phone;
	}

	/**
	 * @param string $transfer_location_night_phone
	 */
	public function setTransferLocationNightPhone( $transfer_location_night_phone )
	{
		$this->transfer_location_night_phone = $transfer_location_night_phone;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationEmail()
	{
		return $this->transfer_location_email;
	}

	/**
	 * @param string $transfer_location_email
	 */
	public function setTransferLocationEmail( $transfer_location_email )
	{
		$this->transfer_location_email = $transfer_location_email;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationAccountNumber()
	{
		return $this->transfer_location_account_number;
	}

	/**
	 * @param string $transfer_location_account_number
	 */
	public function setTransferLocationAccountNumber( $transfer_location_account_number )
	{
		$this->transfer_location_account_number = $transfer_location_account_number;
	}

	/**
	 * @return string
	 */
	public function getTransferLocationGender()
	{
		return $this->transfer_location_gender;
	}

	/**
	 * @param string $transfer_location_gender
	 */
	public function setTransferLocationGender( $transfer_location_gender )
	{
		$this->transfer_location_gender = $transfer_location_gender;
	}

	/**
	 * @return string
	 */
	public function getNdcNumber()
	{
		return $this->ndc_number;
	}

	/**
	 * @param string $ndc_number
	 */
	public function setNdcNumber( $ndc_number )
	{
		$this->ndc_number = $ndc_number;
	}

	/**
	 * @return string
	 */
	public function getVendorPatternCode()
	{
		return $this->vendor_pattern_code;
	}

	/**
	 * @param string $vendor_pattern_code
	 */
	public function setVendorPatternCode( $vendor_pattern_code )
	{
		$this->vendor_pattern_code = $vendor_pattern_code;
	}

	/**
	 * @return string
	 */
	public function getVendorFinishCode()
	{
		return $this->vendor_finish_code;
	}

	/**
	 * @param string $vendor_finish_code
	 */
	public function setVendorFinishCode( $vendor_finish_code )
	{
		$this->vendor_finish_code = $vendor_finish_code;
	}

	/**
	 * @return string
	 */
	public function getUnitCostAdjustmentAllowed()
	{
		return $this->unit_cost_adjustment_allowed;
	}

	/**
	 * @param string $unit_cost_adjustment_allowed
	 */
	public function setUnitCostAdjustmentAllowed( $unit_cost_adjustment_allowed )
	{
		$this->unit_cost_adjustment_allowed = $unit_cost_adjustment_allowed;
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
	 * @return int
	 */
	public function getStatusId()
	{
		return $this->status_id;
	}

	/**
	 * @param int $status_id
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
		$returnString = $this->getDescription() . " - Qty: ". $this->getQuantity(). " - Cost: ". $this->getLineMerchandiseCost(). " -  Merchant SKU: " . $this->getMerchantSku();
		return (String)$returnString;
	}

	/**
	 * @return int
	 */
	public function getOrderId()
	{
		return $this->order_id;
	}

	/**
	 * @param int $order_id
	 */
	public function setOrderId( $order_id )
	{
		$this->order_id = $order_id;
	}

	/**
	 * @return int
	 */
	public function getCancelReasonId()
	{
		return $this->cancel_reason_id;
	}

	/**
	 * @param int $cancel_reason_id
	 */
	public function setCancelReasonId( $cancel_reason_id )
	{
		$this->cancel_reason_id = $cancel_reason_id;
	}

	/**
	 * @return int
	 */
	public function getReturnReasonId()
	{
		return $this->return_reason_id;
	}

	/**
	 * @param int $return_reason_id
	 */
	public function setReturnReasonId( $return_reason_id )
	{
		$this->return_reason_id = $return_reason_id;
	}

	/**
	 * @return \DateTime
	 */
	public function getReturnDate()
	{
		return $this->return_date;
	}

	/**
	 * @param \DateTime $return_date
	 */
	public function setReturnDate( $return_date )
	{
		$this->return_date = $return_date;
	}

	/**
	 * @return int
	 */
	public function getReturnMethodHandlingId()
	{
		return $this->return_method_handling_id;
	}

	/**
	 * @param int $return_method_handling_id
	 */
	public function setReturnMethodHandlingId( $return_method_handling_id )
	{
		$this->return_method_handling_id = $return_method_handling_id;
	}



}

