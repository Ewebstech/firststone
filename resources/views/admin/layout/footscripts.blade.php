 <!-- MAIN JAVASCRIPTS -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.js"></script>
 <script>window.jQuery || document.write("<script src='{{ asset('/admin/js/jquery.min.js') }}'>\x3C/script>")</script>
 <script type="text/javascript" src="{{ asset('/admin/js/jquery.tools.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('/admin/js/jquery.uniform.min.js') }}"></script>
 <!--[if lt IE 9]>
 <script type="text/javascript" src="js/PIE.js"></script>
 <script type="text/javascript" src="js/ie.js"></script>
 <![endif]-->

 <script type="text/javascript" src="{{ asset('/admin/js/global.js') }}"></script>
 <!-- MAIN JAVASCRIPTS END -->

 <!-- LOADING SCRIPT -->
  <!-- MAIN JAVASCRIPTS END -->

    <!-- LOADING SCRIPT -->
    <script>
        $(window).load(function(){
            $("#loading").fadeOut(function(){
                $(this).remove();
                $('body').removeAttr('style');
            });
        });
        </script>
        <!-- LOADING SCRIPT -->
        
        <!-- jQplot SETUP -->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="lib/jqplot/excanvas.js"></script>
        <![endif]-->
        <script type="text/javascript" src="{{ asset('/js/ajax.js') }}"></script>

        <script type="text/javascript">
        $(document).ready(function(){
            var line1 = [1,4, 9, 16];
            var line2 = [25, 12.5, 6.25, 3.125];
            var line3 = [2, 7, 15, 30];
            var plot2 = $.jqplot('chart2', [line1, line2, line3], {
                show: true,
                legend:{show:true, location:'ne', xoffset:0},
                seriesDefaults:{
                    renderer:$.jqplot.BarRenderer, 
                    rendererOptions:{barPadding: 8, barMargin: 10, shadowDepth: 2}
                },
                series:[
                    {label:'Profits'}, 
                    {label:'Expenses'}, 
                    {label:'Sales'}
                ],
                axes:{
                    xaxis:{
                        renderer:$.jqplot.CategoryAxisRenderer, 
                        ticks:['1st Qtr', '2nd Qtr', '3rd Qtr', '4th Qtr']
                    }, 
                    yaxis:{min:0}
                }
            });
        });
        </script>
        <!-- jQplot SETUP END -->

 <script>
 $(window).load(function(){
     $("#loading").fadeOut(function(){
         $(this).remove();
         $('body').removeAttr('style');
     });
 });
 $(document).ready(function(){
     $.tools.validator.fn("#username", function(input, value) {
         return value!='Username' ? true : {     
             en: "Please complete this mandatory field"
         };
     });
     
     $.tools.validator.fn("#password", function(input, value) {
         return value!='Password' ? true : {     
             en: "Please complete this mandatory field"
         };
     });

     $("#form").validator({ 
         position: 'bottom left', 
         messageClass:'form-error',
         message: '<div><em/></div>' // em element is the arrow
     });
 });
 </script>
 <!-- LOADING SCRIPT -->