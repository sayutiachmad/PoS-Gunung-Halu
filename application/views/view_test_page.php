<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Plain Page</h3>
    </div>

    <div class="title_right">      
      <ul class="breadcrumb">
        <?php if(isset($breadcrumb)){ ?>
          <?php foreach ($breadcrumb as $key => $value) { ?>
            
            <?php if($value['link']!=null){ ?>
              <li><a href="<?php echo $value['link'];?>"><?php echo $value['name'];?></a></li>
            <?php }else{ ?>
              <li><?php echo $value['name'];?></li>
            <?php } ?>
          <?php } ?>
        <?php } ?>
      </ul>      
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Plain Page</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            Add content to the page ...
        </div>
      </div>
    </div>
  </div>
</div>