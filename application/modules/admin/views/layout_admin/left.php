<div class="searchwidget">
        	<form action="results.html" method="post">
            	<div class="input-append">
                    <input type="text" class="span2 search-query" placeholder="Search here...">
                    <button type="submit" class="btn"><span class="icon-search"></span></button>
                </div>
            </form>
        </div><!--searchwidget--> 
 
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Main Navigation</li>
                <li class="active"><a href="dashboard.html"><span class="icon-align-justify"></span> Dashboard</a></li>
                <li><a href="media.html"><span class="icon-picture"></span>Media</a></li>
                <li class="dropdown"><a href=""><span class="icon-briefcase"></span> Thành Viên</a>
                	<ul>
                    	<li><a href="<?php echo site_url('admin/adminhome/addUser');?>">Thêm</a></li>
                        <li><a href="<?php echo site_url('admin/adminhome/magageUser');?>">Quản lý</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="icon-th-list"></span> Tables</a>
                	<ul>
                    	<li><a href="table-static.html">Static Table</a></li>
                        <li><a href="table-dynamic.html">Dynamic Table</a></li>
                    </ul>
                </li>
                <li><a href="typography.html"><span class="icon-font"></span> Typography</a></li>
                <li><a href="charts.html"><span class="icon-signal"></span> Graph &amp; Charts</a></li>
                <li><a href="messages.html"><span class="icon-envelope"></span> Messages</a></li>
                <li><a href="buttons.html"><span class="icon-hand-up"></span> Buttons &amp; Icons</a></li>
                <li class="dropdown"><a href=""><span class="icon-pencil"></span> Forms</a>
                	<ul>
                    	<li><a href="forms.html">Form Styles</a></li>
                        <li><a href="wizards.html">Wizard Form</a></li>
                        <li><a href="wysiwyg.html">WYSIWYG</a></li>
                    </ul>
                </li>
                <li><a href="calendar.html"><span class="icon-calendar"></span> Calendar</a></li>
                <li><a href="animations.html"><span class="icon-play"></span> Animations</a></li>
                <li class="dropdown"><a href=""><span class="icon-book"></span> Other Pages</a>
                	<ul>
                    	<li><a href="404.html">404 Error Page</a></li>
                        <li><a href="invoice.html">Invoice Page</a></li>
                        <li><a href="editprofile.html">Edit Profile</a></li>
                        <li><a href="grid.html">Grid Styles</a></li>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="stickyheader.html">Sticky Header Page</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--leftmenu-->