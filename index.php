<?php

$items = json_decode(file_get_contents('https://dev.shepherd.appoly.io/fruit.json'));
// var_dump($items);
// echo '<pre>';
// print_r($items);
// echo '</pre>';
?>
<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 <title>Json to Database</title>
</head>

<body>

 <h1>Json to Database!</h1>
 <div class="container py-5">
  <div class="row">
   <?php foreach($items->menu_items as $item): ?>
   <div class="col-12 col-md-3">
    <div class="card">
     <div class="card-body">
      <ul>
       <li><?php echo $item->label;  ?></li>
       <hr>
       <?php if (! empty($item->children)): ?>
       <?php foreach ($item->children as $child):  ?>
       <ul>
        <li><?php echo $child->label;  ?></li>
        <hr>
        <?php if (! empty($child->children)): ?>
        <?php foreach ($child->children as $three):  ?>
        <ul>
         <li><?php echo $three->label;  ?></li>
         <hr>
         <?php if (! empty($three->children)): ?>
         <?php foreach ($three->four as $four):  ?>
         <ul>
          <li><?php echo $four->label;  ?></li>
          <hr>
          <?php if (! empty($four->children)): ?>
          <?php foreach ($four->five as $five):  ?>
          <ul>
           <li><?php echo $five->label;  ?></li>
           <hr>
           <?php if (! empty($five->children)): ?>
           <?php foreach ($five->six as $six):  ?>
           <li><?php echo $six->label;  ?></li>
           <?php endforeach; ?>
           <?php endif; ?>
          </ul>
          <?php endforeach; ?>
          <?php endif; ?>
         </ul>
         <?php endforeach; ?>
         <?php endif; ?>
        </ul>
        <?php endforeach; ?>
        <?php endif; ?>
       </ul>
       <?php endforeach; ?>
       <?php endif; ?>
      </ul>
     </div>
    </div>
   </div>
   <?php endforeach; ?>
  </div>
 </div>

 <!-- Optsional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>