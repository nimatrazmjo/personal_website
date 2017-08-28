<?php

namespace Resume\ResumeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocialProfile
 *
 * @ORM\Table(name="social_profile")
 * @ORM\Entity(repositoryClass="Resume\ResumeBundle\Repository\SocialProfileRepository")
 */
class SocialProfile
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
     * @var string
     *
     * @ORM\Column(name="network", type="string", length=255)
     */
    private $network;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


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
     * Set network
     *
     * @param string $network
     *
     * @return SocialProfile
     */
    public function setNetwork($network)
    {
        $this->network = $network;

        return $this;
    }

    /**
     * Get network
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return SocialProfile
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}

