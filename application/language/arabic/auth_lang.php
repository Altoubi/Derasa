<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Author: Daniel Davis
*         @ourmaninjapan
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.09.2013
*
* Description:  English language file for Ion Auth example views
*
*/

// Errors
$lang['error_csrf'] = 'This form post did not pass our security checks.';

// Register
$lang['register_heading']         = 'تسجيل';
// Login
$lang['login_heading']         = 'دخول';
$lang['login_subheading']      = 'Please login with your email/username and password below.';
$lang['login_identity_label']  = 'رقم الهاتف :';
$lang['login_password_label']  = 'كلمة المرور:';
$lang['login_remember_label']  = 'تذكرني:';
$lang['login_submit_btn']      = 'تسجيل الدخول';
$lang['login_forgot_password'] = 'Forgot your password?';

// Index
$lang['index_heading']           = 'المستخدمين';
$lang['index_subheading']        = 'في الاسفل قائمة بمستخدمي الموقع .';
$lang['index_fname_th']          = 'الاسم الاول';
$lang['index_lname_th']          = 'Last Name';
$lang['index_email_th']          = 'البريد الالكتروني';
$lang['index_groups_th']         = 'المجموعات';
$lang['index_status_th']         = 'الحالة';
$lang['index_action_th']         = 'Action';
$lang['index_active_link']       = 'مفعل';
$lang['index_inactive_link']     = 'معطل';
$lang['index_create_user_link']  = ' مستخدم جديد';
$lang['index_create_group_link'] = ' مجموعة جديدة';

// Deactivate User
$lang['deactivate_heading']                  = 'تعطيل الحساب';
$lang['deactivate_subheading']               = 'هل أنت متأكد من تعطيل حساب المستخدم \'%s\'';
$lang['deactivate_confirm_y_label']          = 'نعم:';
$lang['deactivate_confirm_n_label']          = 'لا:';
$lang['deactivate_submit_btn']               = 'إرسال';
$lang['deactivate_validation_confirm_label'] = 'تأكيد';
$lang['deactivate_validation_user_id_label'] = 'المستخدم ID';

// Create User
$lang['create_user_heading']                           = 'إنشاء حساب جديد';
$lang['create_user_subheading']                        = 'Please enter the users information below.';
$lang['create_user_fname_label']                       = 'الإسم الكامل:';
$lang['create_user_lname_label']                       = 'Last Name:';
$lang['create_user_identity_label']                    = 'Identity:';
$lang['create_user_company_label']                     = 'Company Name:';
$lang['create_user_email_label']                       = 'البريد الالكتروني:';
$lang['create_user_phone_label']                       = 'رقم الهاتف:';
$lang['create_user_password_label']                    = 'كلمة المرور:';
$lang['create_user_password_confirm_label']            = 'Confirm Password:';
$lang['create_user_submit_btn']                        = 'انشاء الحساب';
$lang['create_user_validation_fname_label']            = 'First Name';
$lang['create_user_validation_lname_label']            = 'Last Name';
$lang['create_user_validation_identity_label']         = 'Identity';
$lang['create_user_validation_email_label']            = 'البريد الإلكتروني';
$lang['create_user_validation_phone_label']            = 'رقم الهاتف';
$lang['create_user_validation_company_label']          = 'إسم الشركة';
$lang['create_user_validation_password_label']         = 'كلمة المرور';
$lang['create_user_validation_password_confirm_label'] = 'نأكيد كلمة المرور';

// Edit User
$lang['edit_user_heading']                           = 'تحرير المستخدم';
$lang['edit_user_subheading']                        = 'Please enter the users information below.';
$lang['edit_user_fname_label']                       = 'First Name:';
$lang['edit_user_lname_label']                       = 'Last Name:';
$lang['edit_user_company_label']                     = 'Company Name:';
$lang['edit_user_email_label']                       = 'Email:';
$lang['edit_user_phone_label']                       = 'Phone:';
$lang['edit_user_password_label']                    = 'Password: (if changing password)';
$lang['edit_user_password_confirm_label']            = 'Confirm Password: (if changing password)';
$lang['edit_user_groups_heading']                    = 'Member of groups';
$lang['edit_user_submit_btn']                        = 'Save User';
$lang['edit_user_validation_fname_label']            = 'First Name';
$lang['edit_user_validation_lname_label']            = 'Last Name';
$lang['edit_user_validation_email_label']            = 'البريد الالكتروني';
$lang['edit_user_validation_phone_label']            = 'رقم الهاتف';
$lang['edit_user_validation_company_label']          = 'إسم الشركة';
$lang['edit_user_validation_groups_label']           = 'المجموعه';
$lang['edit_user_validation_password_label']         = 'كلمة المرور';
$lang['edit_user_validation_password_confirm_label'] = 'ناكيد كلمة المرور';

// Create Group
$lang['create_group_title']                  = 'إنشاء مجموعة جديدة';
$lang['create_group_heading']                = 'إنشاء مجموعة';
$lang['create_group_subheading']             = 'Please enter the group information below.';
$lang['create_group_name_label']             = 'إسم المجموعة:';
$lang['create_group_desc_label']             = 'وصف المجموعة:';
$lang['create_group_submit_btn']             = 'إنشاء المجموعة';
$lang['create_group_validation_name_label']  = 'إسم المجموعة';
$lang['create_group_validation_desc_label']  = ' الوصف';

// Edit Group
$lang['edit_group_title']                  = 'Edit Group';
$lang['edit_group_saved']                  = 'Group Saved';
$lang['edit_group_heading']                = 'Edit Group';
$lang['edit_group_subheading']             = 'Please enter the group information below.';
$lang['edit_group_name_label']             = 'Group Name:';
$lang['edit_group_desc_label']             = 'Description:';
$lang['edit_group_submit_btn']             = 'Save Group';
$lang['edit_group_validation_name_label']  = 'Group Name';
$lang['edit_group_validation_desc_label']  = 'Description';

// Change Password
$lang['change_password_heading']                               = 'Change Password';
$lang['change_password_old_password_label']                    = 'Old Password:';
$lang['change_password_new_password_label']                    = 'New Password (at least %s characters long):';
$lang['change_password_new_password_confirm_label']            = 'Confirm New Password:';
$lang['change_password_submit_btn']                            = 'Change';
$lang['change_password_validation_old_password_label']         = 'Old Password';
$lang['change_password_validation_new_password_label']         = 'New Password';
$lang['change_password_validation_new_password_confirm_label'] = 'Confirm New Password';

// Forgot Password
$lang['forgot_password_heading']                 = 'Forgot Password';
$lang['forgot_password_subheading']              = 'Please enter your %s so we can send you an email to reset your password.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'Submit';
$lang['forgot_password_validation_email_label']  = 'Email Address';
$lang['forgot_password_username_identity_label'] = 'Username';
$lang['forgot_password_email_identity_label']    = 'Email';
$lang['forgot_password_email_not_found']         = 'No record of that email address.';

// Reset Password
$lang['reset_password_heading']                               = 'Change Password';
$lang['reset_password_new_password_label']                    = 'New Password (at least %s characters long):';
$lang['reset_password_new_password_confirm_label']            = 'Confirm New Password:';
$lang['reset_password_submit_btn']                            = 'Change';
$lang['reset_password_validation_new_password_label']         = 'New Password';
$lang['reset_password_validation_new_password_confirm_label'] = 'Confirm New Password';

// Activation Email
$lang['email_activate_heading']    = 'Activate account for %s';
$lang['email_activate_subheading'] = 'Please click this link to %s.';
$lang['email_activate_link']       = 'Activate Your Account';

// Forgot Password Email
$lang['email_forgot_password_heading']    = 'Reset Password for %s';
$lang['email_forgot_password_subheading'] = 'Please click this link to %s.';
$lang['email_forgot_password_link']       = 'Reset Your Password';

// New Password Email
$lang['email_new_password_heading']    = 'New Password for %s';
$lang['email_new_password_subheading'] = 'Your password has been reset to: %s';

