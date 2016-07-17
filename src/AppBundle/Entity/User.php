<?php
/**
 * Created by PhpStorm.
 * User: fjugalde
 * Date: 7/15/16
 * Time: 11:09 AM
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Traits\TimestampableTrait;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser {

    use TimestampableTrait;

    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

}