<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;
AppAsset::register($this);
?>
<link rel="stylesheet" id="tiwanon-style-css"  href="https://campus.campus-star.com/resume/assets/css/style.min.css?ver=201804251416" type="text/css" media="all" />
<form id="form-resume" action="https://campus.campus-star.com/resume/pdf.php" method="post" target="_blank" enctype="multipart/form-data">
<input type="hidden" name="action" id="action" value="preview">	
<input type="hidden" name="theme" id="theme" value="theme01">	
<input type="hidden" name="language" id="language" value="th">	

<div id="step-1" class="row">
	<header class="entry-header">
		<h2 class="entry-title"><span>1</span> เลือกรูปแบบของ RESUME</h2>							 
	</header>
	<div class="hilight row column section">
		<div class="theme-slider">
			<div><img class="seliect-tm theme-active" src="https://campus.campus-star.com/resume/theme/small/01.jpg" alt="theme01"><a class="bt_showtheme" href="https://campus.campus-star.com/resume/theme/big/01.jpg" data-lightbox="theme" data-title="theme 01"><i class="fa fa-search" aria-hidden="true"></i></a></div>
			<div><img class="seliect-tm" src="https://campus.campus-star.com/resume/theme/small/01-2.jpg" alt="theme02"><a class="bt_showtheme" href="https://campus.campus-star.com/resume/theme/big/01-2.jpg" data-lightbox="theme" data-title="theme 01-2"><i class="fa fa-search" aria-hidden="true"></i></a></div>
			<div><img class="seliect-tm" src="https://campus.campus-star.com/resume/theme/small/02.jpg" alt="theme03"><a class="bt_showtheme" href="https://campus.campus-star.com/resume/theme/big/02.jpg" data-lightbox="theme" data-title="theme 02"><i class="fa fa-search" aria-hidden="true"></i></a></div>
			<div><img class="seliect-tm" src="https://campus.campus-star.com/resume/theme/small/02-2.jpg" alt="theme04"><a class="bt_showtheme" href="https://campus.campus-star.com/resume/theme/big/02-2.jpg" data-lightbox="theme" data-title="theme 02-2"><i class="fa fa-search" aria-hidden="true"></i></a></div>
			<div><img class="seliect-tm" src="https://campus.campus-star.com/resume/theme/small/03.jpg" alt="theme05"><a class="bt_showtheme" href="https://campus.campus-star.com/resume/theme/big/03.jpg" data-lightbox="theme-03" data-title="theme 03"><i class="fa fa-search" aria-hidden="true"></i></a></div>
			<div><img class="seliect-tm" src="https://campus.campus-star.com/resume/theme/small/03-2.jpg" alt="theme06"><a class="bt_showtheme" href="https://campus.campus-star.com/resume/theme/big/03-2.jpg" data-lightbox="theme" data-title="theme 03-2"><i class="fa fa-search" aria-hidden="true"></i></a></div>
			<div><img class="seliect-tm" src="https://campus.campus-star.com/resume/theme/small/04.jpg" alt="theme07"><a class="bt_showtheme" href="https://campus.campus-star.com/resume/theme/big/04.jpg" data-lightbox="theme" data-title="theme 04"><i class="fa fa-search" aria-hidden="true"></i></a></div>
			<div><img class="seliect-tm" src="https://campus.campus-star.com/resume/theme/small/04-2.jpg" alt="theme08"><a class="bt_showtheme" href="https://campus.campus-star.com/resume/theme/big/04-2.jpg" data-lightbox="theme" data-title="theme 04-2"><i class="fa fa-search" aria-hidden="true"></i></a></div>
			<div><img class="seliect-tm" src="https://campus.campus-star.com/resume/theme/small/05.jpg" alt="theme09"><a class="bt_showtheme" href="https://campus.campus-star.com/resume/theme/big/05.jpg" data-lightbox="theme" data-title="theme 05"><i class="fa fa-search" aria-hidden="true"></i></a></div>
			<div><img class="seliect-tm" src="https://campus.campus-star.com/resume/theme/small/05-2.jpg" alt="theme10"><a class="bt_showtheme" href="https://campus.campus-star.com/resume/theme/big/05-2.jpg" data-lightbox="theme" data-title="theme 05-2"><i class="fa fa-search" aria-hidden="true"></i></a></div>
		 </div>
		
	</div>
