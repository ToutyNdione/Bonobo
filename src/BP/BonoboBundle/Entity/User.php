<?php

namespace BP\BonoboBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
//use BP\BonoboBundle\Entity\User;
use Doctrine\Common\Collections\Collection;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="BP\BonoboBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    protected $age;

    /**
     * @var string
     *
     * @ORM\Column(name="famille", type="string", length=255)
     */
    protected $famille;

    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=255)
     */
    protected $race;

    /**
     * @var string
     *
     * @ORM\Column(name="nourriture", type="string", length=255)
     */
    protected $nourriture;

    /**
     * @ORM\ManyToMany(targetEntity="User")
     @ORM\JoinTable(name="friend",
     *     joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="friend_id", referencedColumnName="id")}
     * )
     **/
    private $myFriends;

    private $user;


    public function __construct() {
        parent::__construct();        
       // $this->friendsWithMe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->myFriends = new \Doctrine\Common\Collections\ArrayCollection();
    }

   
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set famille
     *
     * @param string $famille
     *
     * @return User
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set race
     *
     * @param string $race
     *
     * @return User
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set nourriture
     *
     * @param string $nourriture
     *
     * @return User
     */
    public function setNourriture($nourriture)
    {
        $this->nourriture = $nourriture;

        return $this;
    }

    /**
     * Get nourriture
     *
     * @return string
     */
    public function getNourriture()
    {
        return $this->nourriture;
    }



    /**
     * Add myFriend
     *
     * @param \BP\BonoboBundle\Entity\User $myFriend
     *
     * @return User
     */
    public function addMyFriend(\BP\BonoboBundle\Entity\User $myFriend)
    {
         $this->myFriends[] = $myFriend;        
         return $this;
        // if (!$this->myFriends->contains($myFriend)) {
        //     $this->myFriends->add($myFriend);
        //     $user->addFriend($this);
        // }
    }

    /**
     * Remove myFriend
     *
     * @param \BP\BonoboBundle\Entity\User $myFriend
     */
    public function removeMyFriend(\BP\BonoboBundle\Entity\User $myFriend)
    {
        $this->myFriends->removeElement($myFriend);
    }

       public function getMyFriends()
    {
        return $this->myFriends;
    }

    public function setMyFriends(Collection $friend)
    {

        return $this->myFriends;
    }


  public function getUser()
    {
        return $this->user;
    }
    public function __toString()
    {
        return (string) $this->getMyFriends();
    }
}
