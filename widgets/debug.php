  <div id="console-debug">
      <?php
        $all_vars = get_defined_vars();
      ?>
       <?php //print_r($all_vars); ?>
     
      <h2>GET </h2>
             <pre>
           <?php print_r($_GET); ?>
            </pre>
       
      <h2>POST </h2>
             <pre>
           <?php print_r($_POST); ?>
            </pre>
      <h2>Page Area</h2 >
      <pre>
      <?php print_r($page); ?>
    </pre>
            
</div>
