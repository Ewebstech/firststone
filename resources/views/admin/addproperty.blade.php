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
                        <h1>Add Property</h1>
                    </div>
                </header>
                <section class="container_6 clearfix">
                    <div class="portlet grid_12">
                        <header>
                            <h2>Add to Property Listings for Sponsoring</h2>
                        </header>
                        <section>
                            <form class="" id="propertyForm" action="{{ route('property.store') }}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <p>
                                <div class="clearfix">

                                    @include('layout.flashmessages')
     
                                    <label for="form-name" class="form-label"> Select Investment<em>*</em><small>Investment type</small></label>
                                    &nbsp; &nbsp;
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="investmenttype" id="project[type]" value="Structure Investment">
                                        <label class="form-check-label" for="inlineRadio1">Land</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="investmenttype" id="project[type]" value="Development Investment">
                                        <label class="form-check-label" for="inlineRadio2">Structure</label>
                                      </div>
                                      <br /><br />
                                </div>
                                </p>

                                <div class="clearfix">

                                    <label for="form-username" class="form-label">Title <em>*</em><small></label>
                                    <div class="form-input"><input type="text" id="project[yieldtarget]" name="title" /></div>

                                </div>


                                <div class="clearfix">

                                    <label for="form-username" class="form-label">Address <em>*</em><small>In Figures(Numeric)</label>
                                    <div class="form-input"><textarea id="project[address]" name="address" ></textarea></div>

                                </div>

                                <div class="clearfix">

                                    <label for="form-username" class="form-label">Amount in &#8358 <em>*</em><small>In Figures(Numeric)</label>
                                    <div class="form-input"><input type="number" id="project[amount]" name="amount"  /></div>

                                </div>

                                <div class="clearfix">

                                    <label for="form-username" class="form-label">Type <em>*</em><small></small></label>

                                    <div class="form-input"><input type="text" id="project[dealunit]" name="type" /></div>

                                </div>

                                <div class="clearfix">

                                    <label for="form-username" class="form-label">Description <em>*</em><small>In Figures(Numeric)</label>
                                    <div class="form-input"><textarea id="project[address]" name="description" ></textarea></div>

                                </div>

                                <div class="clearfix">

                                    <label for="form-username" class="form-label">Upload Cover Image <em>*</em></label>
                                    <div class="form-input"><input type="file" name="image_name" class="form-control" id="image_name" value=""></div>

                                </div>
                                
                                <div id="data-msg"></div>

                                <div class="form-action clearfix">

                                    <input type="submit" class="button" value="Publish to Property Listings" />

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
  
</body>
</html>