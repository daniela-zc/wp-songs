<div class="row center-xs">
    <div class="col-xs-8">
      <div class="box">
          <div class="search-form-wrapper">
            <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
              <input type="text" name="s" placeholder="Search Music"/>
              <!-- <span class='search-img'>  </span> -->
              <input type="hidden" name="post_type" value="song" /> 
              <input type="submit" alt="Search" value="Search" class="submit" />
            </form>
            </div>
        </div>
    </div>
</div>