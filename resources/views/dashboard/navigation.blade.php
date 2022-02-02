<nav id="left-sidebar-nav" class="sidebar-nav">
    <ul class="metismenu">
        <li class="g_heading">Project</li>
        <li class="{{Request::is('home')?'active':''}}"><a href="/home"><i class="fa fa-columns"></i><span>Dashboard</span></a></li>
        <li class="{{Request::is('dashboard/category')?'active':''}}"><a href="{{route('dashboard.category')}}"><i class="fa fa-layer-group"></i><span>Categories</span></a></li>                        
       <li class="{{Request::is('dashboard/blog')?'active':''}}"><a href="{{route('dashboard.blog')}}"><i class="fa fa-blog"></i><span>Blogs</span></a></li>
       <!-- <li><a href="project-taskboard.html"><i class="fa fa-calendar-check-o"></i><span>Taskboard</span></a></li>
        <li><a href="project-ticket.html"><i class="fa fa-list-ul"></i><span>Ticket List</span></a></li>
        <li><a href="project-ticket-details.html"><i class="icon-tag"></i><span>Ticket Details</span></a></li>
        <li><a href="project-clients.html"><i class="fa fa-user"></i><span>Clients</span></a></li>
        <li><a href="project-todo.html"><i class="fa fa-check-square-o"></i><span>Todo List</span></a></li>
        <li class="g_heading">App</li>
        <li><a href="app-calendar.html"><i class="fa fa-calendar"></i><span>Calendar</span></a></li>
        <li><a href="app-chat.html"><i class="fa fa-comments"></i><span>Chat</span></a></li>
        <li><a href="app-contact.html"><i class="fa fa-address-book"></i><span>Contact</span></a></li>
        <li><a href="app-filemanager.html"><i class="fa fa-folder"></i><span>FileManager</span></a></li>
        <li><a href="app-setting.html"><i class="fa fa-gear"></i><span>Setting</span></a></li>
        <li><a href="page-gallery.html"><i class="fa fa-photo"></i><span>Gallery</span></a></li> 
        <li>
            <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-lock"></i><span>Authentication</span></a>
            <ul>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="forgot-password.html">Forgot password</a></li>
                <li><a href="404.html">404 error</a></li>
                <li><a href="500.html">500 error</a></li>   
            </ul>
        </li> 
        <li class="g_heading">Support</li>
        <li><a href="javascript:void(0)"><i class="fa fa-support"></i><span>Need Help?</span></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-tag"></i><span>ContactUs</span></a></li>-->
    </ul>
</nav> 