</div>
<div id="step-2" class="row">

	<header class="entry-header">
		<h2 class="entry-title"> FILL INFORMATION RESUME</h2>							 
	</header>
	
	
	<div class="content-area columns large-6">
		
		 <section id="avatar">
			  <div class="row">
				<div class="column small-3">
					<div class="icon-photo" ><i class="fa fa-user" aria-hidden="true"></i></div>
				</div>
				<div class="column small-9">
					 <label class="text-photo">Photos</label><label class="experience_demo">(Use vertical image)</label>
					 <input id="avatar"  type="file" name="avatar"  >
				</div>
			  </div> 
		 </section>
		
		<section id="profile">
			<h2 class="post-headline-primary"><i class="fa fa-user" aria-hidden="true"></i> Profile</h2>	
			<div class="row">
				<div class="small-3 columns">
					<label>Fullname th</label>
				</div>
				<div class="small-3 columns">
					<select id="prefix" name="prefix">
						<option value="Mr.">Mr.</option>
						<option value="Ms.">Ms.</option>
						<option value="Miss">Miss</option>
						<option value="Mrs">Mrs.</option>
					</select>
				</div>
				<div class="small-6 columns">
					 <input type="text" name="fullname_th" placeholder="Thai Language">
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<label>Fullname en</label>
				</div>
				<div class="small-9 column">
					 <input type="text" name="fullname_en" placeholder="Eng Language"> 
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<label>Gender</label>
				</div>
				<div class="small-3 column">
					 <select id="sex" name="sex">
						 <option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</div>
				<div class="small-6 column"></div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<label>Birthday</label>
				</div>
				<div class="small-3 column">
					<select name="birth_date" id="birth_date_en">
						<option value="">Date</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
											</select>
				</div>
				<div class="small-3 column">
					<select name="birth_month" id="birth_month_en">
						<option value="">Month</option>
						<option value="01">January</option>
						<option value="02">February</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>
				</div>
				<div class="small-3 column">
					<select name="birth_year" id="birth_year_en">
						<option value="">Year</option>
					 						<option value="2007">2007</option>
					 						<option value="2006">2006</option>
					 						<option value="2005">2005</option>
					 						<option value="2004">2004</option>
					 						<option value="2003">2003</option>
					 						<option value="2002">2002</option>
					 						<option value="2001">2001</option>
					 						<option value="2000">2000</option>
					 						<option value="1999">1999</option>
					 						<option value="1998">1998</option>
					 						<option value="1997">1997</option>
					 						<option value="1996">1996</option>
					 						<option value="1995">1995</option>
					 						<option value="1994">1994</option>
					 						<option value="1993">1993</option>
					 						<option value="1992">1992</option>
					 						<option value="1991">1991</option>
					 						<option value="1990">1990</option>
					 						<option value="1989">1989</option>
					 						<option value="1988">1988</option>
					 						<option value="1987">1987</option>
					 						<option value="1986">1986</option>
					 						<option value="1985">1985</option>
					 						<option value="1984">1984</option>
					 						<option value="1983">1983</option>
					 						<option value="1982">1982</option>
					 						<option value="1981">1981</option>
					 						<option value="1980">1980</option>
					 						<option value="1979">1979</option>
					 						<option value="1978">1978</option>
					 						<option value="1977">1977</option>
					 						<option value="1976">1976</option>
					 						<option value="1975">1975</option>
					 						<option value="1974">1974</option>
					 						<option value="1973">1973</option>
					 						<option value="1972">1972</option>
					 						<option value="1971">1971</option>
					 						<option value="1970">1970</option>
					 						<option value="1969">1969</option>
					 						<option value="1968">1968</option>
					 						<option value="1967">1967</option>
					 						<option value="1966">1966</option>
					 						<option value="1965">1965</option>
					 						<option value="1964">1964</option>
					 						<option value="1963">1963</option>
					 						<option value="1962">1962</option>
					 						<option value="1961">1961</option>
					 						<option value="1960">1960</option>
					 						<option value="1959">1959</option>
					 						<option value="1958">1958</option>
					 						<option value="1957">1957</option>
					 						<option value="1956">1956</option>
					 						<option value="1955">1955</option>
					 						<option value="1954">1954</option>
					 						<option value="1953">1953</option>
					 						<option value="1952">1952</option>
					 						<option value="1951">1951</option>
					 						<option value="1950">1950</option>
					 						<option value="1949">1949</option>
					 						<option value="1948">1948</option>
					 						<option value="1947">1947</option>
					 						<option value="1946">1946</option>
					 						<option value="1945">1945</option>
					 						<option value="1944">1944</option>
					 						<option value="1943">1943</option>
					 						<option value="1942">1942</option>
					 						<option value="1941">1941</option>
					 						<option value="1940">1940</option>
					 					</select>
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<label>Age</label>
				</div>
				<div class="small-3 column">
					<input type="text" id="age" name="age" readonly> 
				</div>
				<div class="small-6 column">
					<label>Years old</label>
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<label>Marital status</label>
				</div>
				<div class="small-9 column">
					<select name="marital_status">
						<option value="single">Single</option>
						<option value="married">Married</option>
						<option value="widowed">Widowed</option>
						<option value="married_no_children">Married with no children </option>
						<option value="divorced">Divorced</option>
					</select>
				</div>
			</div>
			<div class="row row_military" >
				<div class="small-3 column">
					<label>Military Status</label>
				</div>
				<div class="small-9 column">
					<select id="military" name="military">
						<option value="exempted">Exempted</option>
						<option value="completed">Completed</option>
						<option value="wait">Wait</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<label>Nationality</label>
				</div>
				<div class="small-9 column">
					 <input type="text" name="nationality"> 
				</div>
			</div>  
      	</section>
      	
      	<section id="contact">		
			<h2 class="post-headline-primary"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact</h2>	
			<div class="row">
				<div class="small-3 column">
					<label>Telephone</label>
				</div>
				<div class="small-9 column">
					<input type="text" name="telephone">
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<label>Email</label>
				</div>
				<div class="small-9 column">
					<input type="text" name="email">
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<label>Address</label>
				</div>
				<div class="small-9 column">
					<textarea name="address"></textarea>
				</div>
			</div>
      	</section>
 
 
		<section id="social">	
			<h2 class="post-headline-primary"><i class="fa fa-globe" aria-hidden="true"></i> Social</h2>
			<div class="row">
				<div class="small-3 column">
					<label>Facebook</label>
				</div>
				<div class="small-9 column">
					<input type="text" name="facebook" placeholder="Name / ID">
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<label>Instagram</label>
				</div>
				<div class="small-9 column">
					<input type="text" name="instagram" placeholder="Name / ID">
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<label>Twitter</label>
				</div>
				<div class="small-9 column">
					<input type="text" name="twitter" placeholder="Name / ID">
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<input type="text" name="social_other_name" placeholder="Other">
				</div>
				<div class="small-9 column">
					<input type="text" name="social_other_value" placeholder="Name / ID">
				</div>
			</div>
		</section>
 	
		<section id="web">
			
			<h2 class="post-headline-primary"><i class="fa fa-share-alt" aria-hidden="true"></i> Website</h2>
			<div class="row">
				<div class="small-3 column">
					<label>Portfolio</label>
				</div>
				<div class="small-9 column">
					<input type="text" name="web_portfollio" placeholder="Link...">
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<input type="text" name="web_other_name" placeholder="Web other">
				</div>
				<div class="small-9 column">
					<input type="text" name="web_other_value" placeholder="Link...">
				</div>
			</div>		
		</section>
		<section id="introduce">	
			<h2 class="post-headline-primary"><i class="fa fa-credit-card" aria-hidden="true"></i> Describe yourself</h2>	
			<div class="row">
				<div class="small-12 column">
					<textarea type="text" rows="5" name="introduce" placeholder="message..."></textarea>
				</div>
			</div>
		</section>	

	</div> <!-- content-area columns large-6 --> 
 
	<div class="content-area columns large-6">
		
		<section id="experience">	
			<h2 class="post-headline-primary"><i class="fa fa-briefcase" aria-hidden="true"></i> Experience</h2>	
			<div class="row boxgray">
				<div class="small-12 column">
					<div class="column small-1"> 
						<label>Since </label>
					</div>
					<div class="column small-3"> 
						<select name="experience_year_start1" class="experience_select">
														<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					 </div>
					<div class="column small-1"> 
						<label>to </label>
					</div>
					<div class="column small-3"> 
						<select name="experience_year_end1" class="experience_select"> 
														<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					</div>
					<div class="column small-4"> 
						<label class="experience_demo">Demo Since 2014 to 2016</label>
					</div>
				</div>
				<div class="small-12 column">
					<div class="column small-2"> 
						<label> Company </label> 
					</div> 
					<div class="column small-4"> 
						<input type="text" name="experience_company1" class="input-company"> 
					</div> 
					<div class="column small-2"> 
						<label> Position </label>
					</div> 
					<div class="column small-4"> 
						<input type="text" name="experience_position1" class="input-position">
					</div> 
				</div>
			</div>
			<div class="row boxgray">
				<div class="small-12 column">
					<div class="column small-1"> 
						<label>Since </label>
					</div>
					<div class="column small-3"> 
						<select name="experience_year_start2" class="experience_select">
														<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					 </div>
					<div class="column small-1"> 
						<label>to </label>
					</div>
					<div class="column small-3"> 
						<select name="experience_year_end2" class="experience_select"> 
														<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					</div>
					<div class="column small-4"> 
						<label class="experience_demo">Demo Since 2014 to 2016</label>
					</div>
				</div>
				<div class="small-12 column">
					<div class="column small-2"> 
						<label> Company </label> 
					</div> 
					<div class="column small-4"> 
						<input type="text" name="experience_company2" class="input-company"> 
					</div> 
					<div class="column small-2"> 
						<label> Position </label>
					</div> 
					<div class="column small-4"> 
						<input type="text" name="experience_position2" class="input-position">
					</div> 
				</div>
			</div>
			<div class="row boxgray">
				<div class="small-12 column">
					<div class="column small-1"> 
						<label>Since </label>
					</div>
					<div class="column small-3"> 
						<select name="experience_year_start3" class="experience_select">
														<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					 </div>
					<div class="column small-1"> 
						<label>to </label>
					</div>
					<div class="column small-3"> 
						<select name="experience_year_end3" class="experience_select"> 
														<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					</div>
					<div class="column small-4"> 
						<label class="experience_demo">Demo Since 2014 to 2016</label>
					</div>
				</div>
				<div class="small-12 column">
					<div class="column small-2"> 
						<label> Company </label> 
					</div> 
					<div class="column small-4"> 
						<input type="text" name="experience_company3" class="input-company"> 
					</div> 
					<div class="column small-2"> 
						<label> Position </label>
					</div> 
					<div class="column small-4"> 
						<input type="text" name="experience_position3" class="input-position">
					</div> 
				</div>
			</div>
			<div class="row boxgray">
				<div class="small-12 column">
					<div class="column small-1"> 
						<label>Since </label>
					</div>
					<div class="column small-3"> 
						<select name="experience_year_start4" class="experience_select">
														<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					 </div>
					<div class="column small-1"> 
						<label>to </label>
					</div>
					<div class="column small-3"> 
						<select name="experience_year_end4" class="experience_select"> 
														<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					</div>
					<div class="column small-4"> 
						<label class="experience_demo">Demo Since 2014 to 2016</label>
					</div>
				</div>
				<div class="small-12 column">
					<div class="column small-2"> 
						<label> Company </label> 
					</div> 
					<div class="column small-4"> 
						<input type="text" name="experience_company4" class="input-company"> 
					</div> 
					<div class="column small-2"> 
						<label> Position </label>
					</div> 
					<div class="column small-4"> 
						<input type="text" name="experience_position4" class="input-position">
					</div> 
				</div>
			</div>
		</section>	
		
		<section id="education" class="row column" >
			<h2 class="post-headline-primary"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Graduation</h2>	
			<div class="row boxgray">
				<div class="small-12 column">
					<div class="column small-1"> 
						<label>Since </label>
					</div>
					<div class="column small-3"> 
						<select name="education_year_start1" class="education_select">
							 							<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					 </div>
					<div class="column small-1"> 
						<label>to </label>
					</div>
					<div class="column small-3"> 
						<select name="education_year_end1" class="education_select"> 
														<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					</div>
					<div class="column small-4"> 
						<input type="text" name="faculty1" class="input-faculty" placeholder="Faculty">
					</div>
				</div>
				<div class="small-12 column">
					<div class="column small-1">&nbsp;</div>
					<div class="column small-4"> 
						<select name="degree1" class="degree_select"> 
							<option value="">Degree</option>
							<option value="Bachelor of Arts">Bachelor of Arts</option>
							<option value="Master of Arts">Master of Arts</option>
							<option value="Doctor of Philosophy">Doctor of Philosophy</option>						
							<option value="High Vocational Certificate">High Vocational Certificate</option>
							<option value="Vocational Certificate">Vocational Certificate</option>
							<option value="Senior High School">Senior High School</option>				
						</select>
					</div> 
					<div class="column small-7"> 
						<input type="text" name="academy1" class="input-academy" placeholder="Academy">
					</div>
				</div>
			</div>
			<div class="row boxgray">
				<div class="small-12 column">
					<div class="column small-1"> 
						<label>Since </label>
					</div>
					<div class="column small-3"> 
						<select name="education_year_start2" class="education_select">
							 							<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					 </div>
					<div class="column small-1"> 
						<label>to </label>
					</div>
					<div class="column small-3"> 
						<select name="education_year_end2" class="education_select"> 
														<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					</div>
					<div class="column small-4"> 
						<input type="text" name="faculty2" class="input-faculty" placeholder="Faculty">
					</div>
				</div>
				<div class="small-12 column">
					<div class="column small-1">&nbsp;</div>
					<div class="column small-4"> 
						<select name="degree2" class="degree_select"> 
							<option value="">Degree</option>
							<option value="Bachelor of Arts">Bachelor of Arts</option>
							<option value="Master of Arts">Master of Arts</option>
							<option value="Doctor of Philosophy">Doctor of Philosophy</option>						
							<option value="High Vocational Certificate">High Vocational Certificate</option>
							<option value="Vocational Certificate">Vocational Certificate</option>
							<option value="Senior High School">Senior High School</option>				
						</select>
					</div> 
					<div class="column small-7"> 
						<input type="text" name="academy2" class="input-academy" placeholder="Academy">
					</div>
				</div>
			</div>
			<div class="row boxgray">
				<div class="small-12 column">
					<div class="column small-1"> 
						<label>Since </label>
					</div>
					<div class="column small-3"> 
						<select name="education_year_start3" class="education_select">
							 							<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					 </div>
					<div class="column small-1"> 
						<label>to </label>
					</div>
					<div class="column small-3"> 
						<select name="education_year_end3" class="education_select"> 
														<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					</div>
					<div class="column small-4"> 
						<input type="text" name="faculty3" class="input-faculty" placeholder="Faculty">
					</div>
				</div>
				<div class="small-12 column">
					<div class="column small-1">&nbsp;</div>
					<div class="column small-4"> 
						<select name="degree3" class="degree_select"> 
							<option value="">Degree</option>
							<option value="Bachelor of Arts">Bachelor of Arts</option>
							<option value="Master of Arts">Master of Arts</option>
							<option value="Doctor of Philosophy">Doctor of Philosophy</option>						
							<option value="High Vocational Certificate">High Vocational Certificate</option>
							<option value="Vocational Certificate">Vocational Certificate</option>
							<option value="Senior High School">Senior High School</option>				
						</select>
					</div> 
					<div class="column small-7"> 
						<input type="text" name="academy3" class="input-academy" placeholder="Academy">
					</div>
				</div>
			</div>
			<div class="row boxgray">
				<div class="small-12 column">
					<div class="column small-1"> 
						<label>Since </label>
					</div>
					<div class="column small-3"> 
						<select name="education_year_start4" class="education_select">
							 							<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					 </div>
					<div class="column small-1"> 
						<label>to </label>
					</div>
					<div class="column small-3"> 
						<select name="education_year_end4" class="education_select"> 
														<option value="2019">2019</option>
							 							<option value="2018">2018</option>
							 							<option value="2017">2017</option>
							 							<option value="2016">2016</option>
							 							<option value="2015">2015</option>
							 							<option value="2014">2014</option>
							 							<option value="2013">2013</option>
							 							<option value="2012">2012</option>
							 							<option value="2011">2011</option>
							 							<option value="2010">2010</option>
							 							<option value="2009">2009</option>
							 							<option value="2008">2008</option>
							 							<option value="2007">2007</option>
							 							<option value="2006">2006</option>
							 							<option value="2005">2005</option>
							 							<option value="2004">2004</option>
							 							<option value="2003">2003</option>
							 							<option value="2002">2002</option>
							 							<option value="2001">2001</option>
							 							<option value="2000">2000</option>
							 							<option value="1999">1999</option>
							 							<option value="1998">1998</option>
							 							<option value="1997">1997</option>
							 							<option value="1996">1996</option>
							 							<option value="1995">1995</option>
							 							<option value="1994">1994</option>
							 							<option value="1993">1993</option>
							 							<option value="1992">1992</option>
							 							<option value="1991">1991</option>
							 							<option value="1990">1990</option>
							 							<option value="1989">1989</option>
							 							<option value="1988">1988</option>
							 							<option value="1987">1987</option>
							 							<option value="1986">1986</option>
							 							<option value="1985">1985</option>
							 							<option value="1984">1984</option>
							 							<option value="1983">1983</option>
							 							<option value="1982">1982</option>
							 							<option value="1981">1981</option>
							 							<option value="1980">1980</option>
							 							<option value="1979">1979</option>
							 							<option value="1978">1978</option>
							 							<option value="1977">1977</option>
							 							<option value="1976">1976</option>
							 							<option value="1975">1975</option>
							 							<option value="1974">1974</option>
							 							<option value="1973">1973</option>
							 							<option value="1972">1972</option>
							 							<option value="1971">1971</option>
							 							<option value="1970">1970</option>
							 							<option value="1969">1969</option>
							 							<option value="1968">1968</option>
							 							<option value="1967">1967</option>
							 							<option value="1966">1966</option>
							 							<option value="1965">1965</option>
							 							<option value="1964">1964</option>
							 							<option value="1963">1963</option>
							 							<option value="1962">1962</option>
							 							<option value="1961">1961</option>
							 							<option value="1960">1960</option>
							 							<option value="1959">1959</option>
							 							<option value="1958">1958</option>
							 							<option value="1957">1957</option>
							 							<option value="1956">1956</option>
							 							<option value="1955">1955</option>
							 							<option value="1954">1954</option>
							 							<option value="1953">1953</option>
							 							<option value="1952">1952</option>
							 							<option value="1951">1951</option>
							 							<option value="1950">1950</option>
							 							<option value="1949">1949</option>
							 							<option value="1948">1948</option>
							 							<option value="1947">1947</option>
							 							<option value="1946">1946</option>
							 							<option value="1945">1945</option>
							 							<option value="1944">1944</option>
							 							<option value="1943">1943</option>
							 							<option value="1942">1942</option>
							 							<option value="1941">1941</option>
							 							<option value="1940">1940</option>
							 						</select>
					</div>
					<div class="column small-4"> 
						<input type="text" name="faculty4" class="input-faculty" placeholder="Faculty">
					</div>
				</div>
				<div class="small-12 column">
					<div class="column small-1">&nbsp;</div>
					<div class="column small-4"> 
						<select name="degree4" class="degree_select"> 
							<option value="">Degree</option>
							<option value="Bachelor of Arts">Bachelor of Arts</option>
							<option value="Master of Arts">Master of Arts</option>
							<option value="Doctor of Philosophy">Doctor of Philosophy</option>						
							<option value="High Vocational Certificate">High Vocational Certificate</option>
							<option value="Vocational Certificate">Vocational Certificate</option>
							<option value="Senior High School">Senior High School</option>				
						</select>
					</div> 
					<div class="column small-7"> 
						<input type="text" name="academy4" class="input-academy" placeholder="Academy">
					</div>
				</div>
			</div>
		</section>	
		
		<section id="skill">
			<h2 class="post-headline-primary"><i class="fa fa-star-o" aria-hidden="true"></i> Skills</h2>	 
			<div class="row">
				 <div class="small-9 column"><input type="text" name="skill_name1"></div>
				 <div class="small-3 column">
					<select name="skill_value1">
						<option value="5">Excellent</option>
						<option value="4">good</option>
						<option value="3">Poor</option>
						<option value="2">Low</option>
						<option value="1">Lowest</option>
					</select>
				 </div>
			</div>
			<div class="row">
				 <div class="small-9 column"><input type="text" name="skill_name2"></div>
				 <div class="small-3 column">
					<select name="skill_value2">
						<option value="5">Excellent</option>
						<option value="4">good</option>
						<option value="3">Poor</option>
						<option value="2">Low</option>
						<option value="1">Lowest</option>
					</select>
				 </div>
			</div>
			<div class="row">
				 <div class="small-9 column"><input type="text" name="skill_name3"></div>
				 <div class="small-3 column">
					<select name="skill_value3">
						<option value="5">Excellent</option>
						<option value="4">good</option>
						<option value="3">Poor</option>
						<option value="2">Low</option>
						<option value="1">Lowest</option>
					</select>
				 </div>
			</div>
			<div class="row">
				 <div class="small-9 column"><input type="text" name="skill_name4"></div>
				 <div class="small-3 column">
					<select name="skill_value4">
						<option value="5">Excellent</option>
						<option value="4">good</option>
						<option value="3">Poor</option>
						<option value="2">Low</option>
						<option value="1">Lowest</option>
					</select>
				 </div>
			</div>
	 
		</section>
		 
		
	</div>  <!-- content-area columns large-6 --> 
	
</div>  <!-- step 2 --> 

<div class="content-area columns large-12">
	<div class="row box-button">
		<button id="btn-preview" class="button round success"><i class="fa fa-search-plus" aria-hidden="true"></i> Preview</button>
		<button id="btn-save" class="button round alert"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
       
		
	</div>
</div>
 
</form>	

</div><!-- #content -->
 
<script type="text/javascript" id="tiwanon-js"  src="https://campus.campus-star.com/resume/assets/js/bundle.min.js?ver=https://"></script>
<script src="https://campus.campus-star.com/resume/assets/lightbox/dist/js/lightbox.min.js"></script>
	
	 


	
</body>
</html>

