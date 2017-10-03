function empfehlung_func ($atts, $content = null) {
	
	extract( shortcode_atts ( array (
	'id1' => '9203',
	'id2' => '2',
	'id3' => '3',
	), $atts));
	$return_bla = '<div class="empf"><div class="empf1"><div class="empfimg"><a href="/index.php?p='.$id1.'">'.get_the_post_thumbnail($post = $id1, $size = 'medium').'</a></div><p class="empftitle"><a href="/index.php?p='.$id1.'">'.get_the_title($post = $id1).'</a></p><p class="empfexcerpt">'.get_the_excerpt($post = $id1).'</p></div>';
    $return_bla .= '<div class="empf1"><div class="empfimg"><a href="/index.php?p='.$id2.'">'.get_the_post_thumbnail($post = $id2, $size = 'medium').'</a></div><p class="empftitle"><a href="/index.php?p='.$id2.'">'.get_the_title($post = $id2).'</a></p><p class="empfexcerpt">'.get_the_excerpt($post = $id2).'</p></div>';
    $return_bla .= '<div class="empf1"><div class="empfimg"><a href="/index.php?p='.$id3.'">'.get_the_post_thumbnail($post = $id3, $size = 'medium').'</a></div><p class="empftitle"><a href="/index.php?p='.$id3.'">'.get_the_title($post = $id3).'</a></p><p class="empfexcerpt">'.get_the_excerpt($post = $id3).'</p></div></div>';
    return $return_bla;
    
    }
add_shortcode('empfehlung', 'empfehlung_func');