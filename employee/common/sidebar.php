<?php
$current_page = basename($_SERVER['PHP_SELF']);
$profile_pic = $_SESSION['profile_pic'] ;
?>
<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="clinicdropdown">
<a href="index.php">
<img src="../php/<?=$profile_pic?>" class="img-fluid" alt="Profile">
<div class="user-names">
<h5>Employee Panel</h5>
<h6><?php 
$User_name = $_SESSION['name'];
echo $User_name;
 ?></h6>
</div>
</a>
</li>
</ul>
<ul>
<li>
<h6 class="submenu-hdr">Panel Managements</h6>
<ul>
<li class="submenu">
<a href="javascript:void(0);" class="subdrop">
<i class="ti ti-layout-2"></i><span>Panels</span><span class="menu-arrow"></span>
</a>
<ul>
<!-- <li><a href="create-panel.php" class="active">Create Panel</a></li> -->
<!-- <li><a href="project-dashboard.html">employee List</a></li>
<li><a href="project-dashboard.html">Sales List</a></li> -->
</ul>
</li>
<!-- <li class="submenu">
<a href="javascript:void(0);"><i class="ti ti-brand-airtable"></i><span>Application</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="chat.html">Chat</a></li>
<li class="submenu submenu-two">
<a href="javascript:void(0);">Call<span class="menu-arrow inside-submenu"></span></a>
<ul>
<li><a href="video-call.html">Video Call</a></li>
<li><a href="audio-call.html">Audio Call</a></li>
<li><a href="call-history.html">Call History</a></li>
</ul>
</li>
<li><a href="calendar.html">Calendar</a></li>
<li><a href="email.html">Email</a></li>
<li><a href="todo.html">To Do</a></li>
<li><a href="notes.html">Notes</a></li>
<li><a href="file-manager.html">File Manager</a></li>
</ul>
</li> -->
</ul>
</li>
<li>
<h6 class="submenu-hdr">CRM</h6>
<ul>
<!-- <li>
<a href="contacts.php"><i class="ti ti-user-up"></i><span>Contacts</span></a>
</li> -->
<!-- <li>
<a href="companies.html"><i class="ti ti-building-community"></i><span>Companies</span></a>
</li> -->
<!-- <li>
<a href="deals.html"><i class="ti ti-medal"></i><span>Deals</span></a>
</li> -->
<!-- <li>
<a href="leads.php"><i class="ti ti-chart-arcs"></i><span>Leads</span></a>
</li>
 -->
<!-- <li>
<a href="client.php"><i class="ti ti-brand-campaignmonitor"></i><span>Add Client</span></a>
</li> -->
<!-- <li>
<a href="project.php"><i class="ti ti-atom-2"></i><span>Projects</span></a>
</li> -->
<li>
<a href="task.php" class="<?php echo ($current_page == 'task.php') ? 'active' : ''; ?>"><i class="ti ti-list-check"></i><span>Tasks</span></a>
</li>
<li>
<a href="task-by-projects.php" class="<?php echo ($current_page == 'task-by-projects.php') ? 'active' : ''; ?>"><i class="ti ti-list-check"></i><span>Tasks By Projects</span></a>
</li>
<li><a href="my-task.php" class="<?php echo ($current_page == 'my-task.php') ? 'active' : ''; ?>"><i class="ti ti-navigation-cog"></i><span>My Task</span></a></li>
<!--
<li>
<a href="proposals.html"><i class="ti ti-file-star"></i><span>Proposals</span></a>
</li>
<li>
<a href="contracts.html"><i class="ti ti-file-check"></i><span>Contracts</span></a>
</li>
<li>
<a href="estimations.html"><i class="ti ti-file-report"></i><span>Estimations</span></a>
</li>
<li>
<a href="invoices.html"><i class="ti ti-file-invoice"></i><span>Invoices</span></a>
</li>
<li>
<a href="payments.html"><i class="ti ti-report-money"></i><span>Payments</span></a>
</li>
<li>
<a href="analytics.html"><i class="ti ti-chart-bar"></i><span>Analytics</span></a>
</li>
<li>
<a href="activities.html"><i class="ti ti-bounce-right"></i><span>Activities</span></a>
</li>
</ul> -->
</li>
<!-- <li>
<h6 class="submenu-hdr">Reports</h6>
<ul>
<li class="submenu">
<a href="javascript:void(0);">
<i class="ti ti-file-invoice"></i><span>Reports</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="lead-reports.html">Lead Reports</a></li>
<li><a href="deal-reports.html">Deal Reports</a></li>
<li><a href="contact-reports.html">Contact Reports</a></li>
<li><a href="company-reports.html">Company Reports</a></li>
<li><a href="project-reports.html">Project Reports</a></li>
<li><a href="task-reports.html">Task Reports</a></li>
</ul>
</li>
</ul>
</li>
<li>
<h6 class="submenu-hdr">CRM Settings</h6>
<ul>
<li><a href="sources.html"><i class="ti ti-artboard"></i><span>Sources</span></a></li>
<li><a href="lost-reason.html"><i class="ti ti-message-exclamation"></i><span>Lost Reason</span></a></li>
<li><a href="contact-stage.html"><i class="ti ti-steam"></i><span>Contact Stage</span></a></li>
<li><a href="industry.html"><i class="ti ti-building-factory"></i><span>Industry</span></a></li>
<li><a href="calls.html"><i class="ti ti-phone-check"></i><span>Calls</span></a></li>
</ul>
</li>
<li>
<h6 class="submenu-hdr">User Management</h6>
<ul>
<li><a href="manage-users.html"><i class="ti ti-users"></i><span>Manage Users</span></a></li>
<li><a href="roles-permissions.html"><i class="ti ti-navigation-cog"></i><span>Roles & Permissions</span></a></li>
<li><a href="delete-request.html"><i class="ti ti-flag-question"></i><span>Delete Request</span></a></li>
</ul>
</li>
<li>
<h6 class="submenu-hdr">Membership</h6>
<ul>
<li class="submenu">
<a href="javascript:void(0);">
<i class="ti ti-file-invoice"></i><span>Membership</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="membership-plans.html">Membership Plans</a></li>
<li><a href="membership-addons.html">Membership Addons</a></li>
<li><a href="membership-transactions.html">Transactions</a></li>
</ul>
</li>
</ul>
</li>
<li>
<h6 class="submenu-hdr">Content</h6>
<ul>
<li><a href="pages.html"><i class="ti ti-page-break"></i><span>Pages</span></a></li>
<li class="submenu">
<a href="javascript:void(0);">
<i class="ti ti-map-pin-pin"></i><span>Location</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="countries.html">Countries</a></li>
<li><a href="states.html">States</a></li>
<li><a href="cities.html">Cities</a></li>
</ul>
</li>
<li><a href="testimonials.html"><i class="ti ti-quote"></i><span>Testimonials</span></a></li>
<li><a href="faq.html"><i class="ti ti-question-mark"></i><span>FAQ</span></a></li>
</ul>
</li>
<li>
<h6 class="submenu-hdr">Support</h6>
<ul>
<li><a href="contact-messages.html"><i class="ti ti-page-break"></i><span>Contact Messages</span></a></li>
<li><a href="tickets.html"><i class="ti ti-ticket"></i><span>Tickets</span></a></li>
</ul>
</li>
<li>
<h6 class="submenu-hdr">Settings</h6>
<ul>
<li class="submenu">
<a href="javascript:void(0);">
<i class="ti ti-settings-cog"></i><span>General Settings</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="profile.html">Profile</a></li>
<li><a href="security.html">Security</a></li>
<li><a href="notifications.html">Notifications</a></li>
<li><a href="connected-apps.html">Connected Apps</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);">
<i class="ti ti-world-cog"></i><span>Website Settings</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="company-settings.html">Company Settings</a></li>
<li><a href="localization.html">Localization</a></li>
<li><a href="prefixes.html">Prefixes</a></li>
<li><a href="preference.html">Preference</a></li>
<li><a href="appearance.html">Appearance</a></li>
<li><a href="language.html">Language</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);">
<i class="ti ti-apps"></i><span>App Settings</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="invoice-settings.html">Invoice Settings</a></li>
<li><a href="printers.html">Printers</a></li>
<li><a href="custom-fields.html">Custom Fields</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);">
<i class="ti ti-device-laptop"></i><span>System Settings</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="email-settings.html">Email Settings</a></li>
<li><a href="sms-gateways.html">SMS Gateways</a></li>
<li><a href="gdpr-cookies.html">GDPR Cookies</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);">
<i class="ti ti-moneybag"></i><span>Financial Settings</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="payment-gateways.html">Payment Gateways</a></li>
<li><a href="bank-accounts.html">Bank Accounts</a></li>
<li><a href="tax-rates.html">Tax Rates</a></li>
<li><a href="currencies.html">Currencies</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);">
<i class="ti ti-flag-cog"></i><span>Other Settings</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="storage.html">Storage</a></li>
<li><a href="ban-ip-address.html">Ban IP Address</a></li>
</ul>
</li>
</ul>
</li>
<li>
<h6 class="submenu-hdr">Pages</h6>
<ul>
<li class="submenu">
<a href="javascript:void(0);">
<i class="ti ti-lock-square-rounded"></i><span>Authentication</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="login.html">Login</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="forgot-password.html">Forgot Password</a></li>
<li><a href="reset-password.html">Reset Password</a></li>
<li><a href="email-verification.html">Email Verification</a></li>
<li><a href="two-step-verification.html">2 Step Verification</a></li>
<li><a href="lock-screen.html">Lock Screen</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);">
<i class="ti ti-error-404"></i><span>Error Pages</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="error-404.html">404 Error</a></li>
<li><a href="error-500.html">500 Error</a></li>
</ul>
</li>
<li><a href="blank-page.html"><i class="ti ti-apps"></i><span>Blank Page</span></a></li>
<li><a href="coming-soon.html"><i class="ti ti-device-laptop"></i><span>Coming Soon</span></a></li>
<li><a href="under-maintenance.html"><i class="ti ti-moneybag"></i><span>Under Maintenance</span></a></li>
</ul>
</li>
<li>
</li> -->
</ul>
</div>
</div>
</div>