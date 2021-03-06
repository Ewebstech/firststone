<!DOCTYPE html>
<!--[if IE 7 ]>   <html lang="en" class="ie7 lte8"> <![endif]--> 
<!--[if IE 8 ]>   <html lang="en" class="ie8 lte8"> <![endif]--> 
<!--[if IE 9 ]>   <html lang="en" class="ie9"> <![endif]--> 
<!--[if gt IE 9]> <html lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
@include('admin.layout.headscripts')
</head>
<body style="overflow: hidden;">
    <div id="loading"> 

        <script type = "text/javascript"> 
            document.write("<div id='loading-container'><p id='loading-content'>" +
                           "<img id='loading-graphic' width='16' height='16' src='images/ajax-loader-eeeeee.gif' /> " +
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
                        <h1>Dashboard</h1>
                    </div>
                </header>
                <!--- Content Start---->
                <section class="container_12 clearfix">
                
                    <section class="grid_12"> 
                        <div class="message info">
                            <h3>Quick Help - Dashboard</h3> 
                            <p> 
                                Lorem ipsum dolor sit amet
                            </p> 
                            <ol> 
                                <li>Lorem ipsum</li> 
                                <li>dolor</li> 
                                <li>sit amet</li> 
                            </ol>
                        </div>
                    </section> 
                
                    <section class="portlet grid_6 leading"> 
 
                        <header>
                            <h2>Invoice Statistics</h2> 
                        </header>
                        
                        <section>
                            <table class="full"> 
 
                                <tbody> 
 
                                    <tr> 
 
                                        <td>Total Invoices</td> 
 
                                        <td class="ar"><a href="#">30</a></td> 
 
                                        <td class="ar">1,498.50 $</td> 
 
                                    </tr> 
 
                                    <tr> 
 
                                        <td>Total Paid</td> 
 
                                        <td class="ar"><a href="#">25</a></td> 
 
                                        <td class="ar">1,248.75 $</td> 
 
                                    </tr> 
 
                                    <tr> 
 
                                        <td>Total Due</td> 
 
                                        <td class="ar"><a href="#">5</a></td> 
 
                                        <td class="ar">249.75 $</td> 
 
                                    </tr> 
 
                                    <tr> 
 
                                        <td>Total Overdue</td> 
 
                                        <td class="ar">0</td> 
 
                                        <td class="ar">0.00 $</td> 
 
                                    </tr> 
 
                                </tbody> 
 
                            </table>
                            
                        </section>
                        
                    </section> 
 
                    <section class="portlet grid_6 leading"> 

                        <header>
                            <h2>Sales Statistics</h2>
                        </header>

                        <section>
                            <table class="full"> 
 
                                <tbody> 
 
                                    <tr> 
 
                                        <td>Signups This Month</td> 
 
                                        <td class="ar"><a href="#">30</a></td> 
 
                                        <td class="ar"></td> 
 
                                    </tr> 
 
                                    <tr> 
 
                                        <td>Sales This Month</td> 
 
                                        <td class="ar"><a href="#">25</a></td> 
 
                                        <td class="ar">1,248.75 $</td> 
 
                                    </tr> 
 
                                    <tr> 
 
                                        <td>Signups This Year</td> 
 
                                        <td class="ar"><a href="#">30</a></td> 
 
                                        <td class="ar"></td> 
 
                                    </tr> 
 
                                    <tr> 
 
                                        <td>Sales This Year</td> 
 
                                        <td class="ar"><a href="#">25</a></td> 
 
                                        <td class="ar">1,248.75 $</td> 
 
                                    </tr> 
 
                                </tbody> 
 
                            </table>
                            
                        </section>

                    </section> 
 
                    <div class="clear"></div>

                    <section class="portlet grid_6 leading"> 
 
                        <header>
                            <h2>Client Statistics: <a href="#">30</a></h2>
                        </header>

                        <section>
                            <table class="full">
 
                                <tbody> 
 
                                    <tr> 
 
                                        <td>Active</td> 
 
                                        <td style="width:70%"><div id="progress1" class="progress"><span style="width: 50%;"><b>50%</b></span></div></td> 
 
                                        <td style="width:40px" class="ar">15/30</td> 
 
                                    </tr> 
 
                                    <tr> 
 
                                        <td>Pending</td> 
 
                                        <td><div class="progress"><span style="width: 10%;"><b>10%</b></span></div></td> 
 
                                        <td class="ar">3/30</td> 
 
                                    </tr> 
 
                                    <tr> 
 
                                        <td>Suspended</td> 
 
                                        <td><div class="progress"><span style="width: 6%;"><b>6%</b></span></div></td> 
 
                                        <td class="ar">2/30</td> 
 
                                    </tr> 
 
                                    <tr> 
 
                                        <td>Cancelled</td> 
 
                                        <td><div class="progress"><span style="width: 16%;"><b>16%</b></span></div></td> 
 
                                        <td class="ar">5/30</td> 
 
                                    </tr> 
 
                                    <tr> 
 
                                        <td>Error</td> 
 
                                        <td><div class="progress"><span style="width: 16%;"><b>16%</b></span></div></td> 
 
                                        <td class="ar">5/30</td> 
 
                                    </tr>
 
                                </tbody> 
 
                            </table>
                        </section>
                    </section>
 
                    <section class="portlet grid_6 leading"> 

                        <header>
                            <h2>Profits, Expenses and Sales - <a href="http://www.jqplot.com/tests/" target="_blank" rel="nofollow">More Examples</a></h2>
                        </header>

                        <section>
                            <div class="jqPlot" id="chart2" style="width:100%;height:160px;"></div>
                        </section>

                    </section> 
                    
                    <div class="clear"></div>
                
                    <section class="tabs grid_12 leading">
                        <ul class="clearfix">
                            <li><a href="#">Overview</a></li>
                            <li><a href="#">Tab 2</a></li>
                            <li><a href="#">Tab 3</a></li>
                            <li><a href="#">Tab 4</a></li>
                        </ul>
                        <section>
                            <section class="clearfix">
                                <header class="grid_12 alpha omega">
                                    <h2>Tabbed Content</h2>
                                </header>
                                <div class="grid_4 alpha">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis nec egestas quis, pharetra eget diam.
                                </div>
                                <div class="grid_4">
                                    Morbi lacus nibh, ornare in euismod id, vulputate at sem. Duis semper rhoncus enim, nec condimentum elit sagittis et.
                                </div>
                                <div class="grid_4 omega">
                                    Sed lacus nunc, gravida sed auctor vitae, faucibus ultrices erat. Vestibulum orci dui, eleifend vel sodales eu, bibendum id ipsum.
                                </div>
                            </section>
                            <section class="clearfix">
                                <header class="grid_12 alpha omega">
                                    <h2>Tab 2</h2>
                                </header>
                            </section>
                            <section class="clearfix">
                                <header class="grid_12 alpha omega">
                                    <h2>Tab 3</h2>
                                </header>
                            </section>
                            <section class="clearfix">
                                <header class="grid_12 alpha omega">
                                    <h2>Tab 4</h2>
                                </header>
                            </section>
                        </section>
                    </section>
                    
                    <div class="clear"></div>
                    
                    <section class="tabs side grid_12 leading">
                        <ul class="clearfix">
                            <li><a href="#">Overview</a></li>
                            <li><a href="#">Tab 2</a></li>
                            <li><a href="#">Tab 3</a></li>
                            <li><a href="#" title="This is a very very long tab title">This is a very very long tab title</a></li>
                        </ul>
                        <section>
                            <section class="clearfix">
                                <div class="grid_4 alpha">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis nec egestas quis, pharetra eget diam.
                                </div>
                                <div class="grid_4">
                                    Morbi lacus nibh, ornare in euismod id, vulputate at sem. Duis semper rhoncus enim, nec condimentum elit sagittis et.
                                </div>
                                <div class="grid_4 omega">
                                    Sed lacus nunc, gravida sed auctor vitae, faucibus ultrices erat. Vestibulum orci dui, eleifend vel sodales eu, bibendum id ipsum.
                                </div>
                            </section>
                            <section class="clearfix">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis nec egestas quis, pharetra eget diam.
                            </section>
                            <section class="clearfix">
                                Morbi lacus nibh, ornare in euismod id, vulputate at sem. Duis semper rhoncus enim, nec condimentum elit sagittis et.
                            </section>
                            <section class="clearfix">
                                Sed lacus nunc, gravida sed auctor vitae, faucibus ultrices erat. Vestibulum orci dui, eleifend vel sodales eu, bibendum id ipsum.
                            </section>
                        </section>
                    </section>
                    
                    <div class="clear"></div>
                    
                    <section class="accordion grid_12 leading">
                        <header>
                            <h2>This is an accordion</h2>
                        </header>
                        <section class="clearfix">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis nec egestas quis, pharetra eget diam. Aliquam sagittis mauris elit, nec pulvinar leo. Duis felis urna, cursus eget commodo sit amet, porttitor vitae est. Phasellus sit amet eros vitae odio eleifend congue ut et libero. Fusce quis dui vel sapien dapibus aliquet. Vestibulum velit tortor, aliquet vitae lacinia vitae, auctor ac dolor. Phasellus porttitor libero eu odio pretium porta. Proin nec sem ligula. Nunc tempus arcu vel urna fermentum aliquam. Nam ornare vehicula venenatis. Aenean molestie sollicitudin sodales. Cras eleifend velit sed diam sodales nec commodo risus facilisis. Proin consectetur ante non leo ultricies in volutpat justo tincidunt. Mauris scelerisque vehicula nisl eu suscipit. Cras dui erat, pellentesque quis consectetur quis, rhoncus eget ipsum. Cras suscipit fringilla aliquet. In hac habitasse platea dictumst.
                        </section>
                        <header>
                            <h2>3 Column Grid inside Accordion</h2>
                        </header>
                        <section class="clearfix">
                            <div class="grid_4 alpha">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis nec egestas quis, pharetra eget diam. Aliquam sagittis mauris elit, nec pulvinar leo.
                            </div>
                            <div class="grid_4">
                                Duis felis urna, cursus eget commodo sit amet, porttitor vitae est. Phasellus sit amet eros vitae odio eleifend congue ut et libero. Fusce quis dui vel sapien dapibus aliquet.
                            </div>
                            <div class="grid_4 omega">
                                Vestibulum velit tortor, aliquet vitae lacinia vitae, auctor ac dolor. Phasellus porttitor libero eu odio pretium porta. Proin nec sem ligula. Nunc tempus arcu vel urna fermentum aliquam.
                            </div>
                        </section>
                        <header>
                            <h2>Lorem ipsum dolor</h2>
                        </header>
                        <section class="clearfix">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis nec egestas quis, pharetra eget diam. Aliquam sagittis mauris elit, nec pulvinar leo. Duis felis urna, cursus eget commodo sit amet, porttitor vitae est. Phasellus sit amet eros vitae odio eleifend congue ut et libero. Fusce quis dui vel sapien dapibus aliquet. Vestibulum velit tortor, aliquet vitae lacinia vitae, auctor ac dolor. Phasellus porttitor libero eu odio pretium porta. Proin nec sem ligula. Nunc tempus arcu vel urna fermentum aliquam. Nam ornare vehicula venenatis. Aenean molestie sollicitudin sodales. Cras eleifend velit sed diam sodales nec commodo risus facilisis. Proin consectetur ante non leo ultricies in volutpat justo tincidunt. Mauris scelerisque vehicula nisl eu suscipit. Cras dui erat, pellentesque quis consectetur quis, rhoncus eget ipsum. Cras suscipit fringilla aliquet. In hac habitasse platea dictumst.
                        </section>
                        <header>
                            <h2>Lorem ipsum dolor</h2>
                        </header>
                        <section class="clearfix">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis nec egestas quis, pharetra eget diam. Aliquam sagittis mauris elit, nec pulvinar leo. Duis felis urna, cursus eget commodo sit amet, porttitor vitae est. Phasellus sit amet eros vitae odio eleifend congue ut et libero. Fusce quis dui vel sapien dapibus aliquet. Vestibulum velit tortor, aliquet vitae lacinia vitae, auctor ac dolor. Phasellus porttitor libero eu odio pretium porta. Proin nec sem ligula. Nunc tempus arcu vel urna fermentum aliquam. Nam ornare vehicula venenatis. Aenean molestie sollicitudin sodales. Cras eleifend velit sed diam sodales nec commodo risus facilisis. Proin consectetur ante non leo ultricies in volutpat justo tincidunt. Mauris scelerisque vehicula nisl eu suscipit. Cras dui erat, pellentesque quis consectetur quis, rhoncus eget ipsum. Cras suscipit fringilla aliquet. In hac habitasse platea dictumst.
                        </section>
                    </section>

                    <section class="portlet grid_12 leading">
                        <header>
                            <h2>3 Column Grid inside Portlet</h2>
                        </header>
                        <section class="clearfix">
                            <div class="grid_4 alpha">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis nec egestas quis, pharetra eget diam.
                            </div>
                            <div class="grid_4">
                                Morbi lacus nibh, ornare in euismod id, vulputate at sem. Duis semper rhoncus enim, nec condimentum elit sagittis et.
                            </div>
                            <div class="grid_4 omega">
                                Sed lacus nunc, gravida sed auctor vitae, faucibus ultrices erat. Vestibulum orci dui, eleifend vel sodales eu, bibendum id ipsum.
                            </div>
                        </section>
                    </section>
                    
                    <div class="clear"></div>
                    
                    <section class="portlet grid_6 leading">
                        <header>
                            <h2>Skinned Elements</h2>
                        </header>
                        <section>
                            <p><button>Simple Button</button></p>
                            <p><button type="submit">Submit Button</button></p>
                            <p><button type="reset">Reset Button</button></p>
                            <p><button disabled>Disabled Button</button></p>
                            <p><a href="#" class="button">Anchor Button</a></p>
                            <ul class="pagination clearfix">
                                <li><a href="#">First</a></li>
                                <li><a href="#">&laquo;</a></li>
                                <li class="current"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">&raquo;</a></li>
                                <li><a href="#">Last</a></li>
                            </ul><br/>
                            <p><select><option>Option 1</option><option>Option 2</option></select></p>
                            <p><input type="checkbox" checked /><input type="checkbox" /><input type="checkbox" disabled /></p>
                            <p><input type="radio" name="r1" checked /><input type="radio" name="r1" /><input type="radio" name="r1" disabled /></p>
                        </section>
                    </section>
                    
                    <section class="portlet grid_6 leading">
                        <header>
                            <h2>Notifications</h2>
                        </header>
                        <section>
                            <div class="message info"> 
                                <h3>Information</h3> 
                                <p> 
                                    This is an info message.
                                </p> 
                            </div> 
                            <div class="message success"> 
                                <h3>Success!</h3> 
                                <p> 
                                    This is a success message.
                                </p> 
                            </div> 
                            <div class="message warning"> 
                                <h3>Warning!</h3> 
                                <p> 
                                    This is a warning message.
                                </p> 
                            </div> 
                            <div class="message error"> 
                                <h3>Error!</h3> 
                                <p> 
                                    This is an error message.
                                </p> 
                            </div> 
                        </section>
                    </section>
                    
                    <div class="clear"></div>
                    
                    <section class="portlet grid_12 leading">
                        <header>
                            <h2>Header styles</h2>
                        </header>
                        <section>
                            <h1>Header 1</h1>
                            <h2>Header 2</h2>
                            <h3>Header 3</h3>
                            <h4>Header 4</h4>
                            <h5>Header 5</h5>
                            <h6>Header 6</h6>
                        </section>
                    </section>
                    
                    <div class="clear"></div>
                    
                    <section class="portlet grid_4 leading">
                        <header>
                            <h2>&lt;dl&gt;&lt;dt&gt;&lt;dd&gt;</h2>
                        </header>
                        <section>
                            <dl>
                                <dt>Lorem ipsum</dt> 
                                <dd>Lorem ipsum dolor sit amet.</dd> 
                                <dt>Lorem ipsum</dt> 
                                <dd>Lorem ipsum dolor sit amet.</dd> 
                                <dt>Lorem ipsum</dt> 
                                <dd>Lorem ipsum dolor sit amet.</dd> 
                            </dl> 
                        </section>
                    </section>
                    <section class="portlet grid_4 leading">
                        <header>
                            <h2>&lt;ol&gt;&lt;li&gt;</h2>
                        </header>
                        <section>
                            <ol class="nostyle"> 
                                <li>Lorem ipsum dolor sit amet</li> 
                                <li>Lorem ipsum dolor sit amet
                                    <ol> 
                                        <li>Lorem ipsum dolor sit amet</li> 
                                        <li>Lorem ipsum dolor sit amet
                                            <ol> 
                                                <li>Lorem ipsum dolor sit amet</li> 
                                                <li>Lorem ipsum dolor sit amet</li> 
                                            </ol> 
                                        </li> 
                                    </ol> 
                                </li> 
                            </ol> 
                        </section>
                    </section>
                    <section class="portlet grid_4 leading">
                        <header>
                            <h2>&lt;ul&gt;&lt;li&gt;</h2>
                        </header>
                        <section>
                            <ul class="nostyle"> 
                                <li>Lorem ipsum dolor sit amet</li> 
                                <li>Lorem ipsum dolor sit amet
                                    <ul> 
                                        <li>Lorem ipsum dolor sit amet</li> 
                                        <li>Lorem ipsum dolor sit amet
                                            <ul> 
                                                <li>Lorem ipsum dolor sit amet</li> 
                                                <li>Lorem ipsum dolor sit amet</li> 
                                            </ul> 
                                        </li> 
                                    </ul> 
                                </li> 
                            </ul> 
                        </section>
                    </section>
                </section>
                <!--- / Content End---->
               @include('admin.layout.footer')
            </section>

            <!-- Main Section End -->
        </section>
    </div>

  @include('admin.layout.footscripts')  
</body>
</html>