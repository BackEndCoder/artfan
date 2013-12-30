<?php 
/*
Dash board for admin
*/
?>
<?php $url = $_SERVER['REQUEST_URI'];
$id = substr( $url, strrpos( $url, '/' )+1 );

?>
<div class="row-fluid" id="space_admin">
  <div class="span6">
    <div class="widget stacked">
      <div class="widget-header"> <i class="icon-star"></i>
        <h3>WELCOME</h3>
      </div>
      <!-- /widget-header -->
      <div class="widget-content">
        <div class="stats">
          <div class="stat"> <span class="stat-value">12,386</span> Site Visits </div>
          <!-- /stat -->

          <div class="stat"> <span class="stat-value">9,249</span> Unique Visits </div>
          <!-- /stat -->

          <div class="stat"> <span class="stat-value">70%</span> New Visits </div>
          <!-- /stat -->
          
        </div>
        <!-- /stats -->

        <div id="chart-stats" class="stats">
          <div class="stat stat-chart">
            <div id="donut-chart" class="chart-holder"></div>
            <!-- #donut --> 
          </div>
          <!-- /substat -->
          
          <div class="stat stat-time"> <span class="stat-value">00:28:13</span> Average Time on Site </div>
          <!-- /substat --> 
          
        </div>
        <!-- /substats --> 

      </div>
      <!-- /widget-content --> 
      
    </div>
    <!-- /widget -->
    
    <div class="widget widget-nopad stacked">
      <div class="widget-header"> <i class="icon-list-alt"></i>
        <h3>Recent News</h3>
      </div>
      <!-- /widget-header -->
      
      <div class="widget-content">
        <ul class="news-items">
          <li>
            <div class="news-item-detail"> <a href="javascript:;" class="news-item-title">Duis aute irure dolor in reprehenderit</a>
              <p class="news-item-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="news-item-date"> <span class="news-item-day">08</span> <span class="news-item-month">Mar</span> </div>
          </li>
          <li>
            <div class="news-item-detail"> <a href="javascript:;" class="news-item-title">Duis aute irure dolor in reprehenderit</a>
              <p class="news-item-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="news-item-date"> <span class="news-item-day">08</span> <span class="news-item-month">Mar</span> </div>
          </li>
          <li>
            <div class="news-item-detail"> <a href="javascript:;" class="news-item-title">Duis aute irure dolor in reprehenderit</a>
              <p class="news-item-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="news-item-date"> <span class="news-item-day">08</span> <span class="news-item-month">Mar</span> </div>
          </li>
        </ul>
      </div>
      <!-- /widget-content --> 
      
    </div>
    <!-- /widget -->
    
    
    <!-- /widget --> 
    
  </div>
  <!-- /span6 -->
  
  <div class="span6">
    <div class="widget stacked">
      <div class="widget-header"> <i class="icon-bookmark"></i>
        <h3>Quick Shortcuts</h3>
      </div>
      <!-- /widget-header -->
      
      <div class="widget-content">
        <div class="shortcuts"> <a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-list-alt"></i> <span class="shortcut-label">Apps</span> </a> <a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-bookmark"></i> <span class="shortcut-label">Bookmarks</span> </a> <a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-signal"></i> <span class="shortcut-label">Reports</span> </a> <a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-comment"></i> <span class="shortcut-label">Comments</span> </a> <a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-user"></i> <span class="shortcut-label">Users</span> </a> <a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-file"></i> <span class="shortcut-label">Notes</span> </a> <a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-picture"></i> <span class="shortcut-label">Photos</span> </a> <a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-tag"></i> <span class="shortcut-label">Tags</span> </a> </div>
        <!-- /shortcuts --> 
        
      </div>
      <!-- /widget-content --> 
      
    </div>
    <!-- /widget -->
    
    <div class="widget stacked">
      <div class="widget-header"> <i class="icon-signal"></i>
        <h3>Chart</h3>
      </div>
      <!-- /widget-header -->
      
      <div class="widget-content">
        <div id="area-chart" class="chart-holder"></div>
      </div>
      <!-- /widget-content --> 
      
    </div>
    <!-- /widget -->
    
    
    <!-- /widget --> 
    
  </div>
  <!-- /span6 --> 
  
</div>