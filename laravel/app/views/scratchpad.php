<html>
  <head>
    
  </head>
   <body>

      <div id="container">  
        <div id="day5" class="day">
          <h1>Week 3, Day 5</h1>
          <?php

            Class Game {
              public $game_system = '';
              public $game_players = '';
              public $game_master = '';
              public function __construct($system, $players) {
                echo "Players are ready\n";
                $this->game_system = $system;
                $this->game_players = $players;
              }

              public function get_gm($GM) {
                $this->game_master = $GM;
              }
            }

            $SW = new Game('Savage Worlds', '6');
            $SW->get_gm('Shane');
            var_dump($SW);



          ?>
        </div>


        <div id="day4" class="day">
          <h1>Week 2, Day 4</h1>
          <?php
            echo "hello"." "."world";
            
            echo "<br />";
            echo "<br />";

            function count_to_ten(){
              $i = 0;
              do {
              	++$i;
              	echo "$i mississippi<br />";

      	    } while ($i < 10);
      	  }

      	  count_to_ten();

            echo "<br />";
            echo "<br />";
            
            function for_ten(){
            	for ($i=1; $i<=10; $i++){
            		if ($i < 4) {
            		echo "$i potato<br />";
            		}
            		elseif ($i == 4) {
            			echo "$i<br />";
            		}
            		elseif (($i > 4) && ($i < 8)) {
            			echo "$i potato<br />";
            		}
            		elseif ($i == 8) {
            			echo "More!<br />";
            		}
            		elseif ($i > 8) {
            		 	echo "No More Potatoes!<br />";
            		 } 
            	}
            }

            for_ten();

            echo "<br />";
            echo "<br />";
            
            function rpggames(){
            	$rpg = array("DnD", "Savage Worlds", "GURPS", "Fate", "Shadowrun");

            	foreach ($rpg as $value) {
            		echo "$value<br />";
            	}
            }

            rpggames();

            echo "<br />";
            echo "<br />";

            function info($firstname, $lastname, $phonenumbers){
            	$yourinfo = array('firstname' => "$firstname", 'lastname' => "$lastname", 'phonenumbers' => $phonenumbers);
            		return $yourinfo;
            }

            var_dump(info("Jenny", "Smith", array("867-5309", "555-1234")));

          ?>
      </div>
     </div> 
  </body>
</html>