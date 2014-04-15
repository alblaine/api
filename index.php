<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
<title>API Project</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
 

<link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
<script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>

<script src="instagram.js" type="text/javascript"></script>
<script src="js/instafeed.min.js" type="text/javascript"></script>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnUYsb0m0jnj14iFtjgj4pSaCV7mplGAI&sensor=false"></script>

    
</head>
<body>
  
  <script>
    $(document).ready(function() {
                createStoryJS({
                    type:       'timeline',
                    width:      '100%',
                    height:     '600',
                    margin: '0 auto',
                    source:     'https://docs.google.com/spreadsheet/pub?key=0AsYd2Ac46wYWdFdlN1pJNkFVcGkyT25ETDYzNHR3NXc&output=html',
                    embed_id:   'my-timeline'
                });
                loadFlckr(); 
            });
  </script>
<script type= "text/javascript">

      function initialize() {
        
        var styles = [
  {
    stylers: [
      { hue: "#00ffe6" },
      { saturation: -20 }
    ]
  },
   {
      featureType: "road",
      elementType: "geometry",
      stylers: [
        { lightness: 100 },
        { visibility: "simplified" }
      ]
    },{
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];
 
  
        var myLatlng = new google.maps.LatLng(34.7308, 36.7094); //Homs
        var myLatlng2 = new google.maps.LatLng(35.1333, 36.7500); //Hamah
        var myLatlng3 = new google.maps.LatLng(36.2167, 37.1667); //Aleppo
        var myLatlng4 = new google.maps.LatLng(33.5130, 36.2920); //Damascus
        var myLatlng5 = new google.maps.LatLng(); //Idlib 
        
        var mapOptions = {
          center: new google.maps.LatLng(35.2167, 37.5833),
          zoom: 7,
          draggable: false,
          scrollwheel: false
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
         map.setOptions({styles: styles});
        
        var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3 id="firstHeading" class="firstHeading">Homs</h3>'+
      '<div id="bodyContent">'+
      '<p><img src="homs.jpg" width="100%" height="150"><br><b>Homs</b>, is, according to the BBC, the capital of the Syrian Revolution. Although coming under control of opposition forces in 2011, a government offensive reclaimed parts of the city. As of Februrary 2014, up to 3,000 citizens were still trapped in the city without access to basic supplies. ' +
      '</p>'+
      '<p>Attribution: <a class="links" href="http://www.bbc.com/news/world-middle-east-15625642">'+
      'BBC News</a></p><br>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString,
      maxWidth: 250
  });
  
    var contentString2 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3 id="firstHeading" class="firstHeading">Hamah</h3>'+
      '<div id="bodyContent">'+
      '<p><img src="hama.jpg" width="100%" height="150"><br><b>Hamah</b>, a city where a massacre occured in 1982 at the hands of the government in response to a Sunni rebellion, is a long-time stronghold of political opposition to the Assad regime. In April 2013, opposition forces launched an offensive against government forces. To date, almost 8,000 people have been killed in the conflict here. </p>'+
      '<p>Attributions: <a class="links" href="http://www.vdc-sy.info/index.php/en/">'+
      'Violations Documentation Center in Syria' +
      '</a><br>Photo: <a class="links" href="http://upload.wikimedia.org/wikipedia/commons/8/84/Hama%2C_Syria_01.jpg">Bernard Gagnon, via Wikimedia Commons</a></p><br>'+
      '</div>'+
      '</div>';
  
  var infowindow2 = new google.maps.InfoWindow({
      content: contentString2,
      maxWidth: 250
  });
  
  
  var contentString3 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3 id="firstHeading" class="firstHeading">Aleppo</h3>'+
      '<div id="bodyContent">'+
      '<p><img src="aleppo.jpg" width="100%" height="150"><br><b>Aleppo</b> erupted again on April 12 as opposition fighters advanced in the Ramouseh district.' +
      ' Since 2011, over 19,000 people have been killed here in the conflict.</p>'+
      '<p>Attribution: <a class="links" href="http://www.aljazeera.com/news/middleeast/2014/04/syria-rebels-advance-aleppo-city-2014412101712303691.html">'+
      'Al Jazeera</a> '+
      '</p><br>'+
      '</div>'+
      '</div>';

  var infowindow3 = new google.maps.InfoWindow({
      content: contentString3,
      maxWidth: 250
  });
  
  
  var contentString4 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3 id="firstHeading" class="firstHeading">Damascus</h3>'+
      '<div id="bodyContent">'+
      '<p><img src="damascus.jpg" width="100%" height="150"><br><b>Damascus</b> is currently under seige as Syrian jet fighters began striking opposition strongholds on April 13. A battle also occured here in July 2012 lasting three weeks, with the Syrian army defeating opposition groups. At least 29,000 people have died in Damsacus and surrounding suburbs since 2011.' +
      ' Since 2011, over 19,000 people have been killed here in the conflict.</p>'+
      '<p>Attribution: <a class="links" href="http://www.aljazeera.com/news/middleeast/2014/04/syrian-jets-hit-rebel-bastions-near-damascus-2014413162921799697.html">'+
      'Al Jazeera</a><br>Photo: <a class="links" href="http://upload.wikimedia.org/wikipedia/commons/9/9f/Syrian_Demonstration_Douma_Damascus_08-04-2011.jpg" >shamsnn, via Wikimedia Commons </a>'+
      '</p><br>'+
      '</div>'+
      '</div>';

  var infowindow4 = new google.maps.InfoWindow({
      content: contentString4,
      maxWidth: 250
  });
  
  
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title:"Homs"
});
        
        var marker2 = new google.maps.Marker({
            position: myLatlng2,
            map: map,
            title:"Hamah"
            
        });
        
         var marker3 = new google.maps.Marker({
            position: myLatlng3,
            map: map,
            title:"Aleppo"
            
        });
        
        var marker4 = new google.maps.Marker({
          position: myLatlng4,
            map: map,
            title:"Damascus"
          });
        
        google.maps.event.addListener(marker, 'click', function() {
          
          infowindow2.close();
          infowindow3.close();
       
    infowindow.open(map,marker);
  });
        google.maps.event.addListener(marker2, 'click', function() {
    infowindow.close();
          infowindow3.close();
    infowindow2.open(map,marker2);
  });
               google.maps.event.addListener(marker3, 'click', function() {
    infowindow.close();
          infowindow2.close();
    infowindow3.open(map,marker3);
  });
               
               google.maps.event.addListener(marker4, 'click', function() {
       infowindow.close();
          infowindow2.close();
        infowindow3.close(); 
      infowindow4.open(map,marker4);
    });
         
               
      }
     
      google.maps.event.addDomListener(window, 'load', initialize);
        
        var feed = new Instafeed({
        get: 'tagged',
        tagName: 'syrianrevolution',
        clientId: '1af56aaa01ef4001bc99e812d2b083b4'
    });
    feed.run();
 
    
