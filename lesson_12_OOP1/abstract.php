<?php
abstract class Friend {
    protected $id;
    protected $Name;

    public function SetID($id)
    {
                $this->id = $id;

    }

       public function SetName($name)
    {
        $this->Name = $name;

    }

    abstract public function SetDetail();

    abstract public function Display();
}
class Familyfriend extends Friend {

    protected $Relation;

    public function SetDetail() {
        $this->Relation = "Father";
    }

    public function Display() {
        print("DISPLAYING VALUES for Family Friend<br>");
        print("Id is: $this->id <br>");
        print("Name is: $this->Name <br>");
        print("Relation is: $this->Relation<br>");
    }

}

class CollegeFriend extends Friend {

    protected $CollegeName;

    public function SetDetail() {

      
        $this->CollegeName = "Carmel College";

    }

    public function Display() {
        print("DISPLAYING VALUES for College Friend<br>");
        print("Id is: $this->id <br>");
        print("Name is: $this->Name <br>");
        print("College Name is: $this->CollegeName<br>");
    }

}

$FamliyFriend1 = new Familyfriend();
$FamliyFriend1->SetID("22345");
$FamliyFriend1->SetName("Peter");
$FamliyFriend1->SetDetail();

$FamliyFriend1->Display();
$CollegeFriend1 = new CollegeFriend();

$CollegeFriend1->SetID("4325432");

$CollegeFriend1->SetName("Smith");
$CollegeFriend1->SetDetail();

$CollegeFriend1->Display();
?>
