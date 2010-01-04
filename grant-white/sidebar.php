<div class="column nav">
<ul><?php wp_list_categories('hide_empty=0&exclude=1,10,11,12&title_li='); ?></ul>
<div class="spacer"></div>
<ul><?php wp_list_categories('hide_empty=0&child_of=10&title_li='); ?></ul>
<div class="spacer"></div>
<ul><?php wp_list_pages('title_li='); ?></ul>
<p class="copyright">Copyright ©<?php echo Date("Y") ?> All Rights Reserved by Grant Ellis</p>
</div>