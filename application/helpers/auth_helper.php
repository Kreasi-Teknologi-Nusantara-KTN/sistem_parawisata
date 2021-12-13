<?php

function is_login_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('login');
    } else {
        $role = $ci->session->userdata('role');
    }
}