var html = ""  // string to hold data before writing to page
    //use any of the flickr api endpoints
    var apiurl = "http://api.flickr.com/services/feeds/photos_public.gne?tags=SyrianWar&tagmode=any&format=json&jsoncallback=?"
   
   
   function loadFlckr(){
          
            $.getJSON(apiurl,function(json){
                console.log(json);
                //code for outside loop
            
             //   $("#results2").append("<h2>" + json.title + "</h2>");
                 $.each(json.items,function(i,data){
                    //inside loop code
                    //html += '<p>Title:"' + data.title +'"</p>';
                    html += "<div id='" + 'flickr' + "'>"; 
                    //html += '<p>From:"'+ data.author_id+'"</p>';
                    html += "<a href='" + data.link + "'><img src='" + data.media.m + "'></a></div>";
                    });
                console.log(html);
                //after loop code
                $("#results2").append(html);
            });
            
       loadNYT(); 
    }



    var html2 = ""  // string to hold data before writing to page
    var apiurl2 = "http://api.nytimes.com/svc/search/v2/articlesearch.json?q=syria&begin_date=20140401&end_date=20140413&api-key=878c4b41e76e124a94e1371205a9d76b:11:69168380"

   
   function loadNYT() {
      
            $.getJSON(apiurl2,function(data){
                console.log(data);
                console.log(data.response.docs);
                var times = data.response.docs;
        
                
            
                 $.each(times,function(i,data){
                  
                 
                  
                   html2 += '<h4><a class="nyt-links" href="' + data.web_url + '">' + data.headline.main + '</a></p>';
                   
                    if (data.byline != 0) {
                    html2 += '<p>' + data.byline.original + '</p>';
                  
                    }
                   
                   html2 += '<p>Published: ' + data.pub_date + '</p>';
                   html2 += '<p>' + data.snippet +'</p>';
                   html2 += '<hr>'
                    });
                 
               
                //after loop code
                $("#results3").append(html2);
            });
            
  
    }




    </script>
    



