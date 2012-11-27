<?php
/*
Template Name: Neighborhood
*/

get_header(); ?>

<script type="text/javascript">
jQuery(document).ready( function(){
    jQuery('.map-pics').cycle({
            fx: 'fade',
            speed: 1500,
            timeout: 5000,
            delay: -2000
            
    })
})
</script>

         <div class="vert-legend">
      
       <div class="categories">
          <ul class="tabs">
            <li id="restaurants"><a href="#restaurants-kitchens">Kitchen/Bars/Cafes</a></li>
            <li id="shopping"><a href="#shopping-retail">Shopping</a></li>
            <li id="entertainment"><a href="#entertainment-venues">Entertainment</a></li>
            <li id="places"><a href="#places-of-interest">Places of Interest</a></li>
          </ul>
      </div><!--END categories-->
      <div class="bottom-gradient"></div><!--END bottom-gradient-->
 </div><!--END vertical-legend-->
 
   <div id="map_canvas2">
   
<!--RESTAURANTS/KITCHENS/BARS-->   
   <div  class="panes-map">
     
     <div class="left-list">  
        <div class="map-pics">
          <img src="<?php bloginfo('template_url') ?>/images/peels.jpg" width="180" height="136">
          <img src="<?php bloginfo('template_url') ?>/images/wren.jpg" width="180" height="136">
          <img src="<?php bloginfo('template_url') ?>/images/gemma.jpg" width="180" height="136">
          <img src="<?php bloginfo('template_url') ?>/images/ilbuco.jpg" width="180" height="136">
          <img src="<?php bloginfo('template_url') ?>/images/pulinos.jpg" width="180" height="136">
          <img src="<?php bloginfo('template_url') ?>/images/katz.jpg" width="180" height="136">
        </div><!--END map-pics-->
    
        <h3 class="resthead">Kitchen, Bars & Cafes</h3>
              <ol class="vert-list">
                <li class="rest">Acme Restaurant & Bar</li>
                <li class="rest">Aroma Kitchen &amp; Wine Bar</li>
                <li class="rest">Bond St</li>
                <li class="rest">B Bar & Grill</li>
                <li class="rest">DBGB Kitchen and Bar</li>
                <li class="rest">Five Points Restaurant</li>
                <li class="rest">Forcella la Pizza Di Napoli</li>
                <li class="rest">Gemma Restaurant</li>
                <li class="rest">Gyu-Kaku</li>
                <li class="rest">Hecho En Dumbo</li>
                <li class="rest">Il Buco</li>
                <li class="rest">Il Buco Alimentari e Vineria</li>
                <li class="rest">Katz's Delicatessen</li>
                <li class="rest">Madam Geneva</li>
                <li class="rest">McSorley's Old Ale House</li>
                <li class="rest">Mile End Sandwich</li>
                <li class="rest">Noho Star</li>
                <li class="rest">Peel's</li>
                <li class="rest">Pulino's Bar & Pizzeria</li>
                <li class="rest">Phebe's Tavern & Grill</li>
                <li class="rest">Saxon + Parole</li> 
                <li class="rest">The Smile</li>
                <li class="rest">The Wren</li>
            </ol>
        </div><!--END left-list-->
      
      
     <div id="restaurants-plots">
          <ul>
               <li id="acme"><a href="#" class="pop" title="<h3>Acme Restaurant & Bar</h3> 9 Great Jones Street<br> New York, NY 10012">1</a></li>
            <li id="aroma"><a href="#" class="pop" title="<h3>Aroma Kitchen and Wine Bar</h3>36 East 4th Street<br>New York, NY 10003">2</a></li>
            <li id="bondst"><a href="#" class="pop" title="<h3>Bond St Restaurant</h3>6 Bond Street<br> New York, NY 10012">3</a></li>
            <li id="bbar"><a href="#" class="pop" title="<h3>B Bar & Grill</h3>40 East 4th Street<br>New York, NY 10003">4</a></li>
            <li id="dbgb"><a href="#" class="pop" title="<h3>DBGB Kitchen and Bar</h3>299 Bowery<br>New York, NY 10003">5</a></li>
            <li id="fivepoints"><a href="#" class="pop" title="<h3>Five Points Restaurant</h3>31 Great Jones Street<br>New York, NY 10012">6</a></li>
            <li id="forcella"><a href="#" class="pop" title="<h3>Forcella Pizza di Napoli</h3>334 Bowery<br>New York, NY 10003">7</a></li>
            <li id="gemma"><a href="#" class="pop" title="<h3>Gemma Restaurant</h3>335 Bowery<br>New York, NY 10003">8</a></li>
            <li id="gyu-kaku"><a href="#" class="pop" title="<h3>Gyu-Kaku</h3>34 Cooper Square<br>New York, NY 10003">9</a></li>
            <li id="hecho" class="double-digit"><a href="#" class="pop" title="<h3>Hecho En Dumbo</h3>354 Bowery<br>New York, NY 10012">10</a></li>
             <li id="ilbuco" class="double-digit"><a href="#" class="pop" title="<h3>Il Buco</h3>47 Bond Street<br>New York, NY 10012">11</a></li>
            <li id="ilbucow" class="double-digit"><a href="#" class="pop" title="<h3>Il Buco Alimentari and Vineria</h3>53 Great Jones Street
