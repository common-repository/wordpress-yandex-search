<?php
/*
Plugin Name: Wordpress Yandex Search
Plugin URI: http://antair.org.ua
Description: Adds Yandex search form widget to you blog,
Version: 1.0
Author: antair
Author URI: http://antair.org.ua
*/

/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function wp_yandex_widget() {
?>
<h2 class="widgettitle">Yandex Search</h2>
<input type="text" id="q" size="10"/>
<button onclick="javascript: self.parent.location = 'http://yandex.ru/yandsearch?text=' + document.getElementById('q').value + '&lr=187';">Search!</button>
<?php
}
function wp_yandex_init()
{
register_sidebar_widget(__('Yandex search!'), 'wp_yandex_widget');
}
add_action("plugins_loaded", "wp_yandex_init");
?>