<?php
/**
 * @file
 * simple-timeline-fields.tpl.php
 * Created by JetBrains PhpStorm.
 * User: alan
 *
 * @var $simple_timeline_image
 * @var $simple_timeline_date
 * @var $simple_timeline_text
 */
?>
<div>
  <span class="timeline-announcement" style="
    float: left;
    border: 2px solid cyan;
    border-radius: 14px;
	padding: 10px;
	background-color: white;
	margin-left: 32px;
	margin-right:32px;
">
  <span class="timeline-image"><?php echo $simple_timeline_image; ?></span>

    <span class="timeline-content">
        <h3 class="timeline-date"><?php echo $simple_timeline_date; ?></h3>
        <span class="timeline-text" style="float: left;width: 100%;"><?php echo $simple_timeline_text; ?></span>
    </span>
	
	<span class="timeline-announcement-buttons" style="float: left;padding: 10px;">	
	<button>I'm Interested</button>
	<button>Send a message</button>
	</span>
	</span>
</div>
