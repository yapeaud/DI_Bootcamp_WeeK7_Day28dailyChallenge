<?php
class User {
  private $name;
  private $age;

  public function setName($name) {
    // Trim the white spaces
    $name = trim($name);
    if (strlen($name)<3) {
      throw new Exception("The name should be at least 3 characters long");
    }
    $this -> name = $name;
  }

  public function setAge($age) {
    // Cast into an integer type
    $age = (int)$age;
    if ($age <= 0) {
      throw new Exception("The age cannot be zero or less");
    }
    $this -> age = $age;
  }

  public function getName() {
    return $this -> name;
  }

  public function getAge() {
    return $this -> age;
  }
}

function test()
{
  // Test code here
  $dataForUsers = array(
    array("Ben",4),
    array("Eva",28),
    array("li",29),
    array("Catie","not yet born"),
    array("Sue",1.5)
);

foreach ($dataForUsers as $data) {
  $user = new User();
  try {
    $user->setName($data[0]);
    $user->setAge($data[1]);
    echo $user->getName() . " is " . $user->getAge() . " years old." . PHP_EOL;
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage() . " in the file: " . $e->getFile() . PHP_EOL;
  }
}
}
test();
?>
