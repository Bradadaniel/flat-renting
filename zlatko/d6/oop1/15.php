<?php
declare(strict_types=1);

class Form
{
    private $name;
    private $method;
    private $action;
    private $enctype;
    private $id;
    private $class;

    public function __construct(string $name, string $method, string $action, string $id = "", string $class="", string $enctype = "")
    {
        $this->name = $name;
        $this->method = $method;
        $this->action = $action;
        $this->enctype = $enctype;
        $this->class = $class;
        $this->id = $id;
    }

    public function renderStart():string
    {

        $form = '<form method="' . $this->method . '" name="' . $this->name . '"  ';
        if (!empty($this->enctype))
            $form .= 'enctype="' . $this->enctype . '" ';
        if (!empty($this->action))
            $form .= 'action="' . $this->action . '" ';
        if (!empty($this->id))
            $form .= 'id="' . $this->id . '" ';
        if (!empty($this->class))
            $form .= 'class="' . $this->class . '" ';

        $form .= ">\n";
        return $form;
    }

    public function renderEnd():string
    {
        $form = "</form>\n";
        return $form;
    }
}

class Field
{
    public $name;
    public $size;
    public $id;
    public $value;
    public $type;
    public $label;

    public function __construct(string $name, string $type, string $value = "", string $id = "", string $size = "", string $label = "")
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->id = $id;
        $this->size = $size;
        $this->label = $label;
    }

    public function render():string
    {
        $field = "";

        if (!empty($this->label)) {
            if (!empty($this->id))
                $field .= '<label for="' . $this->id . '">' . $this->label . ': </label>'."\n";
            else
                $field .= '<label>' . $this->label . ': </label>'."\n";
        }


        $field .= '<input type="' . $this->type . '" ';

        if (!empty($this->value))
            $field .= 'value="' . $this->value . '" ';

        if (!empty($this->size))
            $field .= 'size="' . $this->size . '" ';

        if (!empty($this->id))
            $field .= 'id="' . $this->id . '" ';

        $field .= ' name="' . $this->name . '"> ' . "<br>\n\n";
        return $field;
    }
}

$submit = new Field("submit", "submit", "send");
$reset = new Field("reset", "reset", "cancel");

$email = new Field("email", "email", "", "email2", "", "email");
$name = new Field("name", "text", "", "", "", "name");
$city = new Field("city", "text", "Subotica", "", "24", "city");
$password = new Field("password", "password", "", "password", "", "password");
$file = new Field("image", "file");

$forma = new Form("test", "post", "2.php","first","form-inline");

echo $forma->renderStart();
echo $email->render();
echo $name->render();
echo $password->render();
echo $city->render();
echo $file->render();
echo $submit->render();
echo $reset->render();
echo $forma->renderEnd();


$forma2 = new Form("test2", "get", "3.php");
echo $forma2->renderStart();
echo $email->render();
echo $name->render();
echo $city->render();
echo $submit->render();
echo $reset->render();
echo $forma2->renderEnd();

?>

