<?php

namespace EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireE
 *
 * @ORM\Table(name="commentaire_e")
 * @ORM\Entity(repositoryClass="EvenementBundle\Repository\CommentaireERepository")
 */
class CommentaireE
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
     * @var \DateTime
     * @ORM\Version
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255)
     */
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity="EntiteBundle\Entity\Evenements", inversedBy="CommentaireE")
     * @ORM\JoinColumn(name="eve_id" ,nullable=false)
     */
    private $eve ;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return CommentaireE
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set contenu.
     *
     * @param string $contenu
     *
     * @return CommentaireE
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu.
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }



    /**
     * Set eve.
     *
     * @param \EntiteBundle\Entity\Evenements $eve
     *
     * @return CommentaireE
     */
    public function setEve(\EntiteBundle\Entity\Evenements $eve)
    {
        $this->eve = $eve;

        return $this;
    }

    /**
     * Get eve.
     *
     * @return \EntiteBundle\Entity\Evenements
     */
    public function getEve()
    {
        return $this->eve;
    }
}
