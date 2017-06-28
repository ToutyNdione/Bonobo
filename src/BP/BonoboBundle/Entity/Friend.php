<?php

namespace BP\BonoboBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BP\BonoboBundle\Entity\User;


/**
 * Friend
 *
 * @ORM\Table(name="friend")
 * @ORM\Entity(repositoryClass="BP\BonoboBundle\Repository\FriendRepository")
 */
class Friend
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="myFriends")
     **/
    private $friendsWithMe;

    /**
     * @ORM\ManyToMany(targetEntity="User", inversedBy="friendsWithMe")
     * @ORM\JoinTable(name="friend",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="friend_user_id", referencedColumnName="id")}
     *      )
     **/
    private $myFriends;

     public function __construct() {
           // parent::__construct();        
            $this->friendsWithMe = new \Doctrine\Common\Collections\ArrayCollection();
            $this->myFriends = new \Doctrine\Common\Collections\ArrayCollection();
        }

    

    /**
     * Add friendsWithMe
     *
     * @param \BP\BonoboBundle\Entity\User $friendsWithMe
     *
     * @return Friend
     */
    public function addFriendsWithMe(\BP\BonoboBundle\Entity\User $friendsWithMe)
    {
        $this->friendsWithMe[] = $friendsWithMe;

        return $this;
    }

    /**
     * Remove friendsWithMe
     *
     * @param \BP\BonoboBundle\Entity\User $friendsWithMe
     */
    public function removeFriendsWithMe(\BP\BonoboBundle\Entity\User $friendsWithMe)
    {
        $this->friendsWithMe->removeElement($friendsWithMe);
    }

    /**
     * Get friendsWithMe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFriendsWithMe()
    {
        return $this->friendsWithMe;
    }

    /**
     * Get myFriends
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMyFriends()
    {
        return $this->myFriends;
    }
}
