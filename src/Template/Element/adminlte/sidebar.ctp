
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <?php
            echo $this->Html->image(
                'TwitterBootstrap.user2-160x160.jpg',
                ['class'=>'img-circle',  "alt"=>"User Image"]
            );
        ?>
    </div>
    <div class="pull-left info">
      <p>Alexander Pierce</p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- search form (Optional) -->
  <form action="/products" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="<?php echo __('Search...');?>">
          <span class="input-group-btn">
            <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form>
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <li class="header">NAVEGAÇÃO</li>
    <!-- Optionally, you can add icons to the links -->
    <li><a href="/categories"><i class="fa fa-link"></i> <span><?php echo __('Categories'); ?></span></a></li>
    <li><a href="/products"><i class="fa fa-link"></i> <span><?php echo __('Products'); ?></span></a></li>
    <li><a href="/stock-in"><i class="fa fa-link"></i> <span><?php echo __('Stock In'); ?></span></a></li>
    <li><a href="/stock-out"><i class="fa fa-link"></i> <span><?php echo __('Stock Out'); ?></span></a></li>
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
