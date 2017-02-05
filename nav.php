

<ul class="navigation">
    <li><a href="index.php"<?php add_tag_if_cur("home",$cur_pg);?>>Home</a></li>
    <li><a href="schedule.php"<?php add_tag_if_cur("schedule",$cur_pg);?>>Schedule</a></li>
    <li><a href="arrowhead.php"<?php add_tag_if_cur("arrowhead",$cur_pg);?>>Arrowhead</a></li>
    <li><a href="external-links.php"<?php add_tag_if_cur("links",$cur_pg);?>>Links</a></li>
</ul>

<?php
    function add_tag_if_cur($link_to,$cur_pg) {
        if($link_to == $cur_pg) {
            print ' class = "cur_nav"';
        }
    }

?>