<form class="search_form" action="<?php echo home_url('/'); ?>" method="get">
    <!-- <label for="search" id="cari" >Cari Post </label> -->
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input type="submit" id="search_submit" value="Cari..." />
</form>
