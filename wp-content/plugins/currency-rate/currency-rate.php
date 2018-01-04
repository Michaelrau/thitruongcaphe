<?php
/*
Plugin Name: Currency Rate
Description: This widget will get the currency rate data from service https://www.vietcombank.com.vn/ExchangeRates/ExrateXML.aspx
Version: 1.0
Author: ttcp
Author URI: http://thitruongcaphe.net/
License: MIT
Resource: modify base on http://wpvn.info/
*/

function register_currency_rate_widget() {
    register_widget( 'Currency_Rate_Widget' );
}
add_action( 'widgets_init', 'register_currency_rate_widget' );

class Currency_Rate_Widget extends WP_Widget {

	public $currCodes = array( 'AUD', 'CAD', 'CHF', 'DKK', 'EUR', 'GBP', 'HKD', 'INR', 'JPY', 'KRW', 'KWD', 'MYR', 'NOK', 'RUB', 'SAR', 'SEK', 'SGD','THB','USD' );

	public function __construct() {
		parent::__construct(
			'currency_rate_widget', // Base ID
			'Currency Rate', // Name
			array( 'description' => 'Displays currency rate.', ) // Args
		);
	}

	public function widget( $args, $instance ) {
		foreach ($this->currCodes as $value) {
			$$value = ! empty( $instance[$value] ) ? '1' : '0';
		}
     	echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}
		?>
		<table id="currency-rate">
			<thead>
				<tr>
					<th title="Currency code">Mã NT</th>
					<th title="Currency buy">Mua</th>
					<th title="Currency transfer">Đổi</th>
					<th title="Currency sell">Bán</th>
				</tr>
			</thead>
			<tbody>
			<?php
			if ( false === ( $xml = get_transient( 'currency_rate' ) ) )
			{
				$xml = wp_remote_get('https://www.vietcombank.com.vn/ExchangeRates/ExrateXML.aspx');
				if ( $xml ) {
					$xml = trim($xml['body'],'');
					set_transient( 'currency_rate', $xml, 60*10 );
				} else {
					echo '<tr><td>Failed to connect to vietcombank service to get data!!!</td></tr></tbody></table>';
					exit();	
				}
			}
			$xml = new SimpleXMLElement($xml);
			foreach ($xml->Exrate as $result)
			{
				if ( $instance[trim($result['CurrencyCode'])] === 1 ) { ?>
				<tr>
					<td title="<?php echo $result['CurrencyName']; ?>"><?php echo $result['CurrencyCode']; ?></td>
					<td><?php echo number_format(intval($result['Buy']), 0, '.', ','); ?></td>
					<td><?php echo number_format(intval($result['Transfer']), 0, '.', ','); ?></td>
					<td><?php echo number_format(intval($result['Sell']), 0, '.', ','); ?></td>
				</tr>
				<?php }
			}
			?>
			</tbody>
		</table>
		<!--<p>The currency that VietComBank update at <?php //echo $xml->DateTime; ?></p> -->
		<?php
		echo $args['after_widget'];
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		foreach ($this->currCodes as $value) {
			$instance[$value] = !empty($new_instance[$value]) ? 1 : 0;
		}

		return $instance;
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : 'Currency Rate';
		foreach ($this->currCodes as $value) {
			$$value = isset($instance[$value]) ? (bool) $instance[$value] :false;
		} ?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
		<?php foreach ($this->currCodes as $value) { ?>
			<input id="<?php echo $this->get_field_id( $value ); ?>" name="<?php echo $this->get_field_name( $value ); ?>"<?php checked( $$value ); ?> class="checkbox" type="checkbox">
			<label for="<?php echo $this->get_field_id( $value ); ?>">Disable code <?php echo $value; ?></label>
			<br>
		<?php } ?>
		</p>
		<?php 
	}

}
