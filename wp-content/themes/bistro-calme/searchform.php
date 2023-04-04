<form class="header_search" method="get" action="<?= home_url('/'); ?>">
  <input type="text" placeholder="キーワードを入力" name="s" value="<?php the_search_query(); ?>">
  <i class="fas fa-search"></i>
</form>