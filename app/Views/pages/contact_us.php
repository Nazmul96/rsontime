<?php echo $this->extend('admin/layout')?>

<?php echo $this->section('content')?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<style>
    #pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 200px;
}

#pac-input:focus {
  border-color: #4d90fe;
}
</style>

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0"> <?php echo lang('page.contact_us');?></h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);"> <?php echo lang('page.coming_soon');?></a>
                            </li>
                            <li class="breadcrumb-item active">  <?php echo lang('page.contact_us');?></li>
                        </ol>
                    </div> 
                </div>
            </div>
        </div>
        <!-- end page title -->
        <form action="<?php echo base_url();?>/admin/pages/contact_us" method="post">
           <div class="row">
               <div class="col-md-12">
                   <div class="card"> 
                        <div class="card-body">
                            <h4 class="card-title mb-4"><?php echo lang('page.contact_us_details');?></h4> 
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="from-group">
                                        <label> <?php echo lang('page.page_title');?></label>
                                        <input type="text" name="page_title" class="form-control" value="<?php echo $Contact_us_details[0]->settings_value;?>">
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                  echo $validation->getError('page_title');
                                                  } ?>
                                        </small>  
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <label> <?php echo lang('page.email_address1');?></label>
                                        <input type="email" name="email_address1" class="form-control" value="<?php echo $Contact_us_details[1]->settings_value;?>">
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                  echo $validation->getError('email_address1');
                                                  } ?>
                                        </small>  
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <label> <?php echo lang('page.email_address2');?> </label>
                                        <input type="email" name="email_address2" class="form-control" value="<?php echo $Contact_us_details[2]->settings_value;?>">
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                  echo $validation->getError('email_address2');
                                                  } ?>
                                        </small>  
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <label> <?php echo lang('page.phone_number1');?> </label>
                                        <input type="tel" name="phone_number1" class="form-control" value="<?php echo $Contact_us_details[3]->settings_value;?>">
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                  echo $validation->getError('phone_number1');
                                                  } ?>
                                        </small>  
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <label> <?php echo lang('page.phone_number2');?> </label>
                                        <input type="tel" name="phone_number2" class="form-control" value="<?php echo $Contact_us_details[4]->settings_value;?>">
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                  echo $validation->getError('phone_number2');
                                                  } ?>
                                        </small>  
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <label> <?php echo lang('page.address');?></label>
                                        <input type="text" name="address1" class="form-control show_address" value="<?php echo $Contact_us_details[5]->settings_value;?>">
                                        <input type="hidden" name="address_lat" class="address_lat">
                                        <input type="hidden" name="address_lang" class="address_lang">
                                        <input id="pac-input" class="controls" type="text" placeholder="Search Box"/>  
                                        <input type="hidden" name="google_map_latlang" class="form-control" value="<?php echo $Contact_us_details[8]->settings_value;?>">
                                        <div id="map" style="width:100%;height:400px;">
                                          
                                        </div>
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                  echo $validation->getError('address1');
                                                  } ?>
                                        </small> 
                                     </div> 
                                     <br>
                                    <div class="map_show">
                                        <label> <?php echo lang('page.contact_frontend_google_form');?></label>
                                       <div class="mb-4">
                                        <?php if($Contact_us_details[13]->settings_value=='yes') {?>    
                                        <input class="form-check form-switch show_googlemap" type="checkbox" name="show_map" value="yes" id="switch2" switch="bool" checked>
                                            <label class="form-label" for="switch2" data-on-label="" data-off-label=""></label>
                                            <?php } else{?>
                                            <input class="form-check form-switch show_googlemap" type="checkbox" name="show_map" value="yes" id="switch2" switch="bool">
                                            <label class="form-label" for="switch2" data-on-label="" data-off-label=""></label>                        
                                            <?php } ?>
                                        </div>
                                      </div>   
                                </div>
                                <!-- <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <label> Address 2 </label>
                                        <input type="text" name="address2" class="form-control" value="<?php echo $Contact_us_details[6]->settings_value;?>">
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                  echo $validation->getError('address2');
                                                  } ?>
                                        </small>  
                                    </div>
                                </div> -->
                                <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <label> <?php echo lang('page.website_url');?></label>
                                        <input type="url" name="website_url" class="form-control" value="<?php echo $Contact_us_details[7]->settings_value;?>">
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                  echo $validation->getError('website_url');
                                                  } ?>
                                        </small>  
                                    </div>
                                </div>

                              
                                <div class="col-md-12 mb-4">
                                    <div class="from-group">
                                        <label> <?php echo lang('page.page_description');?></label>
                                        <textarea id="elm1" name="page_description"><?php echo $Contact_us_details[9]->settings_value;?></textarea>
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                  echo $validation->getError('page_description');
                                                  } ?>
                                        </small>  
                                    </div>
                                </div>
                                
                                <div class="col-md-12 mb-4">
                                    <div class="from-group">
                                        <label> <?php echo lang('page.contact_recapcha');?></label>
                                        <div class="from-group  mb-4">
                                                   <?php if($Contact_us_details[10]->settings_value=='yes') {?>    
                                                  <input class="form-check form-switch show_capcha" type="checkbox" name="show_recapcha" value="yes" id="switch1" switch="bool" checked>
                                                    <label class="form-label" for="switch1" data-on-label="" data-off-label=""></label>
                                                    <?php } else{?>
                                                    <input class="form-check form-switch show_capcha" type="checkbox" name="show_recapcha" value="yes" id="switch1" switch="bool">
                                                    <label class="form-label" for="switch1" data-on-label="" data-off-label=""></label>                        
                                                    <?php } ?>
                                        </div>
                                        <div class="row capcha_information">
                                            
                                           <div class="from-group col-md-6">
                                              <label> <?php echo lang('page.site_key');?></label>
                                              <input type="text" class="form-control" name="site_key" value="<?php echo $Contact_us_details[11]->settings_value;?>">
                                              <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('site_key');
                                                        } ?>
                                                </small>  
                                            </div><br>
                                            <div class="from-group col-md-6">
                                               <label><?php echo lang('page.gallery');?></label>
                                              <input type="text" class="form-control" name="secret_key" value="<?php echo $Contact_us_details[12]->settings_value;?>">
                                              <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('secret_key');
                                                        } ?>
                                              </small>  
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>  
                       </div>
                   </div>
               </div>
           </div>
           
          
          
           <button class="btn btn-primary mb-4" type="submit"> <i class="ri-check-fill  me-2"></i>Save settings</button>
        </form>
        <!-- end row -->  
    </div>
    <!-- container-fluid -->
