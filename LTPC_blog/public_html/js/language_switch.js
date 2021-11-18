/* ***************** */
/* language switcher */
/* ***************** */

  var NO = 'NO'; 
  var EN = 'EN';
  var LV = 'LV'; 

  // default first onload :: setCookie("language", NO, 1); 

  var display_BLOCK = 'display: block;';
  var display_NONE  = 'display: none;';
 
    function switch_lang(target) {
      switch(target) {
        case NO:
          display_NO(display_BLOCK);
          display_EN(display_NONE);
          display_LV(display_NONE);
            NO_btn();
              setCookie("language", NO, 1); // :: 'language_cookie.js'
              console.log("getCookies SWITCH --> " + getCookie("language"));
          break;
        case EN:
          display_NO(display_NONE);
          display_EN(display_BLOCK);
          display_LV(display_NONE);
            EN_btn();
              setCookie("language", EN, 1); // :: 'language_cookie.js'
              console.log("getCookies SWITCH --> " + getCookie("language"));
          break;
        case LV:
          display_NO(display_NONE);
          display_EN(display_NONE);
          display_LV(display_BLOCK);
            LV_btn();
              setCookie("language", LV, 1); // :: 'language_cookie.js'
              console.log("getCookies SWITCH --> " + getCookie("language"));
          break;
        default:
          // code block
      } 
    } 

    function display_NO(target) {
      var txt_EN = document.querySelectorAll(".txt_NO");
      for (var i = 0; i < txt_EN.length; i++) { 
          document.getElementsByClassName("txt_NO")[i].style.cssText=target;
      } 
    }

    function display_EN(target) {
      var txt_NO = document.querySelectorAll(".txt_EN");
      for (var i = 0; i < txt_NO.length; i++) { 
          document.getElementsByClassName("txt_EN")[i].style.cssText=target;
      } 
    }

    function display_LV(target) {
      var txt_RS = document.querySelectorAll(".txt_LV");
      for (var i = 0; i < txt_RS.length; i++) { 
          document.getElementsByClassName("txt_LV")[i].style.cssText=target;
      } 
    }

    function NO_btn(){
      document.getElementsByClassName("NO_btn")[0].style.cssText='background-color:var(--blue); color: var(--white);';  
      document.getElementsByClassName("EN_btn")[0].style.cssText='background-color:var(--white); color: var(--grey);';
      document.getElementsByClassName("LV_btn")[0].style.cssText='background-color:var(--white); color: var(--grey);';
    }

    function EN_btn(){
      document.getElementsByClassName("NO_btn")[0].style.cssText='background-color:var(--white); color: var(--grey);';
      document.getElementsByClassName("EN_btn")[0].style.cssText='background-color:var(--blue); color: var(--white);';  
      document.getElementsByClassName("LV_btn")[0].style.cssText='background-color:var(--white); color: var(--grey);';
    }

    function LV_btn(){
      document.getElementsByClassName("NO_btn")[0].style.cssText='background-color:var(--white); color: var(--grey);';
      document.getElementsByClassName("EN_btn")[0].style.cssText='background-color:var(--white); color: var(--grey);'; 
      document.getElementsByClassName("LV_btn")[0].style.cssText='background-color:var(--blue); color: var(--white);';  
    }