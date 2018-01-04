<?php
/*
Plugin Name: Currency Rate Base USD
Description: This widget will get the currency rate data from service http://api.fixer.io/latest
Version: 1.0
Author: ttcp
Author URI: http://thitruongcaphe.net/
License: MIT
Resource: modify base on fixer.io
*/

function register_currency_rate_base_usd_widget() {
    register_widget( 'Currency_Rate_Base_USD_Widget' );
}
add_action( 'widgets_init', 'register_currency_rate_base_usd_widget' );

class Currency_Rate_Base_USD_Widget extends WP_Widget {

	public $currCodes = array( 
		'AUD', 'BGN', 'BRL', 'CAD', 'CHF', 'CNY', 
		'CZK', 'DKK', 'GBP', 'HKD', 'HRK', 'HUF', 
		'IRD', 'ILS', 'IRN', 'JPY', 'KRW', 'MXN', 
		'MYR', 'NOK', 'NZD', 'PHP', 'PLN', 'RON', 
		'RUB', 'SEK', 'SGD', 'THP', 'TRY', 'ZAR', 'EUR');

	public function __construct() {
		parent::__construct(
			'register_currency_rate_base_usd_widget', // Base ID
			'Currency Rate Base USD', // Name
			array( 'description' => 'Displays currency rate base USD.', ) // Args
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
		<table id="currency-rate-base-usd">
			<thead>
				<tr>
					<th title="Currency rate base USD"></th>				
				</tr>
			</thead>
			<tbody>
			<?php
				if ( false === ( $response = get_transient( 'currency_rate_base_usd' ) ) )
				{
					$response = file_get_contents('http://api.fixer.io/latest?base=USD');
					if ( $response ) {
						set_transient( 'currency_rate_base_usd', $response, 60*10 );
					} else {
						echo '<tr><td>Failed to connect to fixer.io service to get data!!!</td></tr></tbody></table>';
						exit();	
					}
				}
				
				$json = json_decode($response, true);
				foreach ($this->currCodes as $value) {
					if ( $instance[trim($value)] === 1 && trim($json['rates'][$value]) != '' ) { ?>
					<tr>
						<td><?php echo 'USD/' . $value ?></td>
						<td><?php echo $json['rates'][$value]; ?></td>							
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
		$title = ! empty( $instance['title'] ) ? $instance['title'] : 'Currency Rate Base USD';
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
