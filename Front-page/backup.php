    <?php
      include("at-a-glance.php");
    ?>  
  <section id='hod' class='professor-category '>
      <h3 id="head">Head of Department</h3>
      <?php create_cards('Head Of Department');?>
    </section>
    <section id='professor' class='professor-category'>
      <h3>Professor</h3>
      <?php create_cards('Professor');?>
    </section>
    <section id='associate' class='professor-category'>
      <h3>Associate Professor</h3>
      <?php create_cards('Associate Professor');?>
    </section>
    <section id='assistant' class='professor-category'>
      <h3>Assistant Professor</h3>
      <?php create_cards('Assistant Professor');?>
    </section>
    <section id='labassistant' class='professor-category'>
      <h3>Lab Assistant</h3>
      <?php create_cards('Lab Assistant');?>
    </section>    