</div>
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUah3CJX9w3eNWJHwjVQVNL04oXvZX1ZA&callback=initAutocomplete&libraries=places&v=weekly"
      async
    >
</script>
<script>
$( document ).ready(function() {

   <?php if($Contact_us_details[10]->settings_value == 'no'){ ?>
          $('.capcha_information').css('display','none');
   <?php } ?>

    $('.show_capcha').click(function() {
   
     if($(this).prop("checked")){
       $('.capcha_information').show();
     }
     else
     {
        $('.capcha_information').hide();
     }    
  });
});
</script>

<script>
    $('#map').hide();
   $('#pac-input').hide();

   $('.show_address').click(function(e){
         $('#map').toggle();
         $('#pac-input').toggle();

   });

function initAutocomplete() {
   
    const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 23.810332, lng: 90.4125181 },
    zoom: 13,
    mapTypeId: "roadmap",
    });

    // Create the search box and link it to the UI element.
    const input = document.getElementById("pac-input");
    const searchBox = new google.maps.places.SearchBox(input);
    
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    // Bias the SearchBox results towards current map's viewport.
    map.addListener("bounds_changed", () => {
        searchBox.setBounds(map.getBounds());
    });
 
    let markers = [];

     // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener("places_changed", () => {
    const places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
   // Clear out the old markers.
   markers.forEach((marker) => {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    const bounds = new google.maps.LatLngBounds();


    // call getlocation function--------
    GetLocation(places[0].formatted_address,map)

    places.forEach((place) => {
      if (!place.geometry || !place.geometry.location) {
        console.log("Returned place contains no geometry");
        return;
      }

      const icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25),
      };

      // Create a marker for each place.
      markers.push(
        new google.maps.Marker({
          map,
          icon,
          title: place.name,
          position: place.geometry.location,
        })
      );

     
      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
    
  });
  
 }

 function GetLocation(address, mapId) {
console.log(address);
$('.show_address').val(address);


var geocoder = new google.maps.Geocoder();
geocoder.geocode({ 'address': address }, function (results, status) {
    
    if (status == google.maps.GeocoderStatus.OK) {
var location = {};
location.lattitude = results[0].geometry.location.lat();
location.longitude = results[0].geometry.location.lng();
$('.address_lat').val(location.lattitude);
$('.address_lang').val(location.longitude);
    }

})}

</script>
<!-- End Page-content -->
<?php echo $this->endSection()?>