<div class="row">
<div class="col-md-12"><a name="#"><h1 class="main-title">Syria: Civil War Rages On</h1></a>
<ol class="breadcrumb">
  <li><a class="links" href="#tweets">Tweets</a></li>
  <li><a class="links" href="#map">Map</a></li>
  <li><a class="links" href="#photos">Photos</a></li>
</ol>

</div>
</div><!--close row-->
<div class="container">
        <div class="divider"></div>
        
<div class="row">
  <div class="col-md-12">
    
  <div id="my-timeline"></div>
  </div>


     


<div class="col-md-4">
  <div id="twitter-title">
  <h2><a name="tweets">#Syria <img src="Twitter_logo_blue.png" height="25" width="30"></h2></a>
  </div>
  
    <p><a class="links" href="#">Return to top</a></p>
<div id="twitter-feed">

<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "2317407186-U6rMrXxdUkurS5wVjXZp1pBcEvwl2m2JJxux93x",
    'oauth_access_token_secret' => "ZlZxYYUtgqZRg9JxKydyR1EmO9NA2V375cXICViKls64h",
    'consumer_key' => "POAUdGlUzR4SgoiMYBenE37zr",
    'consumer_secret' => "BrmPD8YrEuqzMBFdZlsyn52wESCSpfx2wT0pvgvG2u8PeyNNau"
);



/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=%23Syria&count=8&lang=en';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
//echo $twitter->setGetfield($getfield)
 //           ->buildOauth($url, $requestMethod)
//          ->performRequest();

$string = json_decode($twitter->setGetField($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest(), $assoc = TRUE);

foreach ($string['statuses']as $items)
{

 echo "<p>Tweet: " . $items['text'] . "<br>"; 
 echo "When: " . $items['created_at'] . "</p>";
 echo "<hr>"; 
}

?>

</div> <!--end #twitter-feed -->

 <h2>Photos from Flickr</h2><p class="links"><a class="links" href="#">Return to top</a></p><div id="results2"></div>
<h2><a name="photos">Photos from Instagram</a></h2> <div id="instafeed"><p class="links"><a class="links" href="#">Return to top</a></p></div>
     

</div> <!--end col-md-4-->

<div class="col-md-8 col-sm-12">
   <a name="map"><h2>Cities in Struggle</h2></a>
    <p><a class="links" href="#">Return to top</a></p>
  <div id="map-wrapper"><div id="map-canvas" style="width: 100%; height: 100%"></div></div>
       
<a name="articles"><h2>Articles from The New York Times</h2></a>
<a class="links" href="#"><p>Return to top</a></p>
<div id="results3"></div>
</div> <!--end col-md-8 --> 

</div>  <!--end row-->




</div> <!--end container--> 
   <script src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="http://cdn.knightlab.com/libs/timeline/latest/js/storyjs-embed.js"></script>
</body>
</html>