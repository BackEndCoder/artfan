<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Artfan</title>
<link rel="stylesheet" type="text/css" href="css/import.css" />
<link rel="stylesheet" href="css/fractionslider.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type='text/javascript' src='js/jquery.dcjqaccordion.2.7.min.js'></script>
<script src="js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function($){			
	$('#accordion').dcAccordion({
	eventType: 'click',
	autoClose: false,
	saveState: false,
	disableLink: false,
	showCount: false,
	speed: 'slow'
	});		
});
</script>
</head>

<body>
<div class="wrapper">
  <?php include_once('includes/header.php'); ?>
  <?php include_once('includes/nav.php');?>
  <div class="container">
    <aside>
      <div class="aside-box">
        <div class="aside-box-title">
          <h2>Shop by...</h2>
        </div>
        <div class="aside-contain">
          <ul class="accordion"  id="accordion">
            <li><span class="drop"><img src="images/drop.png" width="7" height="16" alt="drop" /></span><a href="#">Category </a>
              <ul>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
                <li><a href="#">Page 4</a></li>
              </ul>
            </li>
            <li><span class="drop"><img src="images/drop.png" width="7" height="16" alt="drop" /></span><a href="#">Artist</a>
              <ul>
                <li><a href="#"><span class="drop"><img src="images/drop.png" width="7" height="16" alt="drop" /></span>Mobile Phones &#038; Accessories</a>
                  <ul>
                    <li><a href="#">Product 1</a>
                      <ul>
                        <li><a href="#">Part A</a> </li>
                        <li><a href="#">Part B</a></li>
                        <li><a href="#">Part C</a></li>
                        <li><a href="#">Part D</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Product 2</a>
                      <ul>
                        <li><a href="#">Part A</a></li>
                        <li><a href="#">Part B</a></li>
                        <li><a href="#">Part C</a></li>
                        <li><a href="#">Part D</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Product 3</a>
                      <ul>
                        <li><a href="#">Part A</a></li>
                        <li><a href="#">Part B</a></li>
                        <li><a href="#">Part C</a></li>
                        <li><a href="#">Part D</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><span class="drop"><img src="images/drop.png" width="7" height="16" alt="drop" /></span><a href="#">Desktop</a>
                  <ul>
                    <li><a href="#">Product 4</a></li>
                    <li><a href="#">Product 5</a></li>
                    <li><a href="#">Product 6</a></li>
                    <li><a href="#">Product 7</a></li>
                    <li><a href="#">Product 8</a></li>
                    <li><a href="#">Product 9</a></li>
                  </ul>
                </li>
                <li><span class="drop"><img src="images/drop.png" width="7" height="16" alt="drop" /></span><a href="#">Laptop</a>
                  <ul>
                    <li><a href="#">Product 10</a></li>
                    <li><a href="#">Product 11</a>
                      <ul>
                        <li><a href="#">Part E</a></li>
                        <li><a href="#">Part F</a></li>
                        <li><a href="#">Part G</a></li>
                        <li><a href="#">Part H</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Product 12</a></li>
                    <li><a href="#">Product 13</a></li>
                  </ul>
                </li>
                <li><span class="drop"><img src="images/drop.png" width="7" height="16" alt="drop" /></span><a href="#">Accessories</a>
                  <ul>
                    <li><a href="#">Product 14</a></li>
                    <li><a href="#">Product 15</a></li>
                  </ul>
                </li>
                <li><span class="drop"><img src="images/drop.png" width="7" height="16" alt="drop" /></span><a href="#">Software</a>
                  <ul>
                    <li><a href="#">Product 16</a></li>
                    <li><a href="#">Product 17</a></li>
                    <li><a href="#">Product 18</a></li>
                    <li><a href="#">Product 19</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><span class="drop"><img src="images/drop.png" width="7" height="16" alt="drop" /></span><a href="#">Colour</a>
              <ul>
                <li><a href="#">About Page 1</a></li>
                <li><a href="#">About Page 2</a></li>
              </ul>
            </li>
            <li><span class="drop"><img src="images/drop.png" width="7" height="16" alt="drop" /></span><a href="#">Any size</a>
              <ul>
                <li><a href="#">Service 1</a>
                  <ul>
                    <li><a href="#">Service Detail A</a></li>
                    <li><a href="#">Service Detail B</a></li>
                  </ul>
                </li>
                <li><a href="#">Service 2</a>
                  <ul>
                    <li><a href="#">Service Detail C</a></li>
                  </ul>
                </li>
                <li><a href="#">Service 3</a>
                  <ul>
                    <li><a href="#">Service Detail D</a></li>
                    <li><a href="#">Service Detail E</a></li>
                    <li><a href="#">Service Detail F</a></li>
                  </ul>
                </li>
                <li><a href="#">Service 4</a></li>
              </ul>
            </li>
            <li><span class="drop"><img src="images/drop.png" width="7" height="16" alt="drop" /></span><a href="#">Prices</a>
              <ul>
                <li><a href="#">Service 1</a>
                  <ul>
                    <li><a href="#">Service Detail A</a></li>
                    <li><a href="#">Service Detail B</a></li>
                  </ul>
                </li>
                <li><a href="#">Service 2</a>
                  <ul>
                    <li><a href="#">Service Detail C</a></li>
                  </ul>
                </li>
                <li><a href="#">Service 3</a>
                  <ul>
                    <li><a href="#">Service Detail D</a></li>
                    <li><a href="#">Service Detail E</a></li>
                    <li><a href="#">Service Detail F</a></li>
                  </ul>
                </li>
                <li><a href="#">Service 4</a></li>
              </ul>
            </li>
            <li><span class="drop"><img src="images/drop.png" width="7" height="16" alt="drop" /></span><a href="#">Availability</a>
              <ul>
                <li><a href="#">Service 1</a>
                  <ul>
                    <li><a href="#">Service Detail A</a></li>
                    <li><a href="#">Service Detail B</a></li>
                  </ul>
                </li>
                <li><a href="#">Service 2</a>
                  <ul>
                    <li><a href="#">Service Detail C</a></li>
                  </ul>
                </li>
                <li><a href="#">Service 3</a>
                  <ul>
                    <li><a href="#">Service Detail D</a></li>
                    <li><a href="#">Service Detail E</a></li>
                    <li><a href="#">Service Detail F</a></li>
                  </ul>
                </li>
                <li><a href="#">Service 4</a></li>
              </ul>
            </li>
            <li><span class="drop"><img src="images/drop.png" width="7" height="16" alt="drop" /></span><a href="#">Prints</a>
              <ul>
                <li><a href="#">Service 1</a>
                  <ul>
                    <li><a href="#">Service Detail A</a></li>
                    <li><a href="#">Service Detail B</a></li>
                  </ul>
                </li>
                <li><a href="#">Service 2</a>
                  <ul>
                    <li><a href="#">Service Detail C</a></li>
                  </ul>
                </li>
                <li><a href="#">Service 3</a>
                  <ul>
                    <li><a href="#">Service Detail D</a></li>
                    <li><a href="#">Service Detail E</a></li>
                    <li><a href="#">Service Detail F</a></li>
                  </ul>
                </li>
                <li><a href="#">Service 4</a></li>
              </ul>
            </li>
          </ul>
          <span class="btn"><a href="#">Search</a> </span>
          <div class="clr"></div>
        </div>
      </div>
      <div class="aside-box">
        <div class="aside-box-title">
          <h2>Art fan?</h2>
        </div>
        <div class="aside-contain">
          <p>Receive our monthly newsletter with new artwork, new artists and offers!</p>
          <form method="post" action="#">
            <p>
              <input type="text" placeholder="email address" />
            </p>
          </form>
          <span class="btn"><a href="#">sign up</a> </span>
          <div class="clr"></div>
        </div>
      </div>
      <div class="aside-box">
        <div class="aside-box-title">
          <h2>The Perfect Gift</h2>
        </div>
        <div class="aside-contain">
          <p>Lorem ipsum dolor sit amet, con
            sectetur adipiscing elit. Vivamus tor
            tor tellus, facilisis ac condimentum 
            gravida, auctor nec lorem...</p>
          <span class="btn"><a href="#">more</a> </span>
          <div class="clr"></div>
        </div>
      </div>
      <div class="aside-box">
        <div class="aside-box-title">
          <h2>Testimonials</h2>
        </div>
        <div class="aside-contain">
          <p>“Lorem ipsum dolor sit amet, con
            sectetur adipiscing elit!” </p>
          <h6><strong>MRS JONES</strong> HAMPSHIRE</h6>
          <p>“Vivamus tor tor tellus, facilisis ac condimentum gravida, auctor nec lorem.” </p>
          <h6><strong>MR BONES</strong> SURREY</h6>
          <p>“Lorem ipsum dolor sit amet, con
            sectetur adipiscing elit!” </p>
          <h6><strong>MRS JONES</strong> HAMPSHIRE</h6>
          <span class="btn"><a href="#">Search</a> </span>
          <div class="clr"></div>
        </div>
      </div>
    </aside>
    <!--end aside-->
    <div class="main">
    <div class="pagination">
    <h1>Abstract <span>(60 items)</span></h1>
    <div class="sort">
    <div class="pagination-num">
    <ul>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#"> <img src="images/next.png" width="18" height="16" alt="next" /></a></li>
    </ul>
    </div>
    <form method="post" action="#">
    <select><option>Sort by...</option>
    <option>Item one</option>
    <option>Item two</option>
    <option>Sort by...</option>
    </select>
    </form>
    
    
    </div>
    </div>
      
      
      <div class="new">
    
        <ul class="main-col4 mar-bot">
          <li><a href="#"><img src="images/2.jpg" width="179" height="130" alt="new" />
          <h4>Black Lips</h4>
          <h5>Lora Zombie</h5></a>
          <div class="product-des">
          <p>46 x 61 cm Giclee Print
