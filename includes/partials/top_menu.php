<ul class="nav navbar-nav pull-right">

    <!-- BEGIN NOTIFICATION DROPDOWN -->
    <li class="dropdown" id="header_notification_bar">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <i class="fa fa-warning"></i>
            <span class="badge">6</span>
        </a>
        <?php include_once( BASE_INCLUDES . '/partials/top_menu/notifications.php'); ?>
    </li>
    <!-- END NOTIFICATION DROPDOWN -->

    <!-- BEGIN INBOX DROPDOWN -->
    <li class="dropdown" id="header_inbox_bar">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <i class="fa fa-envelope"></i>
            <span class="badge">
                5
            </span>
        </a>
        <?php include_once( BASE_INCLUDES . '/partials/top_menu/inbox.php'); ?>
    </li>
    <!-- END INBOX DROPDOWN -->

    <!-- BEGIN TODO DROPDOWN -->
    <li class="dropdown" id="header_task_bar">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <i class="fa fa-tasks"></i>
            <span class="badge">
                5
            </span>
        </a>
        <?php include_once( BASE_INCLUDES . '/partials/top_menu/tasks.php'); ?>
    </li>
    <!-- END TODO DROPDOWN -->
     
    <!-- BEGIN USER LOGIN DROPDOWN -->
    <li class="dropdown user">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <img alt="" src="<?=BASE_ASSETS?>/img/avatar1_small.jpg"/>
            <span class="username">
                Estágiário
            </span>
            <i class="fa fa-angle-down"></i>
        </a>
        <?php include_once( BASE_INCLUDES . '/partials/top_menu/user-login.php'); ?>
    </li>
    <!-- END USER LOGIN DROPDOWN -->

</ul>