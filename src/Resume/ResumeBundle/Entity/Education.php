<?php

namespace Resume\ResumeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Education
 *
 * @ORM\Table(name="education")
 * @ORM\Entity(repositoryClass="Resume\ResumeBundle\Repository\EducationRepository")
 */
class Education
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
     * @ORM\Column(name="institute", type="string", length=255)
     */
    private $institute;

    /**
     * @var string
     *
     * @ORM\Column(name="area", type="string", length=255)
     */
    private $area;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime")
     */
    private $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="string", length=255)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="gpa", type="string", length=255)
     */
    private $gpa;

    /**
     * @var int
     *
     * @ORM\Column(name="resume_id", type="integer")
     */
    private $resumeId;


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
     * Set institute
     *
     * @param string $institute
     *
     * @return Education
     */
    public function setInstitute($institute)
    {
        $this->institute = $institute;

        return $this;
    }

    /**
     * Get institute
     *
     * @return string
     */
    public function getInstitute()
    {
        return $this->institute;
    }

    /**
     * Set area
     *
     * @param string $area
     *
     * @return Education
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Education
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param string $endDate
     *
     * @return Education
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set gpa
     *
     * @param string $gpa
     *
     * @return Education
     */
    public function setGpa($gpa)
    {
        $this->gpa = $gpa;

        return $this;
    }

    /**
     * Get gpa
     *
     * @return string
     */
    public function getGpa()
    {
        return $this->gpa;
    }

    /**
     * Set resumeId
     *
     * @param integer $resumeId
     *
     * @return Education
     */
    public function setResumeId($resumeId)
    {
        $this->resumeId = $resumeId;

        return $this;
    }

    /**
     * Get resumeId
     *
     * @return int
     */
    public function getResumeId()
    {
        return $this->resumeId;
    }
}

