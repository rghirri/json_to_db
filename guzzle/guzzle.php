<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Bootstrap demo</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 <title>My RSS Reader</title>
</head>

<body>

 <div class="container">
  <div class="row">
   <div class="col-3"></div>
   <h1>Appoly</h1>
   <div class="col-6">
    <form>
     <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Enter feed URL here: </label>
      <input class="form-control" id="exampleInputEmail1" name="feed_url">
      <input type="submit" class="btn btn-primary" value="Read" />
     </div>
    </form>
    <?php  

        // json nested data
        
        if (isset($_REQUEST['feed_url'])){
          require './vendor/autoload.php';
          $myClient = new GuzzleHttp\Client([
            'headers' => ['User-Agent' => 'MyReader']
          ]);
          
          $feed_response = $myClient->request('GET', $_REQUEST['feed_url']);
          $data = json_decode($feed_response->getBody()->getContents());
          var_dump($data);
          // foreach($data->menu_items as $item){
          //       echo "<h3>" . $item->label . "</h3>";
          //       // echo "<p>" . $item->description . "</p>";
          // }
          
          
//******************************************************** */
          // if ($feed_response->getStatusCode() == 200) {
          //   if ($feed_response->hasHeader('content-length')){
          //     $contentLength = $feed_response->getHeader('content-length')[0];
          //     echo "<p> Downloaded $contentLength bytes of data. </p>";
          //   }   
              // $body = $data->getBody()->get;
              // var_dump($body);
              // $xml = new SimpleXMLElement($body);
              // foreach($xml->channel->item as $item){
              //   echo "<h3>" . $item->title . "</h3>";
              //   echo "<p>" . $item->description . "</p>";
              // }
            }
          
          // }
          
    ?>
   </div>
   <div class="col-3"></div>
  </div>
 </div>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>