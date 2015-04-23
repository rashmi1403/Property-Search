<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<title>Assignment 6</title>
    
<script type="text/javascript">
    function CheckEmpty()
    {
            var streetaddress_filled=false;
	        var city_filled=false;
            var state_filled=false;
            var blank = "";
            
            if (document.realEstateForm.Street_Address.value != blank)
            {
	           streetaddress_filled=true;
            }
	       if (document.realEstateForm.City.value != blank)
           {
	           city_filled=true;
           }
           if (document.realEstateForm.state.value != blank)
           {
	           state_filled=true;
           }
            
           if ( (streetaddress_filled) && (city_filled) && (state_filled) )
	       {
	           //alert("No missing fields");
	           return(true);
	       }
	       else
	       {/* check which fields are missing */

	           var alertstring="Please enter value for: \n";
               
               if (!streetaddress_filled)
               {
		          alertstring=alertstring + "Street Address\n";
               }
               if(!city_filled)
               {
                   alertstring=alertstring + "City\n";
               }
               if(!state_filled)
               {
                   alertstring=alertstring + "State\n";
               }
               
               
               alert(alertstring);
               return(false);  
            }
    }
</script>

</head>
<body>

    <p style="text-align:center;top:20px;font:20pt time,Ariel"><b>Real Estate Search</b></p>
    
    <table style="border: 3px solid black;width:450px;height:200px;margin-left:410px;">
        <form name="realEstateForm" METHOD="GET" ACTION="">
            <tr style="text-align:left;">
                <td style="text-align:left;">   
                    <label for="Street_Address" style="font:16pt time,Ariel">Street Address*:</label>
                </td>
                <td>
                    <input type="text" name="Street_Address" value="<?php echo isset($_GET["Street_Address"])?$_GET["Street_Address"]:"";?>" > </input>
                </td>
            </tr>
            <tr>
                <td>   
                    <label for="City" style="font:16pt time,Ariel">City*:</label>
                </td>
                <td>      
                    <input type="text" name="City" value="<?php echo isset($_GET["City"])?$_GET["City"]:"";?>" > </input>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="State" style="font:16pt time,Ariel">State*:</label>
                </td>
                <td>
                <select name="state" value="<?php echo isset($_GET["state"])?$_GET["state"]:"";?>">
                   <option value="">       </option>
	               <option value="AK" <?php if(isset($_GET["state"])&& ($_GET["state"])== "AK") echo "selected='selected'"; ?>>AK</option>
                   <option value="AL" <?php if(isset($_GET["state"])&& ($_GET["state"])== "AL") echo "selected='selected'"; ?>>AL</option>
	               <option value="AR" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "AR") echo "selected='selected'"; ?>>AR</option>
	               <option value="AZ" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "AZ") echo "selected='selected'"; ?>>AZ</option>
	               <option value="CA" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "CA") echo "selected='selected'"; ?>> CA </option>
	               <option value="CO" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "CO") echo "selected='selected'"; ?>>CO</option>
	               <option value="CT" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "CT") echo "selected='selected'"; ?>>CT</option>
	               <option value="DC" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "DC") echo "selected='selected'"; ?>>DC</option>
	               <option value="DE" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "DE") echo "selected='selected'"; ?>>DE</option>
	               <option value="FL" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "FL") echo "selected='selected'"; ?>>FL</option>
	               <option value="GA" <?php if(isset($_GET["state"])&& ($_GET["state"])== "GA") echo "selected='selected'"; ?>>GA</option>
	               <option value="HI" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "HI") echo "selected='selected'"; ?>>HI</option>
	               <option value="IA" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "IA") echo "selected='selected'"; ?>>IA</option>
	               <option value="ID" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "ID") echo "selected='selected'"; ?>>ID</option>
	               <option value="IL" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "IL") echo "selected='selected'"; ?>>IL</option>
	               <option value="IN" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "IN") echo "selected='selected'"; ?>>IN</option>
	               <option value="KS" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "KS") echo "selected='selected'"; ?>>KS</option>
	               <option value="KY" <?php if(isset($_GET["state"])&& ($_GET["state"])== "KY") echo "selected='selected'"; ?>>KY</option>
	               <option value="LA" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "LA") echo "selected='selected'"; ?>>LA</option>
	               <option value="MA" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "MA") echo "selected='selected'"; ?>>MA</option>
	               <option value="MD" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "MD") echo "selected='selected'"; ?>>MD</option>
	               <option value="ME" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "ME") echo "selected='selected'"; ?>>ME</option>
	               <option value="MI" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "MI") echo "selected='selected'"; ?>>MI</option>
	               <option value="MN" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "MN") echo "selected='selected'"; ?>>MN</option>
	               <option value="MO" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "MO") echo "selected='selected'"; ?>>MO</option>
	               <option value="MS" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "MS") echo "selected='selected'"; ?>>MS</option>
	               <option value="MT" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "MT") echo "selected='selected'"; ?>>MT</option>
	               <option value="NC" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "NC") echo "selected='selected'"; ?>>NC</option>
	               <option value="ND" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "ND") echo "selected='selected'"; ?>>ND</option>
	               <option value="NE" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "NE") echo "selected='selected'"; ?>>NE</option>
	               <option value="NH" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "NH") echo "selected='selected'"; ?>>NH</option>
	               <option value="NJ" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "NJ") echo "selected='selected'"; ?>>NJ</option>
	               <option value="NM" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "NM") echo "selected='selected'"; ?>>NM</option>
	               <option value="NV" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "NV") echo "selected='selected'"; ?>>NV</option>
	               <option value="NY" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "NY") echo "selected='selected'"; ?>>NY</option>
                   <option value="OH" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "OH") echo "selected='selected'"; ?>>OH</option>
                   <option value="OK" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "OK") echo "selected='selected'"; ?>>OK</option>
	               <option value="OR" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "OR") echo "selected='selected'"; ?>>OR</option>
	               <option value="PA" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "PA") echo "selected='selected'"; ?>>PA</option>
	               <option value="SD" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "SD") echo "selected='selected'"; ?>>SD</option>
	               <option value="TN" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "TN") echo "selected='selected'"; ?>>TN</option>
	               <option value="TX" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "TX") echo "selected='selected'"; ?>>TX</option>
	               <option value="UT" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "UT") echo "selected='selected'"; ?>>UT</option>
	               <option value="VA" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "VA") echo "selected='selected'"; ?>>VA</option>
	               <option value="VT" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "VT") echo "selected='selected'"; ?>>VT</option>
	               <option value="WA" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "WA") echo "selected='selected'"; ?>>WA</option>
	               <option value="WI" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "WI") echo "selected='selected'"; ?>>WI</option>
	               <option value="WV" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "WV") echo "selected='selected'"; ?>>WV</option>
	               <option value="WY" <?php if(isset($_GET["state"])&& ($_GET["state"]) == "WY") echo "selected='selected'"; ?>>WY</option>
               </select>
             </td>
         </tr>
         <tr>
            <td>
            </td>
            <td>
                <input type="submit" name="submit" value="Search" onClick="if(CheckEmpty() == false){ return false; }" ></input>
                <a href="http://www.zillow.com/">
                            <img src="http://www.zillow.com/widgets/GetVersionedResource.htm?path=/static/logos/Zillowlogo_150x40_rounded.gif" width="150" height="40" alt="Zillow Real Estate Search" />
                </a>
            </td>
        </tr>
        <tr>
                
        </tr>
        <tr>
            <td style="font:14pt time,Ariel">* - Mandatory fields.</td>
        </tr>
                
      </form>
    </table>
    
    
    <?php

        
        if(isset($_GET["submit"]))
        {
            $url ="http://www.zillow.com/webservice/GetDeepSearchResults.htm?zws-id=X1-ZWz1dxzun266mj_8i7yl&";
            if(!empty($_GET)) 
            { 
                $StAddr = $_GET["Street_Address"] ;
                $City   = $_GET["City"];
                $State  = $_GET["state"];
        
                $arr = explode(" ",$StAddr);
                $url .=  "address=" .implode("+",$arr);
            
                $arr = explode(" ",$City);
                $url .= "&citystatezip=" .implode("+",$arr) ."+" .$State ."&rentzestimate=true";
        
        
			//$url = $url + $v + "&";
           // echo "<b>" . $k . "</b>: &nbsp;" . $v . "<br/>";
              
            }
            //echo $url;
            $xml=simplexml_load_file($url);
            
            
            $phptext = "";
            
        if($xml->message->code == 0)
        {
            $lastupdated = "last-updated";
            $NA = "N/A";
            
            echo "<p style='text-align:center;font:24pt time,Ariel'><b>Search Results</b></p>";
            
            if(isset($xml->response->results->result->links->homedetails) && !empty($xml->response->results->result->links->homedetails))
                $homedetails = $xml->response->results->result->links->homedetails;
            else
                $homedetails = $NA;
            
            if(isset($xml->response->results->result->address->street) && !empty($xml->response->results->result->address->street))
                $street = $xml->response->results->result->address->street;
            else
                $street = $NA;
            
            if(isset($xml->response->results->result->address->city) && !empty($xml->response->results->result->address->city))
                $city = $xml->response->results->result->address->city;
            else
                $city = $NA;
            
            if(isset($xml->response->results->result->address->state) && !empty($xml->response->results->result->address->state))
                $state = $xml->response->results->result->address->state;
            else
                $state = $NA;
            
            if(isset($xml->response->results->result->address->zipcode) && !empty($xml->response->results->result->address->zipcode))
                $zipcode = $xml->response->results->result->address->zipcode;
            else
                $zipcode = $NA;
            
            $phptext .= "<table style=width:80%;margin-left:150px;margin-right:150px>";
            $phptext .= "<caption style='text-align:left;border: 2px solid black;border-radius:6px;background-color:#F1EAC2'>See more details for   <a target=_blank style='text-decoration:none' href=" .$homedetails .">";
            $phptext .= $street ."," ;
            $phptext .= $city .",";
            $phptext .= $state ."-";
            $phptext .= $zipcode ."</a> on Zillow</caption>";
            
            if(isset($xml->response->results->result->useCode) && !empty($xml->response->results->result->useCode))
                $useCode = $xml->response->results->result->useCode;
            else
                $useCode = $NA;
            
            if(isset($xml->response->results->result->lastSoldPrice) && !empty($xml->response->results->result->lastSoldPrice))
            {
                $lastSoldPrice = $xml->response->results->result->lastSoldPrice;
                $lastsoldprice = floatval($lastSoldPrice);
                $lastSoldPrice = "$".number_format($lastsoldprice,2);
            }
            else
                $lastSoldPrice = $NA;
            
            $phptext .= "<tr><td>Property Type:         </td><td>" .$useCode ."</td>";
            $phptext .= "<td>Last Sold Price:            </td><td style='text-align:right'>" .$lastSoldPrice  ."</tr>";
            
            if(isset($xml->response->results->result->yearBuilt) && !empty($xml->response->results->result->yearBuilt))
                $yearBuilt = $xml->response->results->result->yearBuilt;
            else
                $yearBuilt = $NA;
            
            date_default_timezone_set('America/Los_Angeles');
            if(isset($xml->response->results->result->lastSoldDate) && !empty($xml->response->results->result->lastSoldDate))
            {
                $lastSoldDate = $xml->response->results->result->lastSoldDate;
                $lastsolddate = new DateTime($lastSoldDate);
                $lastSoldDate = date_format($lastsolddate ,'d-M-Y');
            }
            else
                $lastSoldDate = $NA;
            
            $phptext .= "<tr><td>Year Built:            </td><td>" .$yearBuilt ."</td>";
            $phptext .= "<td>Last Sold Date:            </td><td style='text-align:right'>" .$lastSoldDate ."</td></tr>";
            
            if(isset($xml->response->results->result->lotSizeSqFt) && !empty($xml->response->results->result->lotSizeSqFt))
            {
                $lotSizeSqFt = $xml->response->results->result->lotSizeSqFt;
                $lotsize = floatval($lotSizeSqFt);
                $lotSizeSqFt = number_format($lotsize)." sq.ft.";
            }
            else
                $lotSizeSqFt = $NA;
            
            if(isset($xml->response->results->result->zestimate->$lastupdated) && !empty($xml->response->results->result->zestimate->$lastupdated))
            {
                $lastupd = $xml->response->results->result->zestimate->$lastupdated;
                $lastupdNwDt = new DateTime($xml->response->results->result->zestimate->$lastupdated);
                $lastupd = date_format($lastupdNwDt ,'d-M-Y');
            }
            else
                $lastupd = $NA;
            
            if(isset($xml->response->results->result->zestimate->amount) && !empty($xml->response->results->result->zestimate->amount))
            {
                $zamount = $xml->response->results->result->zestimate->amount;
                 $amount = floatval($zamount);
                $zamount = "$".number_format($amount,2);
            }
            else
                $zamount = $NA;
            
            $phptext .= "<tr><td>Lot Size:              </td><td>" .$lotSizeSqFt  ."</td>";
            $phptext .= "<td>Zestimate <sup>&reg;</sup> Property Estimate as of " .$lastupd.":            </td><td style='text-align:right'>" .$zamount ."</tr>";
            
            if(isset($xml->response->results->result->finishedSqFt) && !empty($xml->response->results->result->finishedSqFt)) 
            {
                $finishedSqFt = $xml->response->results->result->finishedSqFt;
                 $finishedsqft = floatval($xml->response->results->result->finishedSqFt);
                $finishedSqFt = number_format($finishedsqft)." sq.ft.";       
            }
           else
                $finishedSqFt = $NA;
           
            $phptext .= "<tr><td>Finished Area:              </td><td>" . $finishedSqFt ."</td>";
            
            if(isset($xml->response->results->result->zestimate->valueChange) && !empty($xml->response->results->result->zestimate->valueChange))
            {
                $valueChange = $xml->response->results->result->zestimate->valueChange;
                $valchng = floatval($valueChange);
                if($valchng < 0)
                {
                    $valueChange = "$".number_format(abs($valchng),2);
                    $phptext .= "<td>30 Days Overall Change <img src='http://www-scf.usc.edu/~csci571/2014Spring/hw6/down_r.gif'/>:            </td><td style='text-align:right'>" .$valueChange ."</tr>";
                }
                else
                {
                    $valueChange = "$".number_format(abs($valchng),2);
                    $phptext .= "<td>30 Days Overall Change <img src='http://www-scf.usc.edu/~csci571/2014Spring/hw6/up_g.gif'/>:            </td><td style='text-align:right'>" .$valueChange ."</tr>"; 
                }
            }
            else
            {
                $valueChange  = $NA;
                $phptext .= "<td>30 Days Overall Change <img src='http://www-scf.usc.edu/~csci571/2014Spring/hw6/up_g.gif'/>:            </td><td style='text-align:right'>" .$valueChange ."</tr>";
            }
            
            if(isset($xml->response->results->result->bathrooms) && !empty($xml->response->results->result->bathrooms))
                $bathrooms = $xml->response->results->result->bathrooms ;
            else
                $bathrooms = $NA;
                
            if(isset($xml->response->results->result->zestimate->valuationRange->low) && !empty($xml->response->results->result->zestimate->valuationRange->low))
            {
                $zlow = $xml->response->results->result->zestimate->valuationRange->low;
                 $proprangeL = floatval($zlow);
                $zlow = "$".number_format($proprangeL ,2)." - ";
            }
            else
                $zlow = $NA." - ";
            
            if(isset($xml->response->results->result->zestimate->valuationRange->high) && !empty($xml->response->results->result->zestimate->valuationRange->high))
            {
                $zhigh = $xml->response->results->result->zestimate->valuationRange->high;
                $proprangeH = floatval($zhigh);
                $zhigh = "$".number_format($proprangeH,2);
            }
            else
                $zhigh = $NA;
            
            $phptext .= "<tr><td>Bathrooms:              </td><td>" .$bathrooms ."</td>";
            $phptext .= "<td>All Time Property Range:            </td><td style='text-align:right'>" .$zlow  .$zhigh  ."</tr>";
            
            if(isset($xml->response->results->result->bedrooms) && !empty($xml->response->results->result->bedrooms))
                $bedrooms = $xml->response->results->result->bedrooms;
            else
                $bedrooms = $NA;
            
            if(isset($xml->response->results->result->rentzestimate->amount) && !empty($xml->response->results->result->rentzestimate->amount))
            {
                $rzamount = $xml->response->results->result->rentzestimate->amount;
                $rentval = floatval($rzamount );
                $rzamount  = "$".number_format($rentval,2);
            }
            else
                $rzamount = $NA;
           
            if(isset($xml->response->results->result->zestimate->$lastupdated) && !empty($xml->response->results->result->zestimate->$lastupdated))
            {
                $rzlastupdated = $xml->response->results->result->zestimate->$lastupdated;
                $rzlastupd = new DateTime($rzlastupdated);
                $rzlastupdated = date_format($rzlastupd ,'d-M-Y');
            }
            else
                $rzlastupdated = $NA;
            
            $phptext .= "<tr><td>Bedrooms:              </td><td>" .$bedrooms ."</td>";
            $phptext .= "<td>Rent Zestimate <sup>&reg;</sup> Rent Valuation as of  " .$rzlastupdated.":            </td><td style='text-align:right'>" .$rzamount  ."</tr>";
            
            if(isset($xml->response->results->result->taxAssessmentYear) && !empty($xml->response->results->result->taxAssessmentYear))
                $taxAssessmentYear = $xml->response->results->result->taxAssessmentYear;
            else
                $taxAssessmentYear = $NA;
            
            $phptext .= "<tr><td>Tax Assessment Year:              </td><td>" .$taxAssessmentYear ."</td>";
            
            if(isset($xml->response->results->result->rentzestimate->valueChange) && !empty($xml->response->results->result->rentzestimate->valueChange))
            {
                $valueChange = $xml->response->results->result->rentzestimate->valueChange;
                $valueChangeF = floatval($valueChange);
                if($valueChangeF < 0)
                {
                    $valueChange = "$".number_format(abs($valueChangeF),2);
                    $phptext .= "<td>30 Days Rent Change <img src='http://www-scf.usc.edu/~csci571/2014Spring/hw6/down_r.gif'/>:            </td><td style='text-align:right'>" .$valueChange ."</tr>";
                }
                else
                {
                    $valueChange = "$".number_format(abs($valueChangeF),2);
                    $phptext .= "<td>30 Days Rent Change <img src='http://www-scf.usc.edu/~csci571/2014Spring/hw6/up_g.gif'/>:            </td><td style='text-align:right'>" .$valueChange ."</tr>";
                }
            }
            else
            {
                $valueChange = $NA;
                $phptext .= "<td>30 Days Rent Change <img src='http://www-scf.usc.edu/~csci571/2014Spring/hw6/up_g.gif'/>:            </td><td style='text-align:right'>" .$valueChange ."</tr>";
            }
             
            if(isset($xml->response->results->result->taxAssessment) && !empty($xml->response->results->result->taxAssessment))
            {
                $taxAssessment = $xml->response->results->result->taxAssessment;
                 $taxassessment = floatval($taxAssessment);
                $taxAssessment = "$".number_format($taxassessment,2);
            }
            else
                $taxAssessment = $NA;
            
            if(isset($xml->response->results->result->rentzestimate->valuationRange->low) && !empty($xml->response->results->result->rentzestimate->valuationRange->low))
            {
                $rzlow = $xml->response->results->result->rentzestimate->valuationRange->low;
                $rzproprangeL = floatval($rzlow);
                $rzlow = "$".number_format($rzproprangeL,2)." - ";
            }
            else
                $rzlow = $NA." - ";
            
            if(isset($xml->response->results->result->rentzestimate->valuationRange->high) && !empty($xml->response->results->result->rentzestimate->valuationRange->high))
            {
                $rzhigh = $xml->response->results->result->rentzestimate->valuationRange->high;
                $rzproprangeH = floatval($rzhigh);
                $rzhigh = "$".number_format($rzproprangeL,2);
            }
            else
                $rzhigh = $NA;
           
            $phptext .= "<tr><td>Tax Assessment:              </td><td>" .$taxAssessment ."</td>";
            $phptext .= "<td>All Time Rent Range:            </td><td style='text-align:right'>" .$rzlow .$rzhigh ."</tr>";
            
            $phptext .= "</table>";
        }
        else
        {
            $phptext .="<p style='text-align:center;font-size:20px;'><b>No exact match found--Verify that the given address is correct.</b></p>";
        }
            $phptext .= "<p style='text-align:center;font-size:14px;'> &copy; Zillow, Inc., 2006-2014. Use is subject to <a href='http://www.zillow.com/corp/Terms.htm' >Terms of Use</a></br>
<a href='http://www.zillow.com/wikipages/What-is-a-Zestimate/'>What's a Zestimate?</a></p>";
            
            print_r($phptext);
            
            
        
        
        
        
        }
    ?>
</body>
</html>