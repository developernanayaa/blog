<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="text-muted menu-title">Navigation</li>

                <li class="has_sub">
                    <a href="{{url(route('article.index'))}}" class="waves-effect"><i class="fa fa-home"></i> <span> Home </span> </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-newspaper-o"></i> <span> Articles </span> <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="{{url(route('article.create'))}}">Create new</a></li>
                        <li><a href="{{url(route('article.index'))}}">View All Articles</a></li>
                        <li><a href="/myarticles">My articles</a></li>

                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-comments"></i> <span> Comment </span> <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="">View Comments</a></li>


                    </ul>
                </li>



            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>

    </div>
</div>
<!-- Left Sidebar End -->
