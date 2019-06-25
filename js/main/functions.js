
window.onload=function(){
     $(window).scroll(function (event) {
            var y = $(this).scrollTop(); //set position from top when to change style in pixels
            if (y >= 50) {
                $('.header').addClass('resized');
            } else {
                $('.header').removeClass('resized');
            }
        });
        
        var res = window.location.href.split("/");
        var count=res.length;
        var pag=res[Number(count)-2];
        if (pag!="desarrollista" && pag!="inmobiliaria" && pag!="consultora" && pag!="contacto") {
          $("#menu-main-menu li:nth-child(1)").addClass("active")
          $("#menu-main-menu-1 li:nth-child(1)").addClass("active")
        }

        var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
        if (!isChrome) {
          $("a[href='https://api.whatsapp.com/send?phone=5493512916132']").map(function(){
            $(this).replaceWith('<span>' + $(this).html() +'</span>')
          })

        }


        $("#TipoPropiedad").change(function(){
        if ($("#TipoPropiedad").val()==3 || $("#TipoPropiedad").val()==4) {
          // $("#Dormitorios").attr("disabled", "disabled");
          $("#Dormitorios").parent().parent().fadeOut(200);
        } else{
          // $("#Dormitorios").removeAttr("disabled");
          $("#Dormitorios").parent().parent().fadeIn(200);
        }
      });
}


       function VerCons(img) {
    $(".VerCons img").attr("src", img);

    $(".descrip_edif").fadeOut(300, function(){
      $(".VerCons").fadeIn(300)
    })
  }
         




function openNav() {
  document.getElementById("myNav").style.width = "100%";
  $("html").addClass("disabled-scroll");
  $("body").addClass("disabled-scroll");
  $("header").hide(0);
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    $("html").removeClass("disabled-scroll");
    $("body").removeClass("disabled-scroll");
    document.getElementById("myNav").style.width = "0%";
    $("header").show(0);
}