19 Size and Print Options</p>
<h6>£ 29.99</h6>
          </div></li>
          <li><a href="#"><img src="images/3.jpg" width="179" height="130" alt="new" />
          <h4>Black Lips</h4>
          <h5>Lora Zombie</h5></a>
          <div class="product-des">
          <p>46 x 61 cm Giclee Print
19 Size and Print Options</p>
<h6>£ 29.99</h6>
          </div></li>
          <li><a href="#"><img src="images/4.jpg" width="179" height="130" alt="new" />
          <h4>Black Lips</h4>
          <h5>Lora Zombie</h5></a>
          <div class="product-des">
          <p>46 x 61 cm Giclee Print
19 Size and Print Options</p>
<h6>£ 29.99</h6>
          </div></li>
          <li><a href="#"><img src="images/5.jpg" width="179" height="130" alt="new" />
          <h4>Black Lips</h4>
          <h5>Lora Zombie</h5></a>
          <div class="product-des">
          <p>46 x 61 cm Giclee Print
19 Size and Print Options</p>
<h6>£ 29.99</h6>
          </div></li>
                    <li><a href="#"><img src="images/2.jpg" width="179" height="130" alt="new" />
          <h4>Black Lips</h4>
          <h5>Lora Zombie</h5></a>
          <div class="product-des">
          <p>46 x 61 cm Giclee Print
19 Size and Print Options</p>
<h6>£ 29.99</h6>
          </div></li>
          <li><a href="#"><img src="images/3.jpg" width="179" height="130" alt="new" />
          <h4>Black Lips</h4>
          <h5>Lora Zombie</h5></a>
          <div class="product-des">
          <p>46 x 61 cm Giclee Print
19 Size and Print Options</p>
<h6>£ 29.99</h6>
          </div></li>
          <li><a href="#"><img src="images/4.jpg" width="179" height="130" alt="new" />
          <h4>Black Lips</h4>
          <h5>Lora Zombie</h5></a>
          <div class="product-des">
          <p>46 x 61 cm Giclee Print
19 Size and Print Options</p>
<h6>£ 29.99</h6>
          </div></li>
          <li><a href="#"><img src="images/5.jpg" width="179" height="130" alt="new" />
          <h4>Black Lips</h4>
          <h5>Lora Zombie</h5></a>
          <div class="product-des">
          <p>46 x 61 cm Giclee Print
19 Size and Print Options</p>
<h6>£ 29.99</h6>
          </div></li>
                    <li><a href="#"><img src="images/2.jpg" width="179" height="130" alt="new" />
          <h4>Black Lips</h4>
          <h5>Lora Zombie</h5></a>
          <div class="product-des">
          <p>46 x 61 cm Giclee Print
19 Size and Print Options</p>
<h6>£ 29.99</h6>
          </div></li>
          <li><a href="#"><img src="images/3.jpg" width="179" height="130" alt="new" />
          <h4>Black Lips</h4>
          <h5>Lora Zombie</h5></a>
          <div class="product-des">
          <p>46 x 61 cm Giclee Print
19 Size and Print Options</p>
<h6>£ 29.99</h6>
          </div></li>
          <li><a href="#"><img src="images/4.jpg" width="179" height="130" alt="new" />
          <h4>Black Lips</h4>
          <h5>Lora Zombie</h5></a>
          <div class="product-des">
          <p>46 x 61 cm Giclee Print
19 Size and Print Options</p>
<h6>£ 29.99</h6>
          </div></li>
          <li><a href="#"><img src="images/5.jpg" width="179" height="130" alt="new" />
          <h4>Black Lips</h4>
          <h5>Lora Zombie</h5></a>
          <div class="product-des">
          <p>46 x 61 cm Giclee Print
19 Size and Print Options</p>
<h6>£ 29.99</h6>
          </div></li>
     
          
        </ul>
      </div>
      <div class="pagination-bot">
      <div class="pagination-num">
    <ul>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#"> <img src="images/next.png" width="18" height="16" alt="next" /></a></li>
    </ul>
    </div>
    <div class="pagination-page">
    <ul>
    <li>View Per Page </li>
      <li><a href="#">16  </a></li>
    <li><a href="#">   32 </a></li>
     <li><a href="#">  48   </a></li>
    </ul>
    </div>
      </div>
    </div>
    <!--end main--> 
  </div>
  <!--end container-->
  <?php include_once('includes/footer.php'); ?>
</div>
</body>
</html>