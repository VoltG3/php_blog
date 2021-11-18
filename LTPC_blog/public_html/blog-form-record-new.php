<!DOCTYPE html>
  <head lang="lv">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="LTPC" content="PD_16/17">
      <meta name="ieskaite" content="WEB jtehnoloģijas">
      <meta name="keywords" content="HTML, CSS, JS, PHP">
      <meta name="author" content="Kristiāns Danoss">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">   
      <title>Ieskaites Darbs</title>

      <script type="text/javascript"> /* Cookie for language variable */
        window.onload = function(){
          switch_lang(getCookie("language"));   
      }
      </script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <script type="text/javascript" src="js/language_cookie.js"></script> 
      <script type="text/javascript" src="js/language_switch.js"></script>
      <link rel="stylesheet" type="text/css" href="css/styles.css" />
 <!-- <link rel="stylesheet" type="text/css" href="css/media.css"  /> -->
      <link rel="stylesheet" type="text/css" href="css/blogs-form.css" />  

  </head>
  <body>
   
    <!-- ---------------- -->
    <!-- messanger script -->
    <!-- ---------------- -->
  
    <script>
      $(function () {                               /* HIDDE messanger by default */
          parameters_default = { duration: 0,   } 
            $(1).ready(function () {
                $('#alert').slideUp(parameters_default);
            }); 
      });
      
      function message(){                           /* GET messanger */

       /* var variant = 1;
          if(variant == 1) {
            document.getElementsByClassName("message_1")[0].style.cssText='display: block;';
            document.getElementsByClassName("message_1")[0].style.cssText='display: block;';
          }*/

        $(function () {
          parameters_down    = { duration: 400, }
          parameters_up      = { duration: 150, }
      
          $(1).ready(function () {
            $('#alert').slideDown(parameters_down);
          }); 

          $(1).show(500, function () {
            setTimeout(function(){
              $('#alert').slideUp(parameters_up), hide(500);
            }, 2000);  
          }); 
        });
      }
    </script>

    <!-- ------------- -->
    <!-- messanger DIV -->
    <!-- ------------- -->
   
    <div id="alert" style="position: relative; display: block;  height: 100px; background: var(--green);">
      <style>
        .message_style {
          font-size: 32px;
          text-align: center;
          color: var(--white); }
      </style>

        <!--<p class="txt_NO message_style message_1">Blogginnlegget er oppdatert!</p>
        <p class="txt_EN message_style message_1">Blog post updated successfully!</p>
        <p class="txt_LV message_style message_1">Jauns bloga ieraksts pievienots veiksmīgi!</p>

        <p class="txt_NO message_style message_2">Nytt blogginnlegg lagt til!</p>
        <p class="txt_EN message_style message_2">New blog entry added successfully!</p>
        <p class="txt_LV message_style message_2">Bloga ieraksts atjaunināts veiksmīgi!</p>-->

        <p class="txt_NO message_style message_2">Operasjonen var vellykket!</p>
        <p class="txt_EN message_style message_2">The operation was successful!</p>
        <p class="txt_LV message_style message_2">Operācija veikta veiksmīgi!</p>
    </div>
    <!--<button onclick="message();">messages</button> -->

    <header>
      <a href="index.html"><img src="img/logo_lat.png" alt="img.jpg" /></a>  
      
        <div class="navbar_dropdown">
          <button onclick="myFunction()" class="dropbtn"><p class="mobil_izvelne">Izvēlne</p></button>
            <div id="myDropdown" class="dropdown-content">
                <a href="index.html"><div><strong>Jaunumi</strong></div></a></li>
                <a href="index.html"><div><strong>Par mums</strong></div></a></li>
                <a href="blogs.html"><div><strong>Blogs</strong></div></a></li>
                <a href="index.html"><div><strong>Kontakti</strong></div></a></li>
            </div>
        </div>
                         
        <script>
          function myFunction() {
             document.getElementById("myDropdown").classList.toggle("show");
          }
            function filterFunction() {
              var input, filter, ul, li, a, i;
                  input = document.getElementById("myInput");
                  filter = input.value.toUpperCase();
                  div = document.getElementById("myDropdown");
                  a = div.getElementsByTagName("a");
                    for (i = 0; i < a.length; i++) {
                      if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                          a[i].style.display = "";
                      } else {  
                          a[i].style.display = "none";
                        }
                      }
                    }
        </script>	
  
       <nav class="nav_top">
         <ul>
            <li>
              <a href="index.html">
                <p class="txt_NO">Nyheter</p>
                <p class="txt_EN">News</p>
                <p class="txt_LV">Jaunumi</p>
              </a>
            </li>
            <li>status
              <a href="index.html">
                <p class="txt_NO">Om oss</p>
                <p class="txt_EN">About us</p>
                <p class="txt_LV">Par mums</p>
              </a>
            </li>
            <li>
              <a href="blogs.php" class="active">
                <p class="txt_NO">Blogger</p>
                <p class="txt_EN">Blog</p>
                <p class="txt_LV">Blogs</p>
              </a>
            </li>
            <li>
              <a href="index.html">
                <p class="txt_NO">Kontakter</p>
                <p class="txt_EN">Contact</p>
                <p class="txt_LV">Kontakti</p>
              </a>
            </li>
               
            <li><input class="NO_btn" type="button" value="NO" onclick="switch_lang('NO')"></li>  <!-- js 'language_switch.js' -->
            <li><input class="EN_btn" type="button" value="EN" onclick="switch_lang('EN')"></li>  <!-- js 'language_switch.js' -->
            <li><input class="LV_btn" type="button" value="LV" onclick="switch_lang('LV')"></li>  <!-- js 'language_switch.js' -->
          </ul>
        </nav>    
    </header>

      <main class="main_blog">
        <aside>
          <h3>Opcijas</h3>
          <ul>
            <li>
              <div>
                <a href="blog-form-record-new.php"> <img src="img/add.png" alt="img" />
                  <p class="txt_NO">Legg til en ny </p>
                  <p class="txt_EN">Add a new</p>
                  <p class="txt_LV">Pievienot jaunu</p>
                </a>
              </div>
            </li>
            <li>
              <div>
                <a href="blog-list.php"> <img src="img/edit.png" alt="img" />
                  <p class="txt_NO">Gjennomgå oppføringen</p>
                  <p class="txt_EN">Review the entry</p> 
                  <p class="txt_LV">Pārskatīt ierakstus</p>
                </a>
              </div>
            </li>
          </ul>
        </aside>  

        <section class="section_blog">  
          <h3 class="txt_NO">Blogginnleggsdetaljer</h3>
          <h3 class="txt_EN">Blog post details</h3>
          <h3 class="txt_LV">Bloga ieraksta detaļas</h3>

          <!-- ----------------------- -->
          <!--           PHP           -->
          <!-- ----------------------- -->  
    
          <?php

            $id = intval($_GET['id']);

            $CERR_titl = ""; $title = "";
            $CERR_subt = ""; $subtitle = "";
            $CERR_auth = ""; $author = "";
            $CERR_cont = ""; $content = "";
            $E = 1;      
             
            /*if(isset($_POST['privat'])){
              echo "checked privat";
            }
            if(isset($_POST['public'])){
                echo "checked public";
            }
            $ENM_status = $_POST["ENM_status"];
        
            if(!empty($_POST['checkbox'])){
              echo "empty";
            } else {
              echo "not empty";
            }*/

            // checking for EMPTY fields & execute SUBMIT
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

              if (empty($_POST["title"]))    { $CERR_titl = "border-color: #FF0000;"; $E = 1; } else { $E = 0; $title =    ($_POST["title"]); }
              if (empty($_POST["subtitle"])) { $CERR_subt = "border-color: #FF0000;"; $E = 1; } else { $E = 0; $subtitle = ($_POST["subtitle"]); }
              if (empty($_POST["author"]))   { $CERR_auth = "border-color: #FF0000;"; $E = 1; } else { $E = 0; $author =   ($_POST["author"]); }
              if (empty($_POST["content"]))  { $CERR_cont = "border-color: #FF0000;"; $E = 1; } else { $E = 0; $content =  ($_POST["content"]); }
            
             
              if($E == 0) { insert_data_mysql(); }     
            }
          ?>

          <!-- ----------------------- -->
          <!--           FORM          -->
          <!-- ----------------------- --> 
       
          <div class="form_input">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" > 
                
              <label for="title">
                <p class="form_header txt_NO">Tittle</p>
                <p class="form_header txt_EN">Titel</p>
                <p class="form_header txt_LV">Virsraksts</p>
              </label>
              <input style="<?php echo $CERR_titl;?>" id="title" type="text" name="title" placeholder="Virsraksts" value="<?php echo $title;?>">

              <label for="subtitle">
                <p class="form_header txt_NO">Teksting</p>
                <p class="form_header txt_EN">Subtitle</p>
                <p class="form_header txt_LV">Apakšvirsraksts</p>
              </label>
              <input style="<?php echo $CERR_subt;?>" id="subtitle" type="text" name="subtitle" placeholder="Apakšvirsraksts" value="<?php echo $subtitle;?>">

              <label for="author">
                <p class="form_header txt_NO">Forfatter</p>
                <p class="form_header txt_EN">Author</p>
                <p class="form_header txt_LV">Autors</p>
              </label>
              <input style="<?php echo $CERR_auth;?>" id="author" type="text" name="author" placeholder="Autors"  value="<?php echo $author;?>">
          
              <label for="saturs">
                <p class="form_header txt_NO">Innhold</p>
                <p class="form_header txt_EN">Content</p>
                <p class="form_header txt_LV">Saturs</p>
              </label>
              <textarea style="<?php echo $CERR_cont;?>" id="content" name="content" placeholder="Saturs" style="height:200px"><?php echo $content;?></textarea>

              <label for="status">
                <p class="form_header txt_NO">Status</p>
                <p class="form_header txt_EN">Status</p>
                <p class="form_header txt_LV">Statuss</p>
              </label>
              <select id="status" name="status">
                <option value="privat">Aktīvs</option>
                <option value="public">Neaktīvs</option>
              </select>
            
              <label for="status">
                <input type="checkbox" checked="checked">
                <p class="status_p">Publisks?</p>
              </label>

                <input id="submit" type="submit" value="Submit">

            </form>
          </div>              
        </section>
      </main>

      <footer>
        <p class="footer_text"><small>Web lapas izstrādātājs: <strong>Kristiāns Danoss</strong> &copy 2021 Visas tiesības paturētas</small></p>
      </footer>
      <!-- REACT -->
      <!-- <script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
      <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
      <script             src="https://unpkg.com/@babel/standalone/babel.min.js"></script> -->
  </body>

    <!-- ----------------------- -->
    <!--   PHP function          -->
    <!-- ----------------------- -->  

    <?php 
      function insert_data_mysql(){
        include("config.php");

          $conn = new mysqli($host, $user, $pass, $dbase);
          if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

          $title = $_POST["title"];
          $subtitle = $_POST["subtitle"];
          $author = $_POST["author"];
          $ENM_status = $_POST["ENM_status"];
          $ENM_public = $_POST["ENM_public"];
          $content = $_POST["author"];

          $sql = "INSERT INTO $table ( id, title, subtitle, author, DATE_orig, DATE_edit, ENM_status, ENM_public, content )
          VALUES ( id, '$title', '$subtitle', '$author', NOW(), NOW(), 'Y', 'Y', '$content' )"; // '$ENM_status'

          if ($conn->query($sql) === TRUE) {
            echo '<script>message()</script>'; // [MESSAGE] 

          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

        $conn->close();
      }
    ?>
</html>