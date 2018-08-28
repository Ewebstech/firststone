<!DOCTYPE html>
<!--[if IE 7 ]>   <html lang="en" class="ie7 lte8"> <![endif]--> 
<!--[if IE 8 ]>   <html lang="en" class="ie8 lte8"> <![endif]--> 
<!--[if IE 9 ]>   <html lang="en" class="ie9"> <![endif]--> 
<!--[if gt IE 9]> <html lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
@include('admin.layout.headscripts')
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body style="overflow: hidden;">
    <div id="loading"> 

        <script type = "text/javascript"> 
            document.write("<div id='loading-container'><p id='loading-content'>" +
                           "<img id='loading-graphic' width='16' height='16' src='{{ asset('/storage/admin/images/ajax-loader-big-000000.gif') }}' /> " +
                           "Loading...</p></div>");
        </script> 

    </div> 
    <div id="wrapper">
        @include('admin.layout.header')
        <section>
            <!-- Sidebar -->

            @include('admin.layout.sidebar')

            <!-- Sidebar End -->
            <section>
                <header class="container_12 clearfix">
                    <div class="grid_12">
                        <h1>Add Projects</h1>
                    </div>
                </header>
                <section class="container_6 clearfix">
                    <div class="portlet grid_12">
                        <header>
                            <h2>Add to Project Listings for Sponsoring</h2>
                        </header>
                        <section>
                            <form class="form has-validation" id="projectForm" enctype="multipart/form-data">
                                    @csrf
                                <p>
                                <div class="clearfix">

                                    <label for="form-name" class="form-label"> Select Investment<em>*</em><small>Investment type</small></label>
                                    &nbsp; &nbsp;
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="project[type]" id="project[type]" value="Land Investment">
                                        <label class="form-check-label" for="inlineRadio1">Land Investment</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="project[type]" id="project[type]" value="Development Investment">
                                        <label class="form-check-label" for="inlineRadio2">Development Investment</label>
                                      </div>
                                      <br /><br />
                                </div>
                                </p>
                                <div class="clearfix">

                                    <label for="form-email" class="form-label">Deal Size <em>*</em><small>E.g 2 plots of land at xx estate</small></label>

                                    <div class="form-input"><input type="text" name="project[dealsize]" id="project[dealsize]" required="required" /></div>

                                </div>

                                <div class="clearfix">

                                    <label for="form-username" class="form-label">Deal Units <em>*</em><small>Can be Alphanumeric</small></label>

                                    <div class="form-input"><input type="text" id="project[dealunit]" name="project[dealunit]" required="required" /></div>

                                </div>

                                <div class="clearfix">

                                    <label for="form-username" class="form-label">Amount in &#8358 <em>*</em><small>In Figures(Numeric)</label>
                                    <div class="form-input"><input type="number" id="project[amount]" name="project[amount]" required="required" /></div>

                                </div>

                                <div class="clearfix">

                                    <label for="form-username" class="form-label">Mininum Yield Target <em>*</em><small>Min Returns (percentage)</label>
                                    <div class="form-input"><input type="text" id="project[yieldtarget]" name="project[yieldtarget]" required="required" /></div>

                                </div>

                                <div class="clearfix">

                                    <label for="form-username" class="form-label">Property Address <em>*</em><small>In Figures(Numeric)</label>
                                    <div class="form-input"><textarea id="project[address]" name="project[address]" required="required"></textarea></div>

                                </div>
                                <div class="clearfix">

                                <label for="form-username" class="form-label">Upload Cover Image <em>*</em></label>
                                <div class="form-input"><input type="file" name="image_name" class="form-control" id="image_name" value=""></div>

                                </div>
                                
                                <div id="data-msg"></div>
                                <div class="form-action clearfix">

                                    <button class="button" id="submitForm" type="submit" data-icon-primary="ui-icon-circle-check">Publish to Project Listings</button>

                                </div>
                               
                            </form>
                            @include('admin.layout.footer')
                        </section>
                    </div>
                </section>
                
            </section>
             <!-- Main Section End -->
        </section>
    </div>

  @include('admin.layout.footscripts')
  
<script>
    $("#projectForm").submit(function(e){
        
        e.preventDefault();
        submit_form_with_file("projectForm", "{{ route('createproject') }}", "data-msg");
    })
</script>
</body>
</html>