<li><span class="text-muted"><i class="fa-fw fa fa-chevron-right small"></i></span><?php echo $this->Html->link(sprintf(__l('%s - Pending For Approval'), Configure::read('project.alt_name_for_donate_singular_caps')) . ' (' . $donate_pending_for_approval_count. ')', array('controller' => 'donates', 'action' => 'index', 'project_status_id' => ConstDonateProjectStatus::PendingAction), array('class' => 'h5 rgt-move'));?> </li>