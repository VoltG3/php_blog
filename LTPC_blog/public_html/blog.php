<!DOCTYPE html>
  <head lang="lv">
      <meta charset="UTF-8">
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
  
      <script type="text/javascript" src="js/language_cookie.js"></script> 
      <script type="text/javascript" src="js/language_switch.js"></script>
      <link rel="stylesheet" type="text/css" href="css/styles.css" />
 <!-- <link rel="stylesheet" type="text/css" href="css/media.css"  /> -->
      <link rel="stylesheet" type="text/css" href="css/blog.css" />   

  </head>
  <body>
    <!-- <div class="bg_img"></div>   background immage -->

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
            <li>
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
          <!-- <h3 class="txt_NO">Blogginnleggsdetaljer</h3>
          <h3 class="txt_EN">Blog post details</h3>
          <h3 class="txt_LV">Bloga ieraksta detaļas</h3> -->

          <!-- ----------------------- -->
          <!--           PHP           -->
          <!-- ----------------------- -->

          <?php
            include("config.php");
                                                
            $conn = new mysqli($host, $user, $pass, $dbase);
            if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

            $id = intval($_GET['id']);	//!!!! sanjemamais linkaaa

            $sql = "SELECT id, title, subtitle, author, DATE_edit, content FROM $table WHERE id=$id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<div class='article'>";                                                                 
                  echo "<h2 class='article_h2'>"          . $row["title"]     . "</h3>";
                  echo "<h3 class='article_h3'>"          . $row["subtitle"]  . "</h5>";
                  echo "<p  class='article_date_author'>" . $row["author"] . ", " . $row["DATE_edit"]=date("Y\. \g\a\d\a j\. F") . "</p>"; 
                  echo "<p  class='article_content'>"     . $row["content"]   . "</p>";
                echo "</div>";
              } 
        
            } else {
                echo "0 results";
            }

            $conn->close();                         
            ?>
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
</html>