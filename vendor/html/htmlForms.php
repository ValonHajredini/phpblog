<?php

/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/20/2016
 * Time: 5:30 PM
 */
class htmlForms
{
    public function Form(array $attributes){
        $output = "<form ";
        foreach ($attributes as $attr=>$value):
            $output .= $attr.'="'.$value.'"';
        endforeach;
        $output .= ">";
        echo $output;
    }
    public function endForm(){
        echo '</form>';
    }


    public function submitField(array $attributes){
        $output = '<input type="submit" ';
        foreach ($attributes as $key=>$value):
            $output .= $key.'="'.$value.'"';
        endforeach;
        $output .=">";
        echo $output;
    }
    /**  Input field => text;   */
   public function textField($name=null,$class=null, $value=null, array $other_attr=null, $id=null)
    {
        $id         = !is_null($id)         ? 'id="' . $id . '"'        : 'id="' . $name . '_field"';
        $name       = !is_null($name)       ? 'name="' . $name . '"'    : null;
        $class      = !is_null($class)      ? 'class="' . $class . '"'  : null;
        $value      = !is_null($value)      ? 'value="' . $value . '"'  : null;
        $other_attr = !is_null($other_attr) ? $other_attr               : null;
        $output = '<input type="text" ' . $name . ' ' . $class . ' ' . $id . ' ' . $value . ' ';
        if ($other_attr != null):
            foreach ($other_attr as $attr => $value):
                $output .= ' ' . $attr . '="' . $value . '" ';
            endforeach;
        endif;
        $output .= ">";
        echo $output;
    }
    /**  Input field => email;   */
    public function emailField($name=null,$class=null, $value=null, array $other_attr=null, $id=null)
    {
        $id         = !is_null($id)         ? 'id="' . $id . '"'        : 'id="' . $name . '_field"';
        $name       = !is_null($name)       ? 'name="' . $name . '"'    : null;
        $class      = !is_null($class)      ? 'class="' . $class . '"'  : null;
        $value      = !is_null($value)      ? 'value="' . $value . '"'  : null;
        $other_attr = !is_null($other_attr) ? $other_attr               : null;
        $output = '<input type="text" ' . $name . ' ' . $class . ' ' . $id . ' ' . $value . ' ';
        if ($other_attr != null):
            foreach ($other_attr as $attr => $value):
                $output .= ' ' . $attr . '="' . $value . '" ';
            endforeach;
        endif;
        $output .= ">";
        echo $output;
    }
    /**  Input field => email;   */
    public function passwordField($name=null,$class=null, $value=null, array $other_attr=null, $id=null)
    {
        $id         = !is_null($id)         ? 'id="' . $id . '"'        : 'id="' . $name . '_field"';
        $name       = !is_null($name)       ? 'name="' . $name . '"'    : null;
        $class      = !is_null($class)      ? 'class="' . $class . '"'  : null;
        $value      = !is_null($value)      ? 'value="' . $value . '"'  : null;
        $other_attr = !is_null($other_attr) ? $other_attr               : null;
        $output = '<input type="password" ' . $name . ' ' . $class . ' ' . $id . ' ' . $value . ' ';
        if ($other_attr != null):
            foreach ($other_attr as $attr => $value):
                $output .= ' ' . $attr . '="' . $value . '" ';
            endforeach;
        endif;
        $output .= ">";
        echo $output;
    }

}
//    public function form
// <form action="incloudes.php" method="post">
//      <input type="text" id="id_email" class="email_class">
//      <input type="text" id="id_txt" class="password_class">
//      <input type="submit" value="save">
// </form>




