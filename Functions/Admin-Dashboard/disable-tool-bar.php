<?php // Disable Tool Bar

/* Disable WordPress Admin Bar for all users but admins. */
if (!current_user_can('administrator')):
  show_admin_bar(false);
endif;

/* Disable WordPress Admin Bar for all users. */
  show_admin_bar(false);
