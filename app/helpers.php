<?php

function errors_for($attribute, $errors)
{
	return $errors->first($attribute, '<br><div class="alert alert-danger">:message</div>');
}

// function link_to_profile($text = 'Profile')
// {
//     return link_to_route('profile', $text, Auth::user()->username);
// }
