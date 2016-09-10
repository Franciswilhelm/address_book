<?php
    class Contact
    {
        public $name;
        public $number;
        public $address;

        function __construct($friend_name, $phone_number, $friend_address)
        {
            $this->name = $friend_name;
            $this->number = $phone_number;
            $this->address = $friend_address;
        }

        function setName($new_name)
        {
            $this->name = $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setNumber($new_number)
        {
            $this->number = $new_number;
        }

        function getNumber()
        {
            return $this->number;
        }

        function setAddress($new_address)
        {
            $this->address = $new_address;
        }

        function getAddress()
        {
            return $this->address;
        }
      }
    ?>