<br>New York, NY 10012">12</a></li>
            <li id="katz" class="double-digit"><a href="#" class="pop" title="<h3>Katz's Delicatessen</h3>205 East Houston Street<br>New York, NY 10002">13</a></li>
            <li id="madamgeneva" class="double-digit"><a href="#" class="pop" title="<h3>Madam Geneva</h3>4 Bleecker Street<br>New York, NY 10012">14</a></li>
            <li id="mcsorleys" class="double-digit"><a href="#" class="pop" title="<h3>McSorley's Old Ale House</h3>15 East 7th Street<br>New York, NY 10003">15</a></li>
                 <li id="mile-end" class="double-digit"><a href="#" class="pop" title="<h3>Mile End Sandwich</h3>53 Bond Street<br> New York, NY 10012">16</a></li>
            <li id="nohostar" class="double-digit"><a href="#" class="pop" title="<h3>Noho Star</h3>330 Lafayette Street<br>New York, NY 10012">17</a></li>                
                  <li id="peels" class="double-digit"><a href="#" class="pop" title="<h3>Peel's</h3>325 Bowery<br>New York, NY 10003">18</a></li>
            <li id="pulinos" class="double-digit"><a href="#" class="pop" title="<h3>Pulino's Bar & Pizzeria</h3>282 Bowery<br>New York, NY 10012">19</a></li>
            <li id="phebes" class="double-digit"><a href="#" class="pop" title="<h3>Phebe's Tavern & Grill</h3>359 Bowery<br>New York, NY 10003">20</a></li>
            <li id="saxon" class="double-digit"><a href="#" class="pop" title="<h3>Saxon + Parole</h3>316 Bowery<br>New York, NY 10012">21</a></li>
            <li id="smile" class="double-digit"><a href="#" class="pop" title="<h3>The Smile</h3>26 Bond Street<br>New York, NY 10012">22</a></li>
            <li id="wren" class="double-digit"><a href="#" class="pop" title="<h3>The Wren</h3>344 Bowery<br> New York, NY 10012">23</a></li>
        </ul>
      </div><!--END restaurant-plots-->
      </div><!--END map-panes-->
      
      
  <!--SHOPPING-->
      <div  class="panes-map">
     
         <div class="left-list">  
           
           <div class="map-pics">
            <img src="<?php bloginfo('template_url') ?>/images/astorwines.jpg" width="180" height="136">
            <img src="<?php bloginfo('template_url') ?>/images/oak.jpg" width="180" height="136">
            <img src="<?php bloginfo('template_url') ?>/images/blue-cream.jpg" width="180" height="136">
            <img src="<?php bloginfo('template_url') ?>/images/johnvarvatos.jpg" width="180" height="136">
            <img src="<?php bloginfo('template_url') ?>/images/wholefoods.jpg" width="180" height="136">
        </div><!--END map-pics-->
    
        <h3 class="shophead">Shopping & Retail</h3>
          <ol class="vert-list">
            <li class="shop">4th Street Food Co-Op</li>
            <li class="shop">Astor Wines & Spirits</li>
            <li class="shop">Billy Reid</li>
            <li class="shop">Blue & Cream</li>
            <li class="shop">Blush Nail Lounge</li>
            <li class="shop">Bond No. 9</li>
            <li class="shop">Bond Street Chocolate</li>
            <li class="shop">Dave's Quality Meat</li>
            <li class="shop">Eva Scrivo Salon & Spa</li>  
            <li class="shop">John Derian</li>
            <li class="shop">John Varvatos</li>
            <li class="shop">Kiehl's</li>
            <li class="shop">Oak</li>
            <li class="shop">Patricia Field</li>
            <li class="shop">Rogan</li>
            <li class="shop">Trader Joe's</li>
            <li class="shop">United Nude</li>    
            <li class="shop">Whole Foods Market</li>
        </ol>
        </div><!--END left-list-->
      
      <div id="shopping-plots">
          <ul>
               <li id="fourth"><a href="#" class="pop" title="<h3>4th St Food Co-Op</h3> 58 East 4th Street<br> New York, NY 10003">1</a></li>
            <li id="astor"><a href="#" class="pop" title="<h3>Astor Wines & Spirits</h3>399 Lafayette Street<br>New York, NY 10003">2</a></li>
            <li id="billy"><a href="#" class="pop" title="<h3>Billy Reid</h3>54 Bond Street #2<br> New York, NY 10012">3</a></li>
            <li id="blue"><a href="#" class="pop" title="<h3>Blue & Cream</h3>1 East 1st Street<br>New York, NY 10003">4</a></li>
            <li id="blush"><a href="#" class="pop" title="<h3>Blush Nail Lounge</h3>218 East 5th Street<br>New York, NY">5</a></li>
            <li id="bond9"><a href="#" class="pop" title="<h3>Bond No. 9</h3>9 Bond Street<br>New York, NY">6</a></li>
            <li id="bondchoc"><a href="#" class="pop" title="<h3>Bond Street Chocolate</h3>63 East 4th Street<br>New York, NY 10003">7</a></li>
            <li id="daves"><a href="#" class="pop" title="<h3>Dave's Quality Meat</h3>7 East 3rd Street<br> New York, NY 10003">8</a></li>
            <li id="eva"><a href="#" class="pop" title="<h3>Eva Scrivo Salon & Spa</h3>50 Bond Street<br>New York, NY 10012">9</a></li>
            <li id="johnd" class="double-digit"><a href="#" class="pop" title="<h3>John Derian</h3>6 East 2nd Street<br>New York, NY 10003">10</a></li>
            <li id="johnv" class="double-digit"><a href="#" class="pop" title="<h3>John Varvatos</h3>315 Bowery<br>New York, NY 10003">11</a></li>
            <li id="kiehls" class="double-digit"><a href="#" class="pop" title="<h3>Kiehl's Pharmacy</h3>109 3rd Avenue<br>New York, NY 10003">12</a></li>
            <li id="oak" class="double-digit"><a href="#" class="pop" title="<h3>Oak</h3>28 Bond Street<br>New York, NY 10012">13</a></li>
            <li id="patricia" class="double-digit"><a href="#" class="pop" title="<h3>Patricia Field</h3>302 Bowery<br>New York, NY 10012">14</a></li>
            <li id="rogan" class="double-digit"><a href="#" class="pop" title="<h3>Rogan</h3>330 Bowery<br>New York, NY 10012">15</a></li>
            <li id="trader" class="double-digit"><a href="#" class="pop" title="<h3>Trader Joe's</h3>138 East 14th Street<br>New York, NY 10003">16</a></li>
            <li id="united" class="double-digit"><a href="#" class="pop" title="<h3>United Nude</h3>25 Bond Street<br>New York, NY 10012">17</a></li>
            <li id="whole" class="double-digit"><a href="#" class="pop" title="<h3>Whole Foods Market</h3>95 East Houston Street<br>New York, NY 10003">18</a></li>
            
       </ul>
      </div><!--END shopping-plots-->
      </div><!--END panes-map-->
      
      
       <!--ENTERTAINMENT-->
      <div  class="panes-map">
     
     <div class="left-list">  
       
       <div class="map-pics">
            <img src="<?php bloginfo('template_url') ?>/images/joes-pub.jpg" width="180" height="136">
            <img src="<?php bloginfo('template_url') ?>/images/sunshine.jpg" width="180" height="136">
            <img src="<?php bloginfo('template_url') ?>/images/angelika.jpg" width="180" height="134">
            <img src="<?php bloginfo('template_url') ?>/images/websterhall.jpg" width="180" height="136">
        </div><!--END map-pics-->
    
        <h3 class="entertainhead">Entertainment</h3>
          <ol class="vert-list">
              <li class="entertain">Angelika Film Center & Cafe</li>
              <li class="entertain">Anthology Film Archives</li>
              <li class="entertain">Blue Man Group</li>     
              <li class="entertain">Bowery Ballroom</li>
              <li class="entertain">Bowery Poetry Club</li>
              <li class="entertain">Joe's Pub at The Public Theater</li>
              <li class="entertain">La Mama Experimental Theatre</li>
              <li class="entertain">Landmark Sunshine Cinema</li>
              <li class="entertain">New Museum</li>
              <li class="entertain">Theater For The New City</li>
              <li class="entertain">Webster Hall</li>
        </ol>
        </div><!--END left-list-->
      
      <div id="entertainment-plots">
          <ul>
               <li id="angelika"><a href="#" class="pop" title="<h3>Angelika Film Center & Cafe</h3>18 West Houston Street<br> New York, NY 10012">1</a></li>
            <li id="anthology"><a href="#" class="pop" title="<h3>Anthology Film Archives</h3>32 2nd Avenue<br>New York, NY 10003">2</a></li>
            <li id="blueman"><a href="#" class="pop" title="<h3>Blue Man Group</h3>434 Lafayette Street<br> New York, NY 10003">3</a></li>
            <li id="ballroom"><a href="#" class="pop" title="<h3>Bowery Ballroom</h3>6 Delancey Street<br>New York, NY 10012">4</a></li>
            <li id="poetry"><a href="#" class="pop" title="<h3>Bowery Poetry Club</h3>308 Bowery<br>New York, NY">5</a></li>
            <li id="joespub"><a href="#" class="pop" title="<h3>Joe's Pub at The Public Theater</h3>425 Lafayette Street<br>New York, NY 10003">6</a></li>
            <li id="lamama"><a href="#" class="pop" title="<h3>La Mama Experimental Theatre</h3>74 East 4th Street<br>New York, NY 10003">7</a></li>
            <li id="landmark"><a href="#" class="pop" title="<h3>Landmark Sunshine Cinema</h3>143 East Houston Street<br> New York, NY">8</a></li>
            <li id="newmuseum"><a href="#" class="pop" title="<h3>New Museum</h3>235 Bowery<br>New York, NY 10002">9</a></li>
            <li id="theater" class="double-digit"><a href="#" class="pop" title="<h3>Theater For The New City</h3>155 1st Avenue<br>New York, NY 10003">10</a></li>
            <li id="webster" class="double-digit"><a href="#" class="pop" title="<h3>Webster Hall</h3>125 E 11th Street<br>New York, NY 10003">11</a></li>    
       </ul>
      </div><!--END entertainment-plots-->
      </div><!--END panes-map-->
      
      
       <!--PLACES OF INTEREST-->
      <div  class="panes-map">
     
     <div class="left-list">  
       
       <div class="map-pics">
               <img src="<?php bloginfo('template_url') ?>/images/stmarks.jpg" width="180" height="136">
            <img src="<?php bloginfo('template_url') ?>/images/green.jpg" width="180" height="134">
               <img src="<?php bloginfo('template_url') ?>/images/diasies.jpg" width="180" height="136">
            <img src="<?php bloginfo('template_url') ?>/images/boweryhotel.jpg" width="180" height="136">
            <img src="<?php bloginfo('template_url') ?>/images/washsquarepk.jpg" width="180" height="136">
        </div><!--END map-pics-->
    
        <h3 class="placeshead">Places of Interest</h3>
          <ol class="vert-list">
              <li class="places">Astor Place</li>
              <li class="places">The Bowery Hotel</li>
              <li class="places">Cooper Square Hotel</li>     
              <li class="places">Cooper Union</li>
              <li class="places">Lafayette House</li>
              <li class="places">Liz Christy Com. Garden</li>
              <li class="places">Merchant's House Museum</li>
              <li class="places">St Mark's Place</li>
              <li class="places">The Village Voice</li>
              <li class="places">Washington Square Park</li>
        </ol>
        </div><!--END left-list-->
      
       <div id="places-plots">
          <ul>
               <li id="astorpl"><a href="#" class="pop" title="<h3>Astor Place</h3>">1</a></li>
            <li id="bhotel"><a href="#" class="pop" title="<h3>The Bowery Hotel</h3>335 Bowery<br>New York, NY 10003">2</a></li>
            <li id="cshotel"><a href="#" class="pop" title="<h3>Cooper Square Hotel</h3>25 Cooper Square<br> New York, NY 10003">3</a></li>
            <li id="cunion"><a href="#" class="pop" title="<h3>Cooper Union</h3>41 Cooper Square<br>New York, NY 10003">4</a></li>
            <li id="lhouse"><a href="#" class="pop" title="<h3>Lafayette House</h3>38 East 4th Street<br>New York, NY 10003">5</a></li>
            <li id="lizc"><a href="#" class="pop" title="<h3>Liz Christy Community Garden</h3>E Houston btwn Bowery & 2nd Ave">6</a></li>
            <li id="merchants"><a href="#" class="pop" title="<h3>Merchant's House Museum</h3>29 East 4th Street<br>New York, NY 10003">7</a></li>
            <li id="stmarks"><a href="#" class="pop" title="<h3>St Mark's Place</h3>">8</a></li>
            <li id="vvoice"><a href="#" class="pop" title="<h3>The Village Voice</h3>36 Cooper Square<br>New York, NY 10003">9</a></li>
            <li id="washsq" class="double-digit"><a href="#" class="pop" title="<h3>Washington Square Park</h3>">10</a></li>
       </ul>
      </div><!--END places-plots-->
      </div><!--END panes-map-->
      
  
   
    </div> <!--END map_canvas2-->


<?php get_footer(); ?>
