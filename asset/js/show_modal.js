$(document).ready(function(){
    $('.show_modal').click(function(){
        $("#dok").html("")
            $("#tgl").html($(this).data("tgl"))  
            $("#idlaporan").html($(this).data("id"))    
            $("#namaKegiatan").html($(this).data("nama"))  
            $("#jenisKegiatan").html($(this).data("jenis"))
            $("#tahapKegiatan").html($(this).data("tahap"))
            $("#material").html($(this).data("material"))
            $("#operasi").html($(this).data("operasional"))
            $("#ttdg").html($(this).data("ttdg"))
            $("#total").html($(this).data("total"))
            $("#dana").html($(this).data("dana"))
            $("#keberhasilan").html($(this).data("keberhasilan"))
            $(".pj").html($(this).data("pj"))
           
            var gambar = ($(this).data("dok"));
            var rubah = gambar.split(",")
           
    
            for(i=0;i<rubah.length; i++){
                $("#dok").append(`
                <div class="col-sm-3" style="margin:20px;"><img  class="img-responsive" src= "../../asset/images/`+rubah[i]+`" alt="Chania" width="190" height="130"></div>
                `)
               
            }
        })


        $("#print").click(function(){
            $("#myModal").printThis({
                debug: false,               // show the iframe for debugging
                importCSS: true,            // import parent page css
                importStyle: false,         // import style tags
                printContainer: true,       // print outer container/$.selector
                loadCSS: "",                // path to additional css file - use an array [] for multiple
                pageTitle: "",              // add title to print page
                removeInline: false,        // remove inline styles from print elements
                removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
                printDelay: 333,            // variable print delay
                header: null,               // prefix to html
                footer: null,               // postfix to html
                base: false,                // preserve the BASE tag or accept a string for the URL
                formValues: true,           // preserve input/form values
                canvas: false,              // copy canvas content
                doctypeString: '...',       // enter a different doctype for older markup
                removeScripts: false,       // remove script tags from print content
                copyTagClasses: false,      // copy classes from the html & body tag
                beforePrintEvent: null,     // function for printEvent in iframe
                beforePrint: null,          // function called before iframe is filled
                afterPrint: null   
            });
        })
  
    });
   