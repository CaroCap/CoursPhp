<?php
include_once "./class/Animal.class.php";

class Chat extends Animal {

    public function AfficherChat(){
        echo "Je suis un Chat et je fais Miaouuuu";
        echo('<img width="500" src="https://cdn.futura-sciences.com/buildsv6/images/largeoriginal/a/0/f/a0fc73919d_50166390_chaton.jpg" alt="chaton">');
    }

}