<?php 

// Create a quotes widget
class tl_quote extends WP_Widget 
{
	function __construct() {
		parent::__construct('tl_quote', 'TechLaunch Quotes', ['description' => 'Display a random quote']);
	}

	function widget($args, $instance) {
		// get values from the instances
		$title = $instance['title'];
		$quote = $instance['quote'];
		$author = $instance['author'];

		// display the content of the widget
		echo $args['before_widget'];
		echo $args['before_title'] . $title . $args['after_title'];
		echo "<p>$quote</p>";
		echo "<p style='font-size:12px; color:gray; float:right; margin-right:40px;'>- $author</p>";
		echo $args['after_widget'];
	}

	function form($instance) {
		// get values from the instances
		$vTitle = $instance['title'];
		$vQuote = $instance['quote'];
		$vAuthor = $instance['author'];

		// get names of the inputs
		$title = $this->get_field_name('title');
		$quote = $this->get_field_name('quote');
		$author = $this->get_field_name('author');

		// echo the form
		echo "
			<p>
				<label>Title</label>
				<input class='widefat' name='$title' value='$vTitle' type='text'/>
			</p>
			<p>
				<label>Quote</label>
				<textarea class='widefat' name='$quote'>$vQuote</textarea>
			</p>
			<p>
				<label>Author</label>
				<input class='widefat' name='$author' value='$vAuthor' type='text'/>
			</p>
		";
	}

	function update($newInstance, $oldInstance) {
		return [
			"title" => $newInstance['title'],
			"quote" => $newInstance['quote'],
			"author" => $newInstance['author']
		];
	}
}
