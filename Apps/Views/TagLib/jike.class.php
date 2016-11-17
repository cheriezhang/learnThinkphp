<?php
    namespace Views\TagLib;
    use Think\Template\TagLib;

    class jike extends TagLib
    {
//        定义标签列表
        protected $tags = array(
            'friends' => array(
                        'attr' => 'uid',
                        'close' => 1
            )
        );

        public function _friends($tag, $content)
        {
            $id = $tag['uid'];
            $name = $tag['name'];
            $empty = $tag['empty'];
            $unique = rand();

            $parse_string="hello";
//            $parse_string = '<?php';
//            $parse_string .= '$friends = get_user_friends('.$id.');';
//            $parse_string .='if(empty($friends)){echo $empty;}';
//            $parse_string .='else';
//            $parse_string .='{';
//            $parse_string .='foreach ($friends as $key => $'.$name.'){';


            return $parse_string;
        }
    }
?>


