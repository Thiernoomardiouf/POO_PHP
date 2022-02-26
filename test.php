<?php
    function get($resource){
        $apiUrl = 'https://dev-site-simplon.pantheonsite.io/wp-json/wp/v2/formations';
        $json = file_get_contents($apiUrl.$resource);
        $result = json_decode($json);
        return $result;
    }

    $posts = get('/wp/v2/formations');


foreach ($posts as $post) {
  //  echo $post->id .'</br>';
  //  echo $post->formations;
}
?>






<?php 
    $url = 'https://dev-site-simplon.pantheonsite.io/wp-json/wp/v2/formations';
    $content = file_get_contents($url) or die("<p>Aye Caramba !</p>");
  
    $json = json_decode($content);
  
    if(count($json) > 0) {
        foreach($json as $article) {
            echo '<h3>'.$article->title->rendered.'</h3>';
            echo '<p>'.$article->description->rendered.'</p>';

        }
    } else {
        echo('Aucun résultat.');
    }
  
?>







<?php
  /*
  Plugin Name: Afficher formations 
  */
  
  // Accrochez le filtre 'the_content', ajoutez-y la fonction nommée 'affiche_formations'
  add_filter("the_content", "affiche_formations");
 
  // Definir 'affiche_formations'
  function affiche_formations($resource)
   {
    $apiUrl = 'https://dev-site-simplon.pantheonsite.io/wp-json/wp/v2/formations';
        $json = file_get_contents($apiUrl.$resource);
        $result = json_decode($json);
        return $result;
    }

    $posts = get('/wp/v2/formations');


    foreach ($posts as $post) {
      echo $post->id .'</br>';
     }
 